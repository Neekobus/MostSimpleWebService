<?php 

if ( ! isset($_REQUEST["key"]) || ! isset($_REQUEST["value"]) ) {
	return;
}

$key = $_REQUEST["key"];
$value = $_REQUEST["value"];

$result = file_put_contents("data/$key.txt", $value);
