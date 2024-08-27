<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$strId = '00000000-0000-0000-0000-000000000000';
$objSystemEnvirontment = SystemEnvironmentVariable::LoadById($strId);
$objSystemEnvirontment->CreateTime = new QDateTime('2024-07-12 00:00:01');
$objSystemEnvirontment->Save();
echo $objSystemEnvirontment->Id.' , '.$objSystemEnvirontment->Key;

echo '<br />';

// echo '<br />';
$array = Spyc::YAMLLoad( dirname(__FILE__).'/dev.yml' );
var_dump($array);

?>
