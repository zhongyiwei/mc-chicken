<?php
require_once 'facebook.php';
include "dbFunctions.php";

$id = $_GET['id'];
$type = $_GET['type'];
$goal = executeSelectQuery("SELECT * FROM goal WHERE seeker_goal_id = $id");


$redirect = "http://sit.rp.edu.sg/oxygen/oxygen2.2/facebook/goal_post.php?type=". $type. "&id" . $id;
$appId = '200284213420495';
$appSecret = 'f1c1ab83d794584fb2079a2de9614e27';

// Create your Application instance (replace this with your appId and secret).
$facebook = new Facebook(
    array(
      'appId'  => $appId,
      'secret' => $appSecret,
    'fileUpload' => true,
    'cookie' => true
));

// Get User ID
$user = $facebook->getUser();

if ($user)
{
    try {
        // Proceed knowing you have a logged in user who's authenticated.
        $user_profile = $facebook->api('/me');
    } catch (FacebookApiException $e) {
        error_log($e);
        $user = null;
    }
}

// Login or logout url will be needed depending on current user state.
if ($user)
{
    $logoutUrl = $facebook->getLogoutUrl();
}
else
{
    $loginUrl = $facebook->getLoginUrl(
                            array(
                                'canvas' => 1,
                                'fbconnect' => 0,
                                'scope' => 'publish_stream',//these are the extended permissions you will need for your app, add/remove according to your requirement
                                'redirect_uri' => $redirect,//this is the redirect uri where user will be redirected after allow,
                                ));
}

if ($user)
{
    //show the content of your app
    //make api calls
    //var_dump($user_profile);
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
			Header("Location: http://sit.rp.edu.sg/oxygen/oxygen2.2/index.php/home/goal_status?status=1");
			//echo "Duplicate";
			exit;
		}

		else {
			$msg = $e->getMessage();
			Header("Location: http://sit.rp.edu.sg/oxygen/oxygen2.2/index.php/home/goal_status?status=3");
			//echo "Error";
		}

		//echo "Good";
    }
	Header("Location: http://sit.rp.edu.sg/oxygen/oxygen2.2/index.php/home/goal_status?status=2");

}


else
{
    //redirect user to loginUrl
    echo "<script>parent.location = '".$loginUrl."';</script>";
}
?>