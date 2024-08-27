<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>404 Page Not Found</title>
<style type="text/css">

::selection { background-color: #E13300; color: white; }
::-moz-selection { background-color: #E13300; color: white; }

body {
	background-color: #91a0ff;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	text-align: center;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	color: #ff0405;
	font-size: 24px;
	font-weight: bold;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#container {
	margin: 10px;
	border: 1px solid #D0D0D0;
	box-shadow: 0 0 8px #D0D0D0;
}

.center-screen {
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	text-align: center;
	min-height: 80vh;
	font-size: 14px;
}

p {
	margin: 12px 15px 12px 15px;
}
</style>
</head>
<body>
	<div id="container">
		<h1>Halaman tidak ditemukan</h1>
	</div>
	<div class="center-screen">
		<h2><div id="counter"></div></h2>
	</div>
	<script>
		var nCounter = 5;
		document.getElementById("counter").innerHTML = 'Kembali ke HALAMAN UTAMA dalam ' + nCounter + ' detik';
		function timer(){
			setTimeout(
				function(){
					document.getElementById("counter").innerHTML = 'Kembali ke HALAMAN UTAMA dalam ' + nCounter + ' detik';
					nCounter = nCounter - 1;
					if( nCounter == 0 ) { location = '.'; }
					timer();
				} , 1000
			)
		}
		timer();
	</script>
</body>
</html>