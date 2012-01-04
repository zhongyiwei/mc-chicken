<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>User Register Page</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="<?php echo base_url(); ?>CSS/style.css" rel="stylesheet" type="text/css" media="screen" />

        <!-- password strength-->
        <script type="text/javascript" src="<?php echo base_url(); ?>password/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>password/mocha.js"></script>
        <link type="text/css" href="<?php echo base_url(); ?>password/style.css" rel="stylesheet" />

        
        <!-- datepicker strength-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>datepicker/jquery.ui.all.css"/>
	<script src="<?php echo base_url(); ?>datepicker/jquery-1.6.2.js"></script>
	<script src="<?php echo base_url(); ?>datepicker/jquery.ui.core.js"></script>
	<script src="<?php echo base_url(); ?>datepicker/jquery.ui.datepicker.js"></script>
	<script>
	$(function() {
		$( "#datepicker" ).datepicker({
                        dateFormat:"yy-mm-dd",
			changeMonth: true,
			changeYear: true,
                        yearRange: '-80y:-10y'
		});
	});
	</script>

        
        <!--validation-->
        <script src="<?php echo base_url(); ?>validation/jquery.validate.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>validation/additional-methods.js" type="text/javascript"></script>
        <script type="text/javascript">
            $().ready(function() {
                // validate signup form on keyup and submit
                $("#signupForm").validate({
                    rules: {
                        name: {
                            required:true,
                            lettersonly:true
                        },
                        gender: "required",
                        date_of_birth:"required",
                        nationality:"required",
                        mobile_number:{
                            required:true,
                            digits: true,
                            minlength: 8,
                            maxlength:8
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        password2: {
                            required: true,
                            minlength: 8,
                            maxlength:32,
                            equalTo: "#password"
                        },
                        
                        topic: {
                            required: "#newsletter:checked",
                            minlength: 2
                        },
                        agree: "required"
                    },
                    messages: {
                        name: {
                            required:"Please enter your Name",
                            lettersonly: "Please enter letters only"
                        },
                        gender: "Please choose your Gender",
                        date_of_birth:"Please type your Date Of Birth",
                        nationality:"Please choose your Nationality",
                        mobile_number:{
                            required: "Please enter your Mobile Number",
                            digit: "Please enter digits only",
                            minlength: "Mobile Number must consist of at least 8 digits",
                            maxlength: "Mobile Number must consist of at most 8 digits"
                        },
                        email:{
                            required:"Please enter your Email",
                            email:"Please enter a valid Email Address"
                        },
                        password2: {
                            required: "Please provide a password",
                            minlength: "The length of password should be >= 8",
                            maxlength: "The length of password should be <= 32",
                            equalTo: "Please enter the same password as above"
                        },
                       
                        agree: "Please accept our policy"
                    }
                });
            });
        </script>
        <style>
            #format { margin-top: 2em; }
        </style>
    </head>
    <body>
        <div id="wrapper">
            <!--end #header -->