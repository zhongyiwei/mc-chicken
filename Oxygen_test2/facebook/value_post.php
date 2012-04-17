<?php
//require_once 'login.php';
require_once 'facebook.php';
$type = $_GET['type'];
$v1 = $_GET['v1'];
$v2 = $_GET['v2'];
$v3 = $_GET['v3'];
$v4 = $_GET['v4'];
$appId = '200284213420495';
$appSecret = 'f1c1ab83d794584fb2079a2de9614e27';

$facebook = new Facebook( 
    array(
      'appId'  => $appId,
      'secret' => $appSecret,
    'fileUpload' => true,
    'cookie' => true
));
// add a status message
	$message = "My values in life are " . $v1 . ", " . $v2 . ", " . $v3 . ", " . $v4 . ".";
	$facebook->api('/me/feed', 'POST', array('message' => $message));
	Header("Location: http://sit.rp.edu.sg/oxygen/index.php/home/portfolio_mission");


?>
