<?php

	// Tell QApplication that we are running as a Qcodo CLI Runner/Wrapper
	// so that it properly sets up QApplication::$ScriptFilename on QApplication::InitializeForCli()
	$_SERVER['QCODO_CLI_RUNNER'] = true;

	/*
	 * The following line should require() the prepend.inc.php file
	 * in your includes directory.  This can either be a relative
	 * or an absolute path, but it is recommended to use a relative
	 * path, especially for systems that use multiple instances of Qcodo.
	 * Feel free to modify as needed.
	 */

	if( !defined('__BENCHMARK_MAIN_START_MEMORY__') ) { define ('__BENCHMARK_MAIN_START_MEMORY__', memory_get_usage() ); }
	if( !defined('__BENCHMARK_MAIN_START_TIME__') ){ define ('__BENCHMARK_MAIN_START_TIME__', microtime(true) ); }

	require(dirname(__FILE__) . DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'includes'.DIRECTORY_SEPARATOR.'prepend.inc.php');

	// Finally, require() the ScriptFilename that is being run/executed
	require(QApplication::$ScriptFilename);

	if( !defined('__BENCHMARK_MAIN_END_TIME__') ) { define ('__BENCHMARK_MAIN_END_TIME__', microtime(true) ); }
	if( !defined('__BENCHMARK_MAIN_ELAPSE_TIME__') ) { define ('__BENCHMARK_MAIN_ELAPSE_TIME__', __BENCHMARK_MAIN_END_TIME__ - __BENCHMARK_MAIN_START_TIME__  ); }
	if( !defined('__BENCHMARK_MAIN_END_MEMORY__') ) { define ('__BENCHMARK_MAIN_END_MEMORY__', memory_get_usage() ); }
	if( !defined('__BENCHMARK_MAIN_USAGE_MEMORY__') ) { define ('__BENCHMARK_MAIN_USAGE_MEMORY__', __BENCHMARK_MAIN_END_MEMORY__ - __BENCHMARK_MAIN_START_MEMORY__ ); }

	$intLastMem = memory_get_usage();
	echo 'Processing time in '. number_format(__BENCHMARK_MAIN_ELAPSE_TIME__ , 6, ',', ' ') .' seconds , Memory Usage : ' . number_format(__BENCHMARK_MAIN_USAGE_MEMORY__) . '<br />' . "\n" ;

?>