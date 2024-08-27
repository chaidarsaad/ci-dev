<?php
	// This class is meant to be a date-picker.  It will essentially render an uneditable HTML textbox
	// as well as a calendar icon.  The idea is that if you click on the icon or the textbox,
	// it will pop up a calendar in a new small window.
	// * "Date" is a Date object for the specified date.

	abstract class QDHTMLCalendarType{
		const DateOnly = 'DateOnly';
		const DateTime = 'DateTime';
	}
	
	abstract class QDHTMLCalendarMask{
		const DateOnly = '99-99-9999';
		const DateTime = '99-99-9999 99:99';
	}
	
	class QDHTMLCalendar extends QControl {
		///////////////////////////
		// Private Member Variables
		///////////////////////////
		const FormatDate = 'DD-MM-YYYY';
		const FormatDateTime = 'DD-MM-YYYY hh:mm';

		// MISC
		protected $intTimestamp = null;
		protected $strCalendarType = QDHTMLCalendarType::DateOnly;
		protected $strMask = QDHTMLCalendarMask::DateOnly;
		protected $strMaskWarning="Mask not match";
		protected $strText;
		protected $strCssClass;
		
//		protected $dttMinimumDate = null;
//		protected $dttMaximumDate = null;

		// SETTINGS
		protected $strJavaScripts = 'calendar.js,calendar-lang/calendar-id.js,calendar-setup.js,jquery.js,jquery.maskedinput.js';
		protected $strCssScripts = '/calendar_skins/aqua/theme.css';
		protected $strSingleClick = 'true';

		//////////
		// Methods
		//////////
		public function __construct($objParentObject, $strControlId = null) {
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException  $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
		
		public function ParsePostData() {
			
			$blnChanged = false;
			$dttNewDateTime = new QDateTime();
			
			$strKey = $this->strControlId;
			if(array_key_exists($strKey,$_POST) AND trim($_POST[$strKey]))
			{
				$this->strText = $strDate = $_POST[$strKey];
				if(!$strDate)
				{
					$this->intTimestamp = null;
					return;
				}
				
				//---- olah dulu datanya
				if($this->strCalendarType == QDHTMLCalendarType::DateOnly )
				{
					$temp = @explode('-',$strDate);
					if(@count($temp) < 3)
					{
						$this->intTimestamp = null;
						return ;
					}
					list($day,$month,$year) = @explode('-',$strDate);
					$strDate = $year.'-'.$month.'-'.$day.' 00:00:00';
				}
				else 
				{
					$temp = @explode(' ',$strDate);
					if(@count($temp) < 2)
					{
						$this->intTimestamp = null;
						return ;
					}					
					list($tanggal,$waktu) = @explode(' ',$strDate);
					
					$temp = @explode('-',$tanggal);
					if(@count($temp) < 3)
					{
						$this->intTimestamp = null;
						return ;
					}
					list($day,$month,$year) = @explode('-',$tanggal);
					
					$temp = @explode(':',$waktu);
					if(@count($temp) < 2)
					{
						$this->intTimestamp = null;
						return ;
					}
					list($hour,$minute) = @explode(':',$waktu);
					$strDate = $year.'-'.$month.'-'.$day.' '.str_pad($hour,2,'0',STR_PAD_LEFT).':'.str_pad($minute,2,'0',STR_PAD_LEFT).':00';
				}
				
				/** 
				//  Original
				$dttSelectedDate = new QDateTime($strDate);
				if (version_compare(PHP_VERSION, '5.2.0', '<')) {
					
					$dttNewDateTime->Month = $dttSelectedDate->Month;
					$dttNewDateTime->Day = $dttSelectedDate->Day;
					$dttNewDateTime->Year = $dttSelectedDate->Year;
					QApplication::DisplayAlert("$dttNewDateTime 2");
				} else {
					$dttNewDateTime->SetDate($dttSelectedDate->Year, $dttSelectedDate->Month, $dttSelectedDate->Day);					
				}
				if($this->strCalendarType == QCalendarType::DateTime )
				{
					$dttSelectedDate = new QDateTime($strDate);
					if (version_compare(PHP_VERSION, '5.2.0', '<')) {
						$dttNewDateTime->Hour = $dttSelectedDate->Hour;
						$dttNewDateTime->Minute = $dttSelectedDate->Minute;
						$dttNewDateTime->Second = $dttSelectedDate->Second;
					} else {
						$dttNewDateTime->SetTime($dttSelectedDate->Hour, $dttSelectedDate->Minute, $dttSelectedDate->Second);					
					}
				}
				*/
				$this->intTimestamp = new QDateTime($strDate);
			}
			else $this->intTimestamp = null;
			
			// Update local intTimestamp
			/**
			// Original
			$this->intTimestamp = $dttNewDateTime->Timestamp;
			*/
		}

		public function GetJavaScriptAction() {
			return "onclick";
		}

		public function GetScript(){
			if( !$this->blnVisible )return '';
			if( !$this->blnEnabled )return '';
			if( $this->strMask == '' )return '';
			return sprintf('$("#%s").mask( "%s" )',
							$this->strControlId,
							$this->strMask
						);
		}
		/**
		 *	Setup the Javascript
		 */
		public function GetEndScript() {
			if( !$this->blnVisible )return '';
			if( !$this->blnEnabled )return '';
			$strJavaScript = $this->GetScript();
			return "$().ready(function() {".$strJavaScript.";});";
		}
		
		public function GetEndHtml() {
			ob_start(); ?>
			<style type="text/css" media="all">@import "<?= __CSS_ASSETS__ . $this->strCssScripts; ?>";</style>
			<?php return ob_get_clean();
		}
		
		protected function GetControlHtml() {
			$strStyle = $this->GetStyleAttributes();
			if ($strStyle)
				$strStyle = sprintf('style="%s"', $strStyle);

			if ($this->intTimestamp) {
				$intTimestamp = $this->intTimestamp;
				if($this->strCalendarType == QCalendarType::DateTime) $format = QDHTMLCalendar::FormatDateTime;
				else $format = QDHTMLCalendar::FormatDate ;
				$strDate = $this->DateTime->__toString($format);
				$strDateIso = $this->DateTime->__toString(QDateTime::FormatIso);
			} else {
				$intTimestamp = '';
				$strDateIso = '';
				switch ($this->strCalendarType)
				{
					case QCalendarType::DateOnly : 
						$strDate = str_repeat('&nbsp;',20);
						break;
					case QCalendarType::DateTime :
						$strDate = str_repeat('&nbsp;',32);
						break;
				}
			}
			
			$maxLength = 0;
			switch ($this->strCalendarType)
			{
				case QCalendarType::DateOnly :
					$daFormat = '%d-%m-%Y';
					$showTime = 'false';
					$maxLength = 10;
					if($this->Background){
						$class = $this->strCssClass;
					} else {
						$class = 'calendar';
					}
					break;
				case QCalendarType::DateTime :
					$daFormat = '%d-%m-%Y %H:%M';
					$showTime = 'true';
					$maxLength = 16;
					$class = 'calendartime';
			}
			
//			$strToReturn = sprintf('<span id="%s_show" style="border: 1px solid #CCCCCC;padding: 3px;margin: auto; font:Verdana; font-size:12px ">%s</span> ',
			$strToReturn = sprintf('<input type="text" id="%s" name="%s" value="%s" maxlength="%s" %s%s> ',
				$this->strControlId,
				$this->strControlId,
				$strDate,
				$maxLength,
				$this->GetAttributes(),
				$strStyle
			);
//			echo $this->GetAttributes();

//			$strToReturn .= sprintf('<input type="hidden" name="%s" id="%s" value="%s">',
//				$this->strControlId,
//				$this->strControlId,
//				$strDateIso
//			);

			$strToReturn .= sprintf('<img src="%s/calendar.png" id="%s_trigger" align="absmiddle"/>',
				__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__,
				$this->strControlId
			);
			
			$ifFormat = null;
			$showTime = 'false';
			$formatIso = '%Y-%m-%d %H:%M:%S';
			
			switch ($this->strCalendarType)
			{
				case QCalendarType::DateOnly :
					$daFormat = '%d-%m-%Y';
					$showTime = 'false';
					break;
				case QCalendarType::DateTime :
					$daFormat = '%d-%m-%Y %H:%M';
					$showTime = 'true';
			}
			
//			$strToReturn .= sprintf('
//				<script type="text/javascript">
//				    Calendar.setup({
//				        inputField     :    "%s",      // id of the input field
//				        ifFormat       :    "%s",       // format of the input field
//				        weekNumbers    :    false,       // format of the display area
//				        showsTime      :    %s,            // will display a time selector
//				        button         :    "%s_show",   // trigger for the calendar (button ID)
//				        singleClick    :    %s           // double-click mode
//				    });
//				</script>
//			',
//				$this->strControlId,
//				$daFormat,
//				$showTime,
//				$this->strControlId,
//				$this->strSingleClick
//			);
//			
			$strToReturn .= sprintf('
				<script type="text/javascript">
				    Calendar.setup({
				        inputField     :    "%s",      // id of the input field
				        ifFormat       :    "%s",       // format of the input field
				        weekNumbers    :    false,       // show or not weekdays
				        step	 	   :    1,       // step of year
				        showsTime      :    %s,            // will display a time selector
				        button         :    "%s_trigger",   // trigger for the calendar (button ID)
				        electric       :    false,   // trigger for the calendar (button ID)
				        singleClick    :    %s           // double-click mode
				    });
				</script>
			',
				$this->strControlId,
				$daFormat,
				$showTime,
				$this->strControlId,
				$this->strSingleClick
			);
			
			return $strToReturn;
		}

		public function Validate() {
			if( !$this->blnRequired && $this->strText=='') return true;
			if($this->strCalendarType == QDHTMLCalendarType::DateTime) $this->strMask = QDHTMLCalendarMask::DateTime;
			else $this->strMask = QDHTMLCalendarMask::DateOnly ;
			
			$strPattern = strtr($this->strMask,
								array(	'(' => '\(',
										')' => '\)',
										'[' => '\[',
										']' => '\]',
										'/' => '\/',
									));
			$strPattern = strtr($strPattern,
								array(	'9' => '[0-9]',
										'a' => '[a-zA-Z]',
										'*' => '[0-9a-zA-Z]'
									));
			if ( (preg_match("/^".$strPattern."$/", $this->strText) ) == false ){
				$this->strWarning = $this->strMaskWarning;
				return false;
			}
			if ($this->blnRequired)
			{
				if (!$this->intTimestamp) {
					$this->strValidationError = sprintf("%s is required", $this->strName);
					return false;
				}
			}
				
			//---- check tanggal
			if($this->strCalendarType == QDHTMLCalendarType::DateOnly )
			{
				list($day,$month,$year) = @explode('-',$this->strText);
				if(!checkdate($month,$day,$year)) 
				{
					$this->strWarning = 'Tanggal tidak diketahui';
					return false;
				}
				
				return true;
			}
			else 
			{
				list($tanggal,$waktu) = @explode(' ',$this->strText);
				list($day,$month,$year) = @explode('-',$tanggal);
				if(!checkdate((int)$month,(int)$day,(int)$year)) 
				{
					$this->strWarning = 'Tanggal tidak diketahui';
					return false;
				}
				
				list($hour,$minute) = @explode(':',$waktu);
				if((int)$hour > 23 )
				{
					$this->strWarning = 'Jam tidak lebih dari 24 jam';
					return false;
				}
				
				if((int)$minute > 59)
				{
					$this->strWarning = 'Menit tidak lebih dari 60 menit';
					return false;
				}
				
				return true;
			}
			
			$this->strValidationError = "";
			return true;
		}

		/////////////////////////
		// Public Properties: GET
		/////////////////////////
		public function __get($strName) {
			switch ($strName) {
				// MISC
				case 'Background':
						return $this->blnBackground;
						break;
				case "DateTime":
					if ($this->intTimestamp)
						return new QDateTime($this->intTimestamp);
					else {
						return null;
					}
				case "CalendarType":
					return $this->strCalendarType;
					
				case "CalendarPHPDate" :
					if($this->strCalendarType == QDHTMLCalendarType::DateOnly ) return 'd-m-Y';
					else return 'd-m-Y H:i';

//				case "MinimumDate": return $this->dttMinimumDate;
//				case "MaximumDate": return $this->dttMaximumDate;
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/////////////////////////
		// Public Properties: SET
		/////////////////////////
		public function __set($strName, $mixValue) {
			$this->blnModified = true;

			switch ($strName) {
				case 'Background':
					try {
						$this->blnBackground = QType::Cast($mixValue, QType::Boolean);
						if($this->blnBackground){
							$this->strCssClass = 'transparent_calendar';
						} else {
							$this->strCssClass = 'textbox';
						}
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
					break;
				// MISC
				case "DateTime":
					try {
						$dttDate = QType::Cast($mixValue, QType::DateTime);
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

					if (!is_null($dttDate)) {
						// Original
						// $this->intTimestamp = $dttDate->Timestamp;
						$this->intTimestamp = $dttDate;
					} else {
						$this->intTimestamp = null;
					}

					break;

				case "SingleClick":
					try {
						$this->strSingleClick = QType::Cast($mixValue, QType::String);
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
					break;

				case "CalendarType":
					try {
						$this->strCalendarType = QType::Cast($mixValue, QType::String);
						if($this->strCalendarType == QDHTMLCalendarType::DateTime ) $this->strMask = QDHTMLCalendarMask::DateTime ;
						else $this->strMask = QDHTMLCalendarMask::DateOnly;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
					break;
//				case "MinimumDate": $this->dttMinimumDate = QType::Cast($mixValue, QType::Date); break;
//				case "MaximumDate": $this->dttMaximumDate = QType::Cast($mixValue, QType::Date); break;
				default:
					try {
						parent::__set($strName, $mixValue);
						break;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}
?>