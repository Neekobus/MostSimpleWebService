<?php 

if ( ! isset($_REQUEST["key"])) {
	return;
}

$key = $_REQUEST["key"];

$value = @file_get_contents("data/$key.txt");

if ($value === false) {
	echo "0";
} else {
	echo $value;
}