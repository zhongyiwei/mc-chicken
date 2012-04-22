<!--
    Author     : Ariansah
    Description: Used as the landing page after user login and post his/her goals.
-->
<?php
//require_once 'login.php';
require_once 'facebook.php';
include "dbFunctions.php";
$type = $_GET['type'];
$id = $_GET['id'];
$goal = executeSelectQuery("SELECT * FROM goal WHERE seeker_goal_id = $id");

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
try{
	if ($type == 1) {
		$message = "My Accomplished Goal \n\n";
        $message .= "Goal Description: \n";
        $message .= $goal[0]['goal_desc'];
        $message .= "\n\nAccomplished Date: \n";
        $message .= $goal[0]['actual_end_date'];
	}
	else if($type == 2) {
		$message = "My Current Goal \n\n";
        $message .= "Goal Description: \n";
        $message .= $goal[0]['goal_desc'];
        $message .= "\n\nTarget End Date: \n";
        $message .= $goal[0]['target_end_date'];
	}
	$facebook->api('/me/feed', 'POST', array('message' => $message));
	}
	catch(Exception $e){

	//echo $e->getMessage();
		if ($e->getMessage() == "(#506) Duplicate status message") {
			Header("Location: http://homes.soi.rp.edu.sg/oxygen/index.php/home/goal_status?status=1");
			//echo "Duplicate";
			exit;
		}

		else {
			$msg = $e->getMessage();
			Header("Location: http://homes.soi.rp.edu.sg/oxygen/index.php/home/goal_status?status=3");
			//echo "Error";
		}

		//echo "Good";
    }
	Header("Location: http://homes.soi.rp.edu.sg/oxygen/index.php/home/goal_status?status=2");


?>
