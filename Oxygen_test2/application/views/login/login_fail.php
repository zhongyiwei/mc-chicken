<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login Page</title>
        <link rel="shortcut icon" href="<?php echo base_url(); ?>CSS/images/favicon.ico"/>
        <link href="<?php echo base_url(); ?>CSS/login.css" rel="stylesheet" type="text/css" media="screen" />
        <!--[if IE]><link href="<?php echo base_url(); ?>CSS/styleForIE.css" rel="stylesheet" type="text/css" /><![endif]-->
        <!--[if IE]><link href="<?php echo base_url(); ?>CSS/loginForIE.css" rel="stylesheet" type="text/css" /><![endif]-->
    </head>
    <body>
        <div id="wrapper">
            <div id="login">
                <h1>&otimes; User Login Failed &otimes;</h1>
                <div id="p_font">
                    <h2>Your information is not correct, please try <a href="<?php echo base_url(); ?>index.php/login/index/">again</a>!</h2>
                </div>
            </div>

            <div id="home">
                <a href="<?php echo base_url(); ?>index.php/home/index/"><img src="<?php echo base_url(); ?>CSS/images/background/home_button.png"/></a>
            </div>

            <?php $this->load->view('register/register_footer'); ?>
