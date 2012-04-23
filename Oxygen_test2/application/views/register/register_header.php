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

        <link type="text/css" href="<?php echo base_url(); ?>CSS/themename/ui-lightness/jquery-ui-1.8.12.custom.css" rel="Stylesheet" />
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.5.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui-1.8.12.custom.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/script.js"></script>

        <!-- password strength-->
        <script type="text/javascript" src="<?php echo base_url(); ?>password/mocha.js"></script>
        <link type="text/css" href="<?php echo base_url(); ?>password/style.css" rel="stylesheet" />
        <!--[if IE]><link href="<?php echo base_url();?>CSS/styleForIE.css" rel="stylesheet" type="text/css" /><![endif]-->
        <!--[if IE]><link href="<?php echo base_url();?>CSS/loginFailForIE.css" rel="stylesheet" type="text/css" /><![endif]-->

        <script>


            $(function() {
                $( "#datepicker123" ).datepicker({
                    dateFormat:"yy-mm-dd",
                    changeMonth: true,
                    changeYear: true,
                    yearRange: '-100y:-10y'
                });
            });
            
            $(function() {
                $( "#datepicker" ).datepicker({
                    dateFormat:"yy-mm-dd",
                    changeMonth: true,
                    changeYear: true,
                    yearRange: '-100y:-10y'
                });   
            });
        </script>
        
                <script language="JavaScript" type="text/javascript">//WenJie function for what's next
	
            function loadFlow(){
                var loggedin='no';  
<?php
$is_logged_in = $is_logged_in = $this->session->userdata('is_logged_in');
if (isset($is_logged_in) && ($is_logged_in == 'true')) {
    ?>
                loggedin='yes';
<?php } else { ?>
            loggedin='no'; <?php } ?>

    

        // Create our XMLHttpRequest object
        var hr = new XMLHttpRequest();
        // Create some variables we need to send to our PHP file
        var url = '<?php echo base_url() . "index.php/home/"; ?>'+"getflow";

        var vars = "logged="+loggedin;
        hr.open("POST", url, true);
        // Set content type header information for sending url encoded variables in the request
        hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        // Access the onreadystatechange event for the XMLHttpRequest object
        hr.onreadystatechange = function() {
            if(hr.readyState == 4 && hr.status == 200) {
                var return_data = hr.responseText;
			
                document.getElementById("dialog").innerHTML = return_data;
            }
        }
        // Send the data to PHP now... and wait for response to update the status div
        hr.send(vars); // Actually execute the request
        document.getElementById("dialog").innerHTML = "processing...";
    }

        </script>
        <script> //Dialog box for what's nex
            // increase the default animation speed to exaggerate the effect
            $.fx.speeds._default = 1000;
            $(function() {

                $( "#dialog" ).dialog({
                    width:950,
                    autoOpen: false,
                    show: "blind",
                    hide: "explode"
                });

                $( "#opener" ).click(function() {
                    $( "#dialog" ).dialog( "open" );
                    return false;
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