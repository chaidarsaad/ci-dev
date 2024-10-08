<?php
	// This is the "full" version of configuration.inc.php, complete with full comments inline in the configuration file.
	// While it is recommended (for ease of code readability) to use configuration.inc.php-dist instead,
	// this "-full" file can be useful for newer users of Qcodo.

	// To use, simply rename or copy this file to includes/configuration.inc.php, and begin making modifications
	// to the configuration constants as it makes sense for your PHP and docroot installation.

	// The Server Instance constant is used to help ease web applications with multiple environments.
	// Feel free to use, change or ignore.

	define ('__SERVER_INSTANCE__', 'dev');

	switch (__SERVER_INSTANCE__) {
		case 'dev':
		case 'test':
		case 'stage':
		case 'prod':
			/* Constant to allow/disallow remote access to the admin pages
			 * e.g. the generated form_drafts, codegen, or any other script that calls QApplication::CheckRemoteAdmin()
			 *
			 * If set to TRUE, anyone can access those pages.
			 * If set to FALSE, only localhost can access those pages.
			 * If set to an IP address (e.g. "12.34.56.78"), then only localhost and 12.34.56.78 can access those pages.
			 * If set to a comma-separate list of IP addresses, then localhoost and any of those IP addresses can access those pages.
			 *
			 * Of course, you can also feel free to remove QApplication::CheckRemoteAdmin() call on any of these pages,
			 * which will completely ignore ALLOW_REMOTE_ADMIN altogether.
			 */
			define('ALLOW_REMOTE_ADMIN', false);

			/* Constants for Document Root (and Virtual Directories / Subfoldering)
			 * 
			 * IMPORTANT NOTE FOR WINDOWS USERS
			 * Please note that all paths should use standard "forward" slashes instead of "backslashes".
			 * So windows paths would look like "c:/wwwroot" instead of "c:\wwwroot".
			 * 
			 * Please specify the "Document Root" here.  This is the top level filepath for your web application.
			 * If you are on a installation that uses virtual directories, then you must specify that here, as well.
			 *
			 * For example, if your example web application where http://my.domain.com/index.php points to
			 * /home/web/htdocs/index.php, then you must specify:
			 *		__DOCROOT__ is defined as '/home/web/htdocs'
			 *		(note the leading slash and no ending slash)
			 * On Windows, if you have http://my.domain.com/index.php pointing to c:\webroot\files\index.php, then:
			 *		__DOCROOT__ is defined as 'c:/webroot/files'
			 *		(again, note the leading c:/ and no ending slash)
			 *
			 * Next, if you are using Virtual Directories, where http://not.my.domain.com/~my_user/index.php
			 * (for example) points to /home/my_user/public_html/index.php, then:
			 *		__DOCROOT__ is defined as '/home/my_user/public_html'
			 *		__VIRTUAL_DIRECTORY__ is defined as '/~my_user'
			 *
			 * Finally, if you have installed Qcodo within a SubDirectory of the Document Root, so for example
			 * the Qcodo "index.php" page is accessible at http://my.domain.com/frameworks/qcodo/index.php, then:
			 *		__SUBDIRECTORY__ is defined as '/frameworks/qcodo'
			 *		(again, note the leading and no ending slash)
			 *
			 * In combination with Virtual Directories, if you (for example) have the Qcodo "index.php" page
			 * accessible at http://not.my.domain.com/~my_user/qcodo/index.php, and the index.php resides at
			 * c:\users\my_user\public_html\index.php, then:
			 *		__DOCROOT__ is defined as 'c:/users/my_user/public_html'
			 *		__VIRTUAL_DIRECTORY__ is defined as '/~my_user'
			 *		__SUBDIRECTORY__ is defined as '/qcodo'
			 */

			/*
			if(in_array(strtolower(PHP_OS), array('linux', 'superior operating system'))){
				// versi Linux
				define ('__DOCROOT__', '/var/www');
				// define ('__DOCROOT__', doc_root);
				define ('__OS__', 'linux');
			} elseif (in_array(strtolower(PHP_OS), array('windows', 'winnt', 'win64', 'win32', 'win32s'))){
				// versi Windows
				define ('__DOCROOT__', 'c:/xampp/htdocs');
				define ('__OS__', 'windows');
			}
			*/

			// echo "abcde";

			$strRootDir = '/var/www';
			if( is_dir( $strRootDir ) ) {
				define ('__DOCROOT__', $strRootDir);
				define ('__OS__', 'linux');
			}
			else {
				$strRootDir = 'c:/xampp/htdocs';
				// echo $strRootDir;
				if( is_dir( $strRootDir ) ) {
					// define('__DOCROOT__', $strRootDir);
					define('__DOCROOT__', 'C:\xampp\htdocs\ci-core\application\libraries\qc\cli');
					define('__OS__', 'windows');
				}
			}

			if( !defined('__QCODO_DIR__') ){
				if( !defined('__OS__') && ( __OS__ == 'linux') ){
					$array = explode( DIRECTORY_SEPARATOR , dirname(__FILE__) );
					$QCodoDir = $array[0].DIRECTORY_SEPARATOR.$array[1].DIRECTORY_SEPARATOR.$array[2].DIRECTORY_SEPARATOR.$array[3].DIRECTORY_SEPARATOR.'application'.DIRECTORY_SEPARATOR.'libraries'.DIRECTORY_SEPARATOR.'qc';
				} else {
					$array = explode( DIRECTORY_SEPARATOR , dirname(__FILE__) );
					$QCodoDir = $array[0].DIRECTORY_SEPARATOR.$array[1].DIRECTORY_SEPARATOR.$array[2].DIRECTORY_SEPARATOR.$array[3].DIRECTORY_SEPARATOR.'application'.DIRECTORY_SEPARATOR.'libraries'.DIRECTORY_SEPARATOR.'qc';
				}

				define ('__QCODO_DIR__',  $QCodoDir );
				define ('__QCODO_DB_DRIVER__', 'PostgreSql');
				define ('__QCODO_DB_HOST__', '127.0.0.1' );
				define ('__QCODO_DB_PORT__', '5432' );
				define ('__QCODO_DB_USER__', 'postgres' );
				define ('__QCODO_DB_PASSWD__', 'postgres' );
				define ('__QCODO_DB__', 'zephir' );
				error_reporting(E_ALL ^ E_NOTICE);
			}
			// echo strlen(__QCODO_DIR__); exit();

			define ('__VIRTUAL_DIRECTORY__', '');
			define ('__APPLICATION_ROOT__',  __QCODO_DIR__ );
			define ('__APPLICATION__', __APPLICATION_ROOT__.DIRECTORY_SEPARATOR);
			define ('__SUBDIRECTORY__', __APPLICATION_ROOT__);

			define ('__PHP_ASSETS__', __QCODO_DIR__ . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'php');

			// echo DIRECTORY_SEPARATOR."\n";
			// echo __QCODO_DIR__."\n";
			// echo dirname(__FILE__)."\n";

			/*
			 * If you are using Apache-based mod_rewrite to perform URL rewrites, please specify "apache" here.
			 * Otherwise, specify as "none"
			 */
			define ('__URL_REWRITE__', 'none');


			// Constant for the DevTools (Command Line Interface) Directory
			// (We're assuming it's at one level above __DOCROOT__... but feel free to specify any absolute path
			define ('__DEVTOOLS_CLI__', __QCODO_DIR__ . DIRECTORY_SEPARATOR . 'cli');


			/* Absolute File Paths for Internal Directories
			 *
			 * Please specify the absolute file path for all the following directories in your Qcodo-based web
			 * application.
			 *
			 * Note that all paths must start with a slash or 'x:\' (for windows users) and must have
			 * no ending slashes.  (We take advantage of the __DOCROOT__ constant defined above and the
			 * __INCLUDES__ constant defined below to help simplify this section. But note that this is NOT
			 * required.  These directories can also reside outside of the Document Root altogether.
			 * So feel free to use or not use the __DOCROOT__ and __INCLUDES__ constants as you wish/need
			 * in defining your other directory constants.)
			 */

			// General Includes (the location of the Prepend and Configuration includes files)
			define ('__INCLUDES__', __QCODO_DIR__ . DIRECTORY_SEPARATOR . 'includes');

			// The Qcodo Directories
			// Includes subdirectories for Qcodo Customizations in CodeGen and QForms, i18n PO files, QCache storage, etc.
			// Also includes the _core subdirectory for the QCodo Core
			define ('__QCODO__', __INCLUDES__ . DIRECTORY_SEPARATOR . 'qcodo');

			// The Qcodo Core
			define ('__QCODO_CORE__', __INCLUDES__ . DIRECTORY_SEPARATOR . 'qcodo' . DIRECTORY_SEPARATOR . '_core');

			// Destination for Code Generated class files

			define ('__DATA_CLASSES__', __QCODO_DIR__ . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'db');
			define ('__DATAGEN_CLASSES__', __QCODO_DIR__ . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'db' . DIRECTORY_SEPARATOR . 'generated');

			/* Relative File Paths for Web Accessible Directories
			 *
			 * Please specify the file path RELATIVE FROM THE DOCROOT for all the following web-accessible directories
			 * in your Qcodo-based web application.
			 *
			 * For some directories (e.g. the Examples site), if you are no longer using it, you STILL need to 
			 * have the constant defined.  But feel free to define the directory constant as blank (e.g. '') or null.
			 *
			 * Note that constants must have a leading slash and no ending slash, and they MUST reside within
			 * the Document Root.
			 * 
			 * (We take advantage of the __SUBDIRECTORY__ constant defined above to help simplify this section.
			 * Note that this is NOT required.  Feel free to use or ignore.)
			 */

			// Examples and Devtools are deprecated as of 0.4.0, but these constants are still here to
			// support any QPM packages that may still want to use them
			// Location of the Examples site
			define ('__EXAMPLES__', null);
			// Location of the Qcodo-specific web-based development tools, like codegen.php
			define ('__DEVTOOLS__', null);

			// Location of Qcodo-specific Web Assets (JavaScripts, CSS, Images, and PHP Pages/Popups)

			// ========================================================================================= //

			// define ('__BASE_URL__', __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__);

			define ('__BASE_DIRECTORY__', __QCODO_DIR__);


			// ========================================================================================= //
			/* Database Connection SerialArrays
			 *
			 * Note that all Database Connections are defined as constant serialized arrays.  Qcodo supports
			 * connections to an unlimited number of different database sources.  Each database source, referenced by
			 * a numeric index, will have its DB Connection SerialArray stored in a DB_CONNECTION_# constant
			 * (where # is the numeric index).
			 *
			 * The SerialArray can have the following keys:
			 * "adapter" (Required), options are:
			 *		MySql (MySQL v4.x, using the old mysql extension)
			 *		MySqli (MySQL v4.x, using the new mysqli extension)
			 *		MySqli5 (MySQL v5.x, using the new mysqli extension)
			 *		SqlServer (Microsoft SQL Server)
			 *		PostgreSql (PostgreSQL)
			 * "server" (Required) is the db server's name or IP address, e.g. localhost, 10.1.1.5, etc.
			 * "port" is the port number - default is the server-specified default
			 * "database", "username", "password" should be self explanatory
			 * "profiling" is true or false, defining whether or not you want to enable DB profiling - default is false
			 *		NOTE: Profiling should only be enabled when you are actively wanting to profile a
			 *		specific PHP script or scripts.  Because of SIGNIFICANT performance degradation,
			 *		it should otherwise always be OFF.
			 * "ScriptPath": you can have CodeGen virtually add additional FKs, even though they are
			 * 		not defined as a DB constraint in the database, by using a script to define what
			 * 		those constraints are.  The path of the script can be defined here. - default is blank or none
			 * Note: any option not used or set to blank will result in using the default value for that option
			 */

			define('DB_CONNECTION_1', serialize(array(
				'adapter' => __QCODO_DB_DRIVER__,
				'server' => __QCODO_DB_HOST__,
				'port' => __QCODO_DB_PORT__,
				'database' => __QCODO_DB__,
				'username' => __QCODO_DB_USER__,
				'password' => __QCODO_DB_PASSWD__,
				'profiling' => false
				))
			);

			// Additional Database Connection Strings can be defined here (e.g. for connection #1, #2, #3, #4, #5, etc.)
//			define('DB_CONNECTION_1', serialize(array('adapter'=>'SqlServer', 'server'=>'localhost', 'port'=>null, 'database'=>'qcodo', 'username'=>'root', 'password'=>'', 'profiling'=>false)));
//			define('DB_CONNECTION_2', serialize(array('adapter'=>'SqlServer', 'server'=>'localhost', 'port'=>null, 'database'=>'qcodo', 'username'=>'root', 'password'=>'', 'profiling'=>false)));
//			define('DB_CONNECTION_3', serialize(array('adapter'=>'MySqli', 'server'=>'localhost', 'port'=>null, 'database'=>'qcodo', 'username'=>'root', 'password'=>'', 'profiling'=>false)));
//			define('DB_CONNECTION_4', serialize(array('adapter'=>'MySql', 'server'=>'localhost', 'port'=>null, 'database'=>'qcodo', 'username'=>'root', 'password'=>'', 'profiling'=>false)));
//			define('DB_CONNECTION_5', serialize(array('adapter'=>'PostgreSql', 'server'=>'localhost', 'port'=>null, 'database'=>'qcodo', 'username'=>'root', 'password'=>'', 'profiling'=>false)));

			// (For PHP > v5.1) Setup the default timezone (if not already specified in php.ini)
			if ((function_exists('date_default_timezone_set')) && (!ini_get('date.timezone')))
				date_default_timezone_set('Asia/Jakarta');

			// In order to log errors, you must first define the absolute filepath to a directory where you want to store the logged errors
			define('ERROR_LOG_PATH', null);

			// And then to log ALL errors that have occurred, set flag to TRUE
			define('ERROR_LOG_FLAG', false);

			// To enable the display of "Friendly" error pages and messages, define them here
//			define('ERROR_FRIENDLY_PAGE_PATH', '/absolute/path/to/friendly_error_page.html');
//			define('ERROR_FRIENDLY_AJAX_MESSAGE', 'Oops!  An error has occurred.\r\n\r\nThe error was logged, and we will take a look into this right away.');

			break;

	}
?>
