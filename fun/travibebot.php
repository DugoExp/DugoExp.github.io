<?php

ini_set('error_reporting', E_ALL);

$botToken = "280709888:AAHoc_IJ0L76RdjYnUBY0Y8BIzPZn7ArcjU";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);

$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];
$fname = &_POST["fname"];

switch($message) {

	case "/what":
		sendMessage($chatId, ["&fname"]);

		break;
	case "/credits":
		sendMessage($chatId, "This bot was created by Travis

			V 0.0.1");
		break;
	case "/roberto":
		sendMessage($chatId, "Robertio Is a total scrub");
		break;
	default:
		sendMessage($chatId, "Get started by messaging
			/beemovieplease");
		break;
}



function sendMessage ($chatId, $message) {

	$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
	file_get_contents($url);

}

?>

<h2>Test</h2>
