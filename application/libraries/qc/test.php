<?php
	require_once("./includes/prepend.inc.php");
	$strId = '00000000-0000-0000-0000-000000000000';
	$objSystemEnvirontment = SystemEnvironmentVariable::LoadById($strId);
	echo $objSystemEnvirontment->Id.' , '.$objSystemEnvirontment->Key;
?>