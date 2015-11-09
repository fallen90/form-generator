<?php
	include_once "helper/string.php";
	include_once "helper/html.php";
	include_once "helper/bootstrap.php";

	$form = json_decode(file_get_contents("form.json"), true);
	$string = new String($form);
	// $string->create();
	print_r($form);
?>