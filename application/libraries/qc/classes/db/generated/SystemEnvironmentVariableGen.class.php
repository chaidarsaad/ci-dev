<?php
	/**
	 * The abstract SystemEnvironmentVariableGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the SystemEnvironmentVariable subclass which
	 * extends this SystemEnvironmentVariableGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the SystemEnvironmentVariable class.
	 * 
	 * @package Qcodo
	 * @subpackage GeneratedDataObjects
	 * @property string $Id the value for strId (PK)
	 * @property string $JournalId the value for strJournalId 
	 * @property string $Actor the value for strActor 
	 * @property string $DepartmentId the value for strDepartmentId 
	 * @property string $UserId the value for strUserId 
	 * @property string $Menu the value for strMenu 
	 * @property string $Name the value for strName 
	 * @property string $Description the value for strDescription 
	 * @property string $Key the value for strKey 
	 * @property string $Value the value for strValue 
	 * @property string $CreateUser the value for strCreateUser 
	 * @property QDateTime $CreateTime the value for dttCreateTime 
	 * @property string $ModifyUser the value for strModifyUser 
	 * @property QDateTime $ModifyTime the value for dttModifyTime 
	 * @property integer $ModifyVersion the value for intModifyVersion 
	 * @property string $DeleteUser the value for strDeleteUser 
	 * @property QDateTime $DeleteTime the value for dttDeleteTime 
	 * @property string $IpAddress the value for strIpAddress 
	 * @property string $State the value for strState 
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class SystemEnvironmentVariableGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK column system_environment_variable.id
		 * @var string strId
		 */
		protected $strId;
		const IdDefault = 'uuid_in((md5((((random())::text || (random())::text) || (now())::text)))::cstring)';


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var string __strId;
		 */
		protected $__strId;

		/**
		 * Protected member variable that maps to the database column system_environment_variable.journal_id
		 * @var string strJournalId
		 */
		protected $strJournalId;
		const JournalIdDefault = null;


		/**
		 * Protected member variable that maps to the database column system_environment_variable.actor
		 * @var string strActor
		 */
		protected $strActor;
		const ActorMaxLength = 5120;
		const ActorDefault = null;


		/**
		 * Protected member variable that maps to the database column system_environment_variable.department_id
		 * @var string strDepartmentId
		 */
		protected $strDepartmentId;
		const DepartmentIdDefault = null;


		/**
		 * Protected member variable that maps to the database column system_environment_variable.user_id
		 * @var string strUserId
		 */
		protected $strUserId;
		const UserIdDefault = null;


		/**
		 * Protected member variable that maps to the database column system_environment_variable.menu
		 * @var string strMenu
		 */
		protected $strMenu;
		const MenuMaxLength = 512;
		const MenuDefault = null;


		/**
		 * Protected member variable that maps to the database column system_environment_variable.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 512;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column system_environment_variable.description
		 * @var string strDescription
		 */
		protected $strDescription;
		const DescriptionMaxLength = 5120;
		const DescriptionDefault = null;


		/**
		 * Protected member variable that maps to the database column system_environment_variable.key
		 * @var string strKey
		 */
		protected $strKey;
		const KeyMaxLength = 512;
		const KeyDefault = null;


		/**
		 * Protected member variable that maps to the database column system_environment_variable.value
		 * @var string strValue
		 */
		protected $strValue;
		const ValueMaxLength = 10240;
		const ValueDefault = null;


		/**
		 * Protected member variable that maps to the database column system_environment_variable.create_user
		 * @var string strCreateUser
		 */
		protected $strCreateUser;
		const CreateUserDefault = null;


		/**
		 * Protected member variable that maps to the database column system_environment_variable.create_time
		 * @var QDateTime dttCreateTime
		 */
		protected $dttCreateTime;
		const CreateTimeDefault = null;


		/**
		 * Protected member variable that maps to the database column system_environment_variable.modify_user
		 * @var string strModifyUser
		 */
		protected $strModifyUser;
		const ModifyUserDefault = null;


		/**
		 * Protected member variable that maps to the database column system_environment_variable.modify_time
		 * @var QDateTime dttModifyTime
		 */
		protected $dttModifyTime;
		const ModifyTimeDefault = null;


		/**
		 * Protected member variable that maps to the database column system_environment_variable.modify_version
		 * @var integer intModifyVersion
		 */
		protected $intModifyVersion;
		const ModifyVersionDefault = null;


		/**
		 * Protected member variable that maps to the database column system_environment_variable.delete_user
		 * @var string strDeleteUser
		 */
		protected $strDeleteUser;
		const DeleteUserDefault = null;


		/**
		 * Protected member variable that maps to the database column system_environment_variable.delete_time
		 * @var QDateTime dttDeleteTime
		 */
		protected $dttDeleteTime;
		const DeleteTimeDefault = null;


		/**
		 * Protected member variable that maps to the database column system_environment_variable.ip_address
		 * @var string strIpAddress
		 */
		protected $strIpAddress;
		const IpAddressMaxLength = 30;
		const IpAddressDefault = null;


		/**
		 * Protected member variable that maps to the database column system_environment_variable.state
		 * @var string strState
		 */
		protected $strState;
		const StateMaxLength = 1;
		const StateDefault = '\'A\'::bpchar';


		/**
		 * Protected array of virtual attributes for this object (e.g. extra/other calculated and/or non-object bound
		 * columns from the run-time database query result for this object).  Used by InstantiateDbRow and
		 * GetVirtualAttribute.
		 * @var string[] $__strVirtualAttributeArray
		 */
		protected $__strVirtualAttributeArray = array();

		/**
		 * Protected internal member variable that specifies whether or not this object is Restored from the database.
		 * Used by Save() to determine if Save() should perform a db UPDATE or INSERT.
		 * @var bool __blnRestored;
		 */
		protected $__blnRestored;




		///////////////////////////////
		// PROTECTED MEMBER OBJECTS
		///////////////////////////////





		///////////////////////////////
		// CLASS-WIDE LOAD AND COUNT METHODS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return QDatabaseBase reference to the Database object that can query this class
		 */
		public static function GetDatabase() {
			return QApplication::$Database[1];
		}

		/**
		 * Load a SystemEnvironmentVariable from PK Info
		 * @param string $strId
		 * @return SystemEnvironmentVariable
		 */
		public static function Load($strId) {
			// Use QuerySingle to Perform the Query
			return SystemEnvironmentVariable::QuerySingle(
				QQ::Equal(QQN::SystemEnvironmentVariable()->Id, $strId)
			);
		}

		/**
		 * Load all SystemEnvironmentVariables
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return SystemEnvironmentVariable[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call SystemEnvironmentVariable::QueryArray to perform the LoadAll query
			try {
				return SystemEnvironmentVariable::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all SystemEnvironmentVariables
		 * @return int
		 */
		public static function CountAll() {
			// Call SystemEnvironmentVariable::QueryCount to perform the CountAll query
			return SystemEnvironmentVariable::QueryCount(QQ::All());
		}




		///////////////////////////////
		// QCODO QUERY-RELATED METHODS
		///////////////////////////////

		/**
		 * Internally called method to assist with calling Qcodo Query for this class
		 * on load methods.
		 * @param QQueryBuilder &$objQueryBuilder the QueryBuilder object that will be created
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause object or array of QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with (sending in null will skip the PrepareStatement step)
		 * @param boolean $blnCountOnly only select a rowcount
		 * @return string the query statement
		 */
		protected static function BuildQueryStatement(&$objQueryBuilder, QQCondition $objConditions, $objOptionalClauses, $mixParameterArray, $blnCountOnly) {
			// Get the Database Object for this Class
			$objDatabase = SystemEnvironmentVariable::GetDatabase();

			// Create/Build out the QueryBuilder object with SystemEnvironmentVariable-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'system_environment_variable');
			SystemEnvironmentVariable::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('system_environment_variable');

			// Set "CountOnly" option (if applicable)
			if ($blnCountOnly)
				$objQueryBuilder->SetCountOnlyFlag();

			// Apply Any Conditions
			if ($objConditions)
				try {
					$objConditions->UpdateQueryBuilder($objQueryBuilder);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

			// Iterate through all the Optional Clauses (if any) and perform accordingly
			if ($objOptionalClauses) {
				if ($objOptionalClauses instanceof QQClause)
					$objOptionalClauses->UpdateQueryBuilder($objQueryBuilder);
				else if (is_array($objOptionalClauses))
					foreach ($objOptionalClauses as $objClause)
						$objClause->UpdateQueryBuilder($objQueryBuilder);
				else
					throw new QCallerException('Optional Clauses must be a QQClause object or an array of QQClause objects');
			}

			// Get the SQL Statement
			$strQuery = $objQueryBuilder->GetStatement();

			// Prepare the Statement with the Query Parameters (if applicable)
			if ($mixParameterArray) {
				if (is_array($mixParameterArray)) {
					if (count($mixParameterArray))
						$strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

					// Ensure that there are no other Unresolved Named Parameters
					if (strpos($strQuery, chr(QQNamedValue::DelimiterCode) . '{') !== false)
						throw new QCallerException('Unresolved named parameters in the query');
				} else
					throw new QCallerException('Parameter Array must be an array of name-value parameter pairs');
			}

			// Return the Objects
			return $strQuery;
		}

		/**
		 * Static Qcodo Query method to query for a single SystemEnvironmentVariable object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return SystemEnvironmentVariable the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = SystemEnvironmentVariable::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new SystemEnvironmentVariable object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return SystemEnvironmentVariable::InstantiateDbRow($objDbResult->GetNextRow(), null, null, null, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcodo Query method to query for an array of SystemEnvironmentVariable objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return SystemEnvironmentVariable[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = SystemEnvironmentVariable::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return SystemEnvironmentVariable::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcodo Query method to query for a count of SystemEnvironmentVariable objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = SystemEnvironmentVariable::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and return the row_count
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Figure out if the query is using GroupBy
			$blnGrouped = false;

			if ($objOptionalClauses) foreach ($objOptionalClauses as $objClause) {
				if ($objClause instanceof QQGroupBy) {
					$blnGrouped = true;
					break;
				}
			}

			if ($blnGrouped)
				// Groups in this query - return the count of Groups (which is the count of all rows)
				return $objDbResult->CountRows();
			else {
				// No Groups - return the sql-calculated count(*) value
				$strDbRow = $objDbResult->FetchRow();
				return QType::Cast($strDbRow[0], QType::Integer);
			}
		}

/*		public static function QueryArrayCached($strConditions, $mixParameterArray = null) {
			// Get the Database Object for this Class
			$objDatabase = SystemEnvironmentVariable::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'system_environment_variable_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with SystemEnvironmentVariable-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				SystemEnvironmentVariable::GetSelectFields($objQueryBuilder);
				SystemEnvironmentVariable::GetFromFields($objQueryBuilder);

				// Ensure the Passed-in Conditions is a string
				try {
					$strConditions = QType::Cast($strConditions, QType::String);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

				// Create the Conditions object, and apply it
				$objConditions = eval('return ' . $strConditions . ';');

				// Apply Any Conditions
				if ($objConditions)
					$objConditions->UpdateQueryBuilder($objQueryBuilder);

				// Get the SQL Statement
				$strQuery = $objQueryBuilder->GetStatement();

				// Save the SQL Statement in the Cache
				$objCache->SaveData($strQuery);
			}

			// Prepare the Statement with the Parameters
			if ($mixParameterArray)
				$strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objDatabase->Query($strQuery);
			return SystemEnvironmentVariable::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this SystemEnvironmentVariable
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'system_environment_variable';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'journal_id', $strAliasPrefix . 'journal_id');
			$objBuilder->AddSelectItem($strTableName, 'actor', $strAliasPrefix . 'actor');
			$objBuilder->AddSelectItem($strTableName, 'department_id', $strAliasPrefix . 'department_id');
			$objBuilder->AddSelectItem($strTableName, 'user_id', $strAliasPrefix . 'user_id');
			$objBuilder->AddSelectItem($strTableName, 'menu', $strAliasPrefix . 'menu');
			$objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			$objBuilder->AddSelectItem($strTableName, 'description', $strAliasPrefix . 'description');
			$objBuilder->AddSelectItem($strTableName, 'key', $strAliasPrefix . 'key');
			$objBuilder->AddSelectItem($strTableName, 'value', $strAliasPrefix . 'value');
			$objBuilder->AddSelectItem($strTableName, 'create_user', $strAliasPrefix . 'create_user');
			$objBuilder->AddSelectItem($strTableName, 'create_time', $strAliasPrefix . 'create_time');
			$objBuilder->AddSelectItem($strTableName, 'modify_user', $strAliasPrefix . 'modify_user');
			$objBuilder->AddSelectItem($strTableName, 'modify_time', $strAliasPrefix . 'modify_time');
			$objBuilder->AddSelectItem($strTableName, 'modify_version', $strAliasPrefix . 'modify_version');
			$objBuilder->AddSelectItem($strTableName, 'delete_user', $strAliasPrefix . 'delete_user');
			$objBuilder->AddSelectItem($strTableName, 'delete_time', $strAliasPrefix . 'delete_time');
			$objBuilder->AddSelectItem($strTableName, 'ip_address', $strAliasPrefix . 'ip_address');
			$objBuilder->AddSelectItem($strTableName, 'state', $strAliasPrefix . 'state');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a SystemEnvironmentVariable from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this SystemEnvironmentVariable::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return SystemEnvironmentVariable
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow)
				return null;


			// Create a new instance of the SystemEnvironmentVariable object
			$objToReturn = new SystemEnvironmentVariable();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->strId = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$objToReturn->__strId = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'journal_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'journal_id'] : $strAliasPrefix . 'journal_id';
			$objToReturn->strJournalId = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'actor', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'actor'] : $strAliasPrefix . 'actor';
			$objToReturn->strActor = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'department_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'department_id'] : $strAliasPrefix . 'department_id';
			$objToReturn->strDepartmentId = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'user_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'user_id'] : $strAliasPrefix . 'user_id';
			$objToReturn->strUserId = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'menu', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'menu'] : $strAliasPrefix . 'menu';
			$objToReturn->strMenu = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'name'] : $strAliasPrefix . 'name';
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'description', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'description'] : $strAliasPrefix . 'description';
			$objToReturn->strDescription = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'key', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'key'] : $strAliasPrefix . 'key';
			$objToReturn->strKey = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'value', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'value'] : $strAliasPrefix . 'value';
			$objToReturn->strValue = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'create_user', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'create_user'] : $strAliasPrefix . 'create_user';
			$objToReturn->strCreateUser = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'create_time', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'create_time'] : $strAliasPrefix . 'create_time';
			$objToReturn->dttCreateTime = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAliasName = array_key_exists($strAliasPrefix . 'modify_user', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'modify_user'] : $strAliasPrefix . 'modify_user';
			$objToReturn->strModifyUser = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'modify_time', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'modify_time'] : $strAliasPrefix . 'modify_time';
			$objToReturn->dttModifyTime = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAliasName = array_key_exists($strAliasPrefix . 'modify_version', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'modify_version'] : $strAliasPrefix . 'modify_version';
			$objToReturn->intModifyVersion = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'delete_user', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'delete_user'] : $strAliasPrefix . 'delete_user';
			$objToReturn->strDeleteUser = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'delete_time', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'delete_time'] : $strAliasPrefix . 'delete_time';
			$objToReturn->dttDeleteTime = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAliasName = array_key_exists($strAliasPrefix . 'ip_address', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'ip_address'] : $strAliasPrefix . 'ip_address';
			$objToReturn->strIpAddress = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'state', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'state'] : $strAliasPrefix . 'state';
			$objToReturn->strState = $objDbRow->GetColumn($strAliasName, 'Char');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'system_environment_variable__';




			return $objToReturn;
		}

		/**
		 * Instantiate an array of SystemEnvironmentVariables from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return SystemEnvironmentVariable[]
		 */
		public static function InstantiateDbResult(QDatabaseResultBase $objDbResult, $strExpandAsArrayNodes = null, $strColumnAliasArray = null) {
			$objToReturn = array();
			
			if (!$strColumnAliasArray)
				$strColumnAliasArray = array();

			// If blank resultset, then return empty array
			if (!$objDbResult)
				return $objToReturn;

			// Load up the return array with each row
			if ($strExpandAsArrayNodes) {
				$objLastRowItem = null;
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = SystemEnvironmentVariable::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = SystemEnvironmentVariable::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 */

		public static function GetFieldValue($objDbRow, $strCollumnName, $strFieldType) {
			if($strFieldType=='DateTime'){
				return new QDateTime($objDbRow[$strCollumnName]);
			} else if($strFieldType=='Date'){
				return new QDateTime($objDbRow[$strCollumnName]);
			} else if($strFieldType=='Time'){
				return new QDateTime($objDbRow[$strCollumnName]);
			} else {
				return $objDbRow[$strCollumnName];
			}
		}

		public static function DirectRowRead($objDbRow) {
			// If blank row, return null
			if (!$objDbRow)
				return null;

			$objToReturn = new SystemEnvironmentVariable();
			$objToReturn->__blnRestored = true;

			$objToReturn->strId = SystemEnvironmentVariable::GetFieldValue($objDbRow,'id','VarChar');
			$objToReturn->strJournalId = SystemEnvironmentVariable::GetFieldValue($objDbRow,'journal_id','VarChar');
			$objToReturn->strActor = SystemEnvironmentVariable::GetFieldValue($objDbRow,'actor','VarChar');
			$objToReturn->strDepartmentId = SystemEnvironmentVariable::GetFieldValue($objDbRow,'department_id','VarChar');
			$objToReturn->strUserId = SystemEnvironmentVariable::GetFieldValue($objDbRow,'user_id','VarChar');
			$objToReturn->strMenu = SystemEnvironmentVariable::GetFieldValue($objDbRow,'menu','VarChar');
			$objToReturn->strName = SystemEnvironmentVariable::GetFieldValue($objDbRow,'name','VarChar');
			$objToReturn->strDescription = SystemEnvironmentVariable::GetFieldValue($objDbRow,'description','VarChar');
			$objToReturn->strKey = SystemEnvironmentVariable::GetFieldValue($objDbRow,'key','VarChar');
			$objToReturn->strValue = SystemEnvironmentVariable::GetFieldValue($objDbRow,'value','VarChar');
			$objToReturn->strCreateUser = SystemEnvironmentVariable::GetFieldValue($objDbRow,'create_user','VarChar');
			$objToReturn->dttCreateTime = SystemEnvironmentVariable::GetFieldValue($objDbRow,'create_time','DateTime');
			$objToReturn->strModifyUser = SystemEnvironmentVariable::GetFieldValue($objDbRow,'modify_user','VarChar');
			$objToReturn->dttModifyTime = SystemEnvironmentVariable::GetFieldValue($objDbRow,'modify_time','DateTime');
			$objToReturn->intModifyVersion = SystemEnvironmentVariable::GetFieldValue($objDbRow,'modify_version','Integer');
			$objToReturn->strDeleteUser = SystemEnvironmentVariable::GetFieldValue($objDbRow,'delete_user','VarChar');
			$objToReturn->dttDeleteTime = SystemEnvironmentVariable::GetFieldValue($objDbRow,'delete_time','DateTime');
			$objToReturn->strIpAddress = SystemEnvironmentVariable::GetFieldValue($objDbRow,'ip_address','VarChar');
			$objToReturn->strState = SystemEnvironmentVariable::GetFieldValue($objDbRow,'state','Char');
			return $objToReturn;

		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single SystemEnvironmentVariable object,
		 * by Id Index(es)
		 * @param string $strId
		 * @return SystemEnvironmentVariable
		*/
		public static function LoadById($strId) {
			return SystemEnvironmentVariable::QuerySingle(
				QQ::Equal(QQN::SystemEnvironmentVariable()->Id, $strId)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this SystemEnvironmentVariable
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = SystemEnvironmentVariable::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO "system_environment_variable" (
							"id",
							"journal_id",
							"actor",
							"department_id",
							"user_id",
							"menu",
							"name",
							"description",
							"key",
							"value",
							"create_user",
							"create_time",
							"modify_user",
							"modify_time",
							"modify_version",
							"delete_user",
							"delete_time",
							"ip_address",
							"state"
						) VALUES (
							' . $objDatabase->SqlVariable($this->strId) . ',
							' . $objDatabase->SqlVariable($this->strJournalId) . ',
							' . $objDatabase->SqlVariable($this->strActor) . ',
							' . $objDatabase->SqlVariable($this->strDepartmentId) . ',
							' . $objDatabase->SqlVariable($this->strUserId) . ',
							' . $objDatabase->SqlVariable($this->strMenu) . ',
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->strDescription) . ',
							' . $objDatabase->SqlVariable($this->strKey) . ',
							' . $objDatabase->SqlVariable($this->strValue) . ',
							' . $objDatabase->SqlVariable($this->strCreateUser) . ',
							' . $objDatabase->SqlVariable($this->dttCreateTime) . ',
							' . $objDatabase->SqlVariable($this->strModifyUser) . ',
							' . $objDatabase->SqlVariable($this->dttModifyTime) . ',
							' . $objDatabase->SqlVariable($this->intModifyVersion) . ',
							' . $objDatabase->SqlVariable($this->strDeleteUser) . ',
							' . $objDatabase->SqlVariable($this->dttDeleteTime) . ',
							' . $objDatabase->SqlVariable($this->strIpAddress) . ',
							' . $objDatabase->SqlVariable($this->strState) . '
						)
					');


				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							"system_environment_variable"
						SET
							"id" = ' . $objDatabase->SqlVariable($this->strId) . ',
							"journal_id" = ' . $objDatabase->SqlVariable($this->strJournalId) . ',
							"actor" = ' . $objDatabase->SqlVariable($this->strActor) . ',
							"department_id" = ' . $objDatabase->SqlVariable($this->strDepartmentId) . ',
							"user_id" = ' . $objDatabase->SqlVariable($this->strUserId) . ',
							"menu" = ' . $objDatabase->SqlVariable($this->strMenu) . ',
							"name" = ' . $objDatabase->SqlVariable($this->strName) . ',
							"description" = ' . $objDatabase->SqlVariable($this->strDescription) . ',
							"key" = ' . $objDatabase->SqlVariable($this->strKey) . ',
							"value" = ' . $objDatabase->SqlVariable($this->strValue) . ',
							"create_user" = ' . $objDatabase->SqlVariable($this->strCreateUser) . ',
							"create_time" = ' . $objDatabase->SqlVariable($this->dttCreateTime) . ',
							"modify_user" = ' . $objDatabase->SqlVariable($this->strModifyUser) . ',
							"modify_time" = ' . $objDatabase->SqlVariable($this->dttModifyTime) . ',
							"modify_version" = ' . $objDatabase->SqlVariable($this->intModifyVersion) . ',
							"delete_user" = ' . $objDatabase->SqlVariable($this->strDeleteUser) . ',
							"delete_time" = ' . $objDatabase->SqlVariable($this->dttDeleteTime) . ',
							"ip_address" = ' . $objDatabase->SqlVariable($this->strIpAddress) . ',
							"state" = ' . $objDatabase->SqlVariable($this->strState) . '
						WHERE
							"id" = ' . $objDatabase->SqlVariable($this->__strId) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;
			$this->__strId = $this->strId;


			// Return 
			return $mixToReturn;
		}

		/**
		 * Delete this SystemEnvironmentVariable
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->strId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this SystemEnvironmentVariable with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = SystemEnvironmentVariable::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"system_environment_variable"
				WHERE
					"id" = ' . $objDatabase->SqlVariable($this->strId) . '');
		}

		/**
		 * Delete all SystemEnvironmentVariables
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = SystemEnvironmentVariable::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					"system_environment_variable"');
		}

		/**
		 * Truncate system_environment_variable table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = SystemEnvironmentVariable::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE "system_environment_variable"');
		}

		/**
		 * Reload this SystemEnvironmentVariable from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved SystemEnvironmentVariable object.');

			// Reload the Object
			$objReloaded = SystemEnvironmentVariable::Load($this->strId);

			// Update $this's local variables to match
			$this->strId = $objReloaded->strId;
			$this->__strId = $this->strId;
			$this->strJournalId = $objReloaded->strJournalId;
			$this->strActor = $objReloaded->strActor;
			$this->strDepartmentId = $objReloaded->strDepartmentId;
			$this->strUserId = $objReloaded->strUserId;
			$this->strMenu = $objReloaded->strMenu;
			$this->strName = $objReloaded->strName;
			$this->strDescription = $objReloaded->strDescription;
			$this->strKey = $objReloaded->strKey;
			$this->strValue = $objReloaded->strValue;
			$this->strCreateUser = $objReloaded->strCreateUser;
			$this->dttCreateTime = $objReloaded->dttCreateTime;
			$this->strModifyUser = $objReloaded->strModifyUser;
			$this->dttModifyTime = $objReloaded->dttModifyTime;
			$this->intModifyVersion = $objReloaded->intModifyVersion;
			$this->strDeleteUser = $objReloaded->strDeleteUser;
			$this->dttDeleteTime = $objReloaded->dttDeleteTime;
			$this->strIpAddress = $objReloaded->strIpAddress;
			$this->strState = $objReloaded->strState;
		}



		////////////////////
		// PUBLIC OVERRIDERS
		////////////////////

				/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'Id':
					// Gets the value for strId (PK)
					// @return string
					return $this->strId;

				case 'JournalId':
					// Gets the value for strJournalId 
					// @return string
					return $this->strJournalId;

				case 'Actor':
					// Gets the value for strActor 
					// @return string
					return $this->strActor;

				case 'DepartmentId':
					// Gets the value for strDepartmentId 
					// @return string
					return $this->strDepartmentId;

				case 'UserId':
					// Gets the value for strUserId 
					// @return string
					return $this->strUserId;

				case 'Menu':
					// Gets the value for strMenu 
					// @return string
					return $this->strMenu;

				case 'Name':
					// Gets the value for strName 
					// @return string
					return $this->strName;

				case 'Description':
					// Gets the value for strDescription 
					// @return string
					return $this->strDescription;

				case 'Key':
					// Gets the value for strKey 
					// @return string
					return $this->strKey;

				case 'Value':
					// Gets the value for strValue 
					// @return string
					return $this->strValue;

				case 'CreateUser':
					// Gets the value for strCreateUser 
					// @return string
					return $this->strCreateUser;

				case 'CreateTime':
					// Gets the value for dttCreateTime 
					// @return QDateTime
					return $this->dttCreateTime;

				case 'ModifyUser':
					// Gets the value for strModifyUser 
					// @return string
					return $this->strModifyUser;

				case 'ModifyTime':
					// Gets the value for dttModifyTime 
					// @return QDateTime
					return $this->dttModifyTime;

				case 'ModifyVersion':
					// Gets the value for intModifyVersion 
					// @return integer
					return $this->intModifyVersion;

				case 'DeleteUser':
					// Gets the value for strDeleteUser 
					// @return string
					return $this->strDeleteUser;

				case 'DeleteTime':
					// Gets the value for dttDeleteTime 
					// @return QDateTime
					return $this->dttDeleteTime;

				case 'IpAddress':
					// Gets the value for strIpAddress 
					// @return string
					return $this->strIpAddress;

				case 'State':
					// Gets the value for strState 
					// @return string
					return $this->strState;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////


				case 'TableName':
					return '';
					
				case '__Restored':
					return $this->__blnRestored;

				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

				/**
		 * Override method to perform a property "Set"
		 * This will set the property $strName to be $mixValue
		 *
		 * @param string $strName Name of the property to set
		 * @param string $mixValue New value of the property
		 * @return mixed
		 */
		public function __set($strName, $mixValue) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'Id':
					// Sets the value for strId (PK)
					// @param string $mixValue
					// @return string
					try {
						return ($this->strId = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'JournalId':
					// Sets the value for strJournalId 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strJournalId = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Actor':
					// Sets the value for strActor 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strActor = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DepartmentId':
					// Sets the value for strDepartmentId 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strDepartmentId = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'UserId':
					// Sets the value for strUserId 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strUserId = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Menu':
					// Sets the value for strMenu 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strMenu = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Name':
					// Sets the value for strName 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Description':
					// Sets the value for strDescription 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strDescription = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Key':
					// Sets the value for strKey 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strKey = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Value':
					// Sets the value for strValue 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strValue = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CreateUser':
					// Sets the value for strCreateUser 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strCreateUser = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CreateTime':
					// Sets the value for dttCreateTime 
					// @param QDateTime $mixValue
					// @return QDateTime
					try {
						return ($this->dttCreateTime = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ModifyUser':
					// Sets the value for strModifyUser 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strModifyUser = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ModifyTime':
					// Sets the value for dttModifyTime 
					// @param QDateTime $mixValue
					// @return QDateTime
					try {
						return ($this->dttModifyTime = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ModifyVersion':
					// Sets the value for intModifyVersion 
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intModifyVersion = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DeleteUser':
					// Sets the value for strDeleteUser 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strDeleteUser = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DeleteTime':
					// Sets the value for dttDeleteTime 
					// @param QDateTime $mixValue
					// @return QDateTime
					try {
						return ($this->dttDeleteTime = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'IpAddress':
					// Sets the value for strIpAddress 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strIpAddress = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'State':
					// Sets the value for strState 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strState = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				default:
					try {
						return parent::__set($strName, $mixValue);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Lookup a VirtualAttribute value (if applicable).  Returns NULL if none found.
		 * @param string $strName
		 * @return string
		 */
		public function GetVirtualAttribute($strName) {
			if (array_key_exists($strName, $this->__strVirtualAttributeArray))
				return $this->__strVirtualAttributeArray[$strName];
			return null;
		}



		///////////////////////////////
		// ASSOCIATED OBJECTS' METHODS
		///////////////////////////////





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="SystemEnvironmentVariable"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:string"/>';
			$strToReturn .= '<element name="JournalId" type="xsd:string"/>';
			$strToReturn .= '<element name="Actor" type="xsd:string"/>';
			$strToReturn .= '<element name="DepartmentId" type="xsd:string"/>';
			$strToReturn .= '<element name="UserId" type="xsd:string"/>';
			$strToReturn .= '<element name="Menu" type="xsd:string"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="Description" type="xsd:string"/>';
			$strToReturn .= '<element name="Key" type="xsd:string"/>';
			$strToReturn .= '<element name="Value" type="xsd:string"/>';
			$strToReturn .= '<element name="CreateUser" type="xsd:string"/>';
			$strToReturn .= '<element name="CreateTime" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="ModifyUser" type="xsd:string"/>';
			$strToReturn .= '<element name="ModifyTime" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="ModifyVersion" type="xsd:int"/>';
			$strToReturn .= '<element name="DeleteUser" type="xsd:string"/>';
			$strToReturn .= '<element name="DeleteTime" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="IpAddress" type="xsd:string"/>';
			$strToReturn .= '<element name="State" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('SystemEnvironmentVariable', $strComplexTypeArray)) {
				$strComplexTypeArray['SystemEnvironmentVariable'] = SystemEnvironmentVariable::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, SystemEnvironmentVariable::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new SystemEnvironmentVariable();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->strId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'JournalId'))
				$objToReturn->strJournalId = $objSoapObject->JournalId;
			if (property_exists($objSoapObject, 'Actor'))
				$objToReturn->strActor = $objSoapObject->Actor;
			if (property_exists($objSoapObject, 'DepartmentId'))
				$objToReturn->strDepartmentId = $objSoapObject->DepartmentId;
			if (property_exists($objSoapObject, 'UserId'))
				$objToReturn->strUserId = $objSoapObject->UserId;
			if (property_exists($objSoapObject, 'Menu'))
				$objToReturn->strMenu = $objSoapObject->Menu;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if (property_exists($objSoapObject, 'Description'))
				$objToReturn->strDescription = $objSoapObject->Description;
			if (property_exists($objSoapObject, 'Key'))
				$objToReturn->strKey = $objSoapObject->Key;
			if (property_exists($objSoapObject, 'Value'))
				$objToReturn->strValue = $objSoapObject->Value;
			if (property_exists($objSoapObject, 'CreateUser'))
				$objToReturn->strCreateUser = $objSoapObject->CreateUser;
			if (property_exists($objSoapObject, 'CreateTime'))
				$objToReturn->dttCreateTime = new QDateTime($objSoapObject->CreateTime);
			if (property_exists($objSoapObject, 'ModifyUser'))
				$objToReturn->strModifyUser = $objSoapObject->ModifyUser;
			if (property_exists($objSoapObject, 'ModifyTime'))
				$objToReturn->dttModifyTime = new QDateTime($objSoapObject->ModifyTime);
			if (property_exists($objSoapObject, 'ModifyVersion'))
				$objToReturn->intModifyVersion = $objSoapObject->ModifyVersion;
			if (property_exists($objSoapObject, 'DeleteUser'))
				$objToReturn->strDeleteUser = $objSoapObject->DeleteUser;
			if (property_exists($objSoapObject, 'DeleteTime'))
				$objToReturn->dttDeleteTime = new QDateTime($objSoapObject->DeleteTime);
			if (property_exists($objSoapObject, 'IpAddress'))
				$objToReturn->strIpAddress = $objSoapObject->IpAddress;
			if (property_exists($objSoapObject, 'State'))
				$objToReturn->strState = $objSoapObject->State;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, SystemEnvironmentVariable::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttCreateTime)
				$objObject->dttCreateTime = $objObject->dttCreateTime->__toString(QDateTime::FormatSoap);
			if ($objObject->dttModifyTime)
				$objObject->dttModifyTime = $objObject->dttModifyTime->__toString(QDateTime::FormatSoap);
			if ($objObject->dttDeleteTime)
				$objObject->dttDeleteTime = $objObject->dttDeleteTime->__toString(QDateTime::FormatSoap);
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	class QQNodeSystemEnvironmentVariable extends QQNode {
		protected $strTableName = 'system_environment_variable';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'SystemEnvironmentVariable';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'string', $this);
				case 'JournalId':
					return new QQNode('journal_id', 'JournalId', 'string', $this);
				case 'Actor':
					return new QQNode('actor', 'Actor', 'string', $this);
				case 'DepartmentId':
					return new QQNode('department_id', 'DepartmentId', 'string', $this);
				case 'UserId':
					return new QQNode('user_id', 'UserId', 'string', $this);
				case 'Menu':
					return new QQNode('menu', 'Menu', 'string', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'string', $this);
				case 'Key':
					return new QQNode('key', 'Key', 'string', $this);
				case 'Value':
					return new QQNode('value', 'Value', 'string', $this);
				case 'CreateUser':
					return new QQNode('create_user', 'CreateUser', 'string', $this);
				case 'CreateTime':
					return new QQNode('create_time', 'CreateTime', 'QDateTime', $this);
				case 'ModifyUser':
					return new QQNode('modify_user', 'ModifyUser', 'string', $this);
				case 'ModifyTime':
					return new QQNode('modify_time', 'ModifyTime', 'QDateTime', $this);
				case 'ModifyVersion':
					return new QQNode('modify_version', 'ModifyVersion', 'integer', $this);
				case 'DeleteUser':
					return new QQNode('delete_user', 'DeleteUser', 'string', $this);
				case 'DeleteTime':
					return new QQNode('delete_time', 'DeleteTime', 'QDateTime', $this);
				case 'IpAddress':
					return new QQNode('ip_address', 'IpAddress', 'string', $this);
				case 'State':
					return new QQNode('state', 'State', 'string', $this);

				case '_PrimaryKeyNode':
					return new QQNode('id', 'Id', 'string', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

	class QQReverseReferenceNodeSystemEnvironmentVariable extends QQReverseReferenceNode {
		protected $strTableName = 'system_environment_variable';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'SystemEnvironmentVariable';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'string', $this);
				case 'JournalId':
					return new QQNode('journal_id', 'JournalId', 'string', $this);
				case 'Actor':
					return new QQNode('actor', 'Actor', 'string', $this);
				case 'DepartmentId':
					return new QQNode('department_id', 'DepartmentId', 'string', $this);
				case 'UserId':
					return new QQNode('user_id', 'UserId', 'string', $this);
				case 'Menu':
					return new QQNode('menu', 'Menu', 'string', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'string', $this);
				case 'Key':
					return new QQNode('key', 'Key', 'string', $this);
				case 'Value':
					return new QQNode('value', 'Value', 'string', $this);
				case 'CreateUser':
					return new QQNode('create_user', 'CreateUser', 'string', $this);
				case 'CreateTime':
					return new QQNode('create_time', 'CreateTime', 'QDateTime', $this);
				case 'ModifyUser':
					return new QQNode('modify_user', 'ModifyUser', 'string', $this);
				case 'ModifyTime':
					return new QQNode('modify_time', 'ModifyTime', 'QDateTime', $this);
				case 'ModifyVersion':
					return new QQNode('modify_version', 'ModifyVersion', 'integer', $this);
				case 'DeleteUser':
					return new QQNode('delete_user', 'DeleteUser', 'string', $this);
				case 'DeleteTime':
					return new QQNode('delete_time', 'DeleteTime', 'QDateTime', $this);
				case 'IpAddress':
					return new QQNode('ip_address', 'IpAddress', 'string', $this);
				case 'State':
					return new QQNode('state', 'State', 'string', $this);

				case '_PrimaryKeyNode':
					return new QQNode('id', 'Id', 'string', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

?>