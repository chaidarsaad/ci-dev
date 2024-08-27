<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter QCodo ORM Generator</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	#container {
		margin-left: 5px;
		margin-top: 10px;
		margin-right: 5px;
		margin-bottom: 5px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}

	body {
		background-color: #fff;
		margin: 5px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
		text-decoration: none;
	}

	a:hover {
		color: #97310e;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		min-height: 80px;
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 4px 0;
		padding: 0px 10px 0px 10px;
	}

	pre {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 14px;
		display: block;
		padding: 0px -20px 0px -20px ;
		margin-top: -14px;
		margin-bottom: 0px;
		min-height: 60px;
	}

	#body {
		margin: 0px 15px 0px 15px;
		min-height: 96px;
	}

	p {
		margin: 0 0 10px;
		margin-top: -8px;
		margin-bottom: -8px;
		padding:0;
	}

	p.footer {
		text-align: left;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 15px 0 10px;
		margin: 12px 0 0 0;
		margin-left: 5px; /* paling bawah */
	}

	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter QCodo ORM Generator!</h1>

	<div id="body">
		<!-- <p>The page you are looking at is being generated dynamically by QCodo Generator.</p> -->
		<?php
		if( !defined('__BENCHMARK_MAIN_START_MEMORY__') ){ define ('__BENCHMARK_MAIN_START_MEMORY__', memory_get_usage() ); }
		if( !defined('__BENCHMARK_MAIN_START_TIME__') ){ define ('__BENCHMARK_MAIN_START_TIME__', microtime(true) ); }
		?>

		<code style="height: 500px; overflow-y: scroll; overflow: auto;">
			<pre>
			<?php

			if( defined('__QCODO_ENABLED__') )
			{
				// exec('/bin/php /var/www/ci/application/libraries/qc/cli/qcodo codegen',$output1,$result);
				if( file_exists( __QCODO_DIR__.'/cli/qcodo' ) ){
					echo "<div style=\"height: 0px; margin-top: -2px;margin-bottom: -2px;\"></div>";
					echo "---------------------------------------------------------------------";
					switch ( __PLATFORM__ ) {
						case 'linux/*nix':
							exec('/bin/php '.__QCODO_DIR__.'/cli/qcodo codegen',$output0,$result);
							break ;
						case 'windows':
							exec('"'.__QCODO_DIR__.DIRECTORY_SEPARATOR.'cli'.DIRECTORY_SEPARATOR.'qcodo.bat" codegen',$output0,$result);
							break ;
					}
					$output0 = implode('<br />',$output0);
					$output0 = str_replace('	','    ',$output0);
					$output0 = str_replace('<','[',$output0);
					$output0 = str_replace('[%','<%',$output0);
					$output0 = str_replace('>',']',$output0);
					$output0 = str_replace('%]','%>',$output0);
					$output0 = str_replace('[br /]','<br />',$output0);
					$output0 = str_replace('<br /><br />','<br />',$output0);
					$output0 = str_replace('<br />','<div style="height: 0px; margin-top: -2px;margin-bottom: -2px;"></div>',$output0);
					$output0 .= "---------------------------------------------------------------------";
					echo $output0;
				}
			}
			else
			{
				echo '<br /><br />QCodo Library Disabled';
			}

			?>
			</pre>
		</code>

	</div>
	<?php
		$PhpVersion = substr( phpversion() , 0 , 6 );
		if( !defined('__BENCHMARK_MAIN_END_TIME__') ){ define ('__BENCHMARK_MAIN_END_TIME__', microtime(true) ); }
		if( !defined('__BENCHMARK_MAIN_ELAPSE_TIME__') ){ define ('__BENCHMARK_MAIN_ELAPSE_TIME__', __BENCHMARK_MAIN_END_TIME__ - __BENCHMARK_MAIN_START_TIME__ ); }
		if( !defined('__BENCHMARK_MAIN_END_MEMORY__') ){ define ('__BENCHMARK_MAIN_END_MEMORY__', memory_get_usage() ); }
		if( !defined('__BENCHMARK_MAIN_USAGE_MEMORY__') ){ define ('__BENCHMARK_MAIN_USAGE_MEMORY__', __BENCHMARK_MAIN_END_MEMORY__ - __BENCHMARK_MAIN_START_MEMORY__ ); }
	?>

	<p class="footer">Page rendered in <strong><?php echo number_format(__BENCHMARK_MAIN_ELAPSE_TIME__ , 6, ',', ' '); ?></strong> seconds , Memory Usage <strong><?php echo number_format(__BENCHMARK_MAIN_USAGE_MEMORY__); ?></strong>. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?> <?php echo ' , Php version ' . $PhpVersion; ?></p>
</div>

</body>
</html>
