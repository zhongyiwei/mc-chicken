<?php
/*
    Author     : Ariansah
    Description: Used to check if user has logged in to Facebook and given permission to the App to post on his/her wall. If the user has done so,
                 the code below will post the user's values.
*/
require_once 'facebook.php';
$type = $_GET['type'];
$v1 = $_GET['v1'];
$v2 = $_GET['v2'];
$v3 = $_GET['v3'];
$v4 = $_GET['v4'];

if ($v1 == 'No value') {
	Header("Location: http://homes.soi.rp.edu.sg/oxygen/index.php/home/value_status?status=4");
}
else {

$redirect = "http://homes.soi.rp.edu.sg/oxygen/facebook/value_post.php?" . "v1=" . $v1 . "&v2=" . $v2 . "&v3=" . $v3 . "&v4=" . $v4;
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
	$message = "My values in life are " . $v1 . ", " . $v2 . ", " . $v3 . ", " . $v4 . ".";
	$facebook->api('/me/feed', 'POST', array('message' => $message));

	}
	catch(Exception $e){

	//echo $e->getMessage();
		if ($e->getMessage() == "(#506) Duplicate status message") {
			Header("Location: http://homes.soi.rp.edu.sg/oxygen/index.php/home/value_status?status=1");
			//echo "Duplicate";
			exit;
		}

		else {
			$msg = $e->getMessage();
			Header("Location: http://homes.soi.rp.edu.sg/oxygen/index.php/home/value_status?status=3");
			//echo "Error";
		}

		//echo "Good";
    }
	Header("Location: http://homes.soi.rp.edu.sg/oxygen/index.php/home/value_status?status=2");

}


else
{
    //redirect user to loginUrl
    echo "<script>parent.location = '".$loginUrl."';</script>";
}
}
?>