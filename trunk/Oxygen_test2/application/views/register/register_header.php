<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Oxygen</title>
        <link rel="shortcut icon" href="<?php echo base_url(); ?>CSS/images/favicon.ico"/>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="<?php echo base_url(); ?>CSS/register.css" rel="stylesheet" type="text/css" media="screen" />

        <link href="<?php echo base_url(); ?>CSS/dropdown_sidebar.css" rel="stylesheet" type="text/css" media="screen" />
        <link type="text/css" href="<?php echo base_url(); ?>CSS/themename/ui-lightness/jquery-ui-1.8.12.custom.css" rel="Stylesheet" />
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.5.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui-1.8.12.custom.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.dropdown.easing.1.3.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/script.sidebar_dropdown.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/script.js"></script>

        <!-- password strength-->
        <script type="text/javascript" src="<?php echo base_url(); ?>password/mocha.js"></script>
        <link type="text/css" href="<?php echo base_url(); ?>password/style.css" rel="stylesheet" />
        <!--[if IE]><link href="<?php echo base_url();?>CSS/styleForIE.css" rel="stylesheet" type="text/css" /><![endif]-->


        <script>
            $(function() {
                $( "#datepicker" ).datepicker({
                    dateFormat:"yy-mm-dd"
                });
            });

            $(function() {
                $( "#datepicker123" ).datepicker({
                    dateFormat:"yy-mm-dd",
                    changeMonth: true,
                    changeYear: true,
                    yearRange: '-100y:-10y'
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