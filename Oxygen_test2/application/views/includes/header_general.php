<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Oxygen</title>
        <link rel="shortcut icon" href="<?php echo base_url(); ?>CSS/images/favicon.ico"/>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <!--load main css-->
        <link href="<?php echo base_url();?>CSS/reset.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="<?php echo base_url();?>CSS/style.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="<?php echo base_url();?>CSS/dropdown_sidebar.css" rel="stylesheet" type="text/css" media="screen" />
        <link type="text/css" href="<?php echo base_url();?>CSS/themename/ui-lightness/jquery-ui-1.8.12.custom.css" rel="Stylesheet" />
          <!--[if IE]><link href="<?php echo base_url();?>CSS/styleForIE.css" rel="stylesheet" type="text/css" /><![endif]-->
      
        <script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.5.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui-1.8.12.custom.min.js"></script>
         <script type="text/javascript" src="<?php echo base_url();?>js/jquery.dropdown.easing.1.3.js"></script>
         <script type="text/javascript" src="<?php echo base_url();?>js/script.sidebar_dropdown.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/script.js"></script>

 <!--start of css and js for TRANSLATION-->
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>CSS/translation.css" />
<script type="text/javascript" src="<?php echo base_url();?>js/google_ajax_translation.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.translation.js"></script>




     <!--end of css and js for gallery slider in mission_slider page-->

        
        <!-- Start of Reference: http://www.jankoatwarpspeed.com/post/2008/06/09/Building-a-better-web-forms-Context-highlighting-using-jQuery.aspx -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>CSS/radio.css" media="screen"/>
        <script type="text/javascript" src="<?php echo base_url();?>js/radio.js"></script>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>CSS/highlight.css" media="screen"/>
        <!-- End of Reference: http://www.jankoatwarpspeed.com/post/2008/06/09/Building-a-better-web-forms-Context-highlighting-using-jQuery.aspx -->


        <!--Start of the style for Sortable textarea for specific tasks under page "set activity"   -->
        <style>
        	#sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
        	#sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
        	#sortable li span { position: absolute; margin-left: -1.3em; }
      </style>
    <!--End of the style for Sortable textarea for specific tasks under page "set activity"   -->
     <!--Begin of TRANSLATION--Robin   -->

     <script language="javascript" type="text/javascript">
        $(function() {
		$( "#activity_accordion" ).accordion({
			autoHeight: false,
			navigation: true
		});
	});


             $(function() {
                 for (var i = 1; i <= 8; i++) {
		$( "#start_date"+i ).datepicker({
                        minDate: 0,
			numberOfMonths: 3,
			showButtonPanel: true,
                        dateFormat:"yy-mm-dd"
		});
                $( "#end_date"+i ).datepicker({
                        minDate: 0,
			numberOfMonths: 3,
			showButtonPanel: true,
                        dateFormat:"yy-mm-dd"
		});
                 }});
        </script>
     <script language="javascript" type="text/javascript">
        function ValidateDate()
    {
        var alertReason1 =  'End Date must be greater than or equal to Start Date.';
         for (var i = 1; i <= 8; i++) {
        //document.write("here");        
      if(document.getElementById('start_date'+i)){
       // alert('start_date'+i);
        var SDate = document.getElementById('start_date'+i).value;
        var EDate =  document.getElementById('end_date'+i).value;
        if(SDate > EDate && SDate != '' && EDate != '')
        {
            alert(alertReason1);
            document.getElementById('end_date'+i).value = "";
            return false;
        }
  
         }
         }
    }


 </script>
 
 

 
 
              <script language="JavaScript" type="text/javascript">//WenJie function for what's next
	
            function loadFlow(){
			var loggedin='no';  
<?php
$is_logged_in=$is_logged_in = $this->session->userdata('is_logged_in');
if (isset($is_logged_in) && ($is_logged_in == 'true')) { ?>
loggedin='yes';
<?php } else {?>
loggedin='no'; <?php } ?>

    

                // Create our XMLHttpRequest object
                var hr = new XMLHttpRequest();
                // Create some variables we need to send to our PHP file
                var url = '<?php echo base_url()."index.php/home/";?>'+"getflow";

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
	<script> //Dialog box for values
	// increase the default animation speed to exaggerate the effect
	$.fx.speeds._default = 1000;
	$(function() {

		$( "#dialog2" ).dialog({
	
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});


	});
	</script>
    <script language="javascript" type="text/javascript">
	//tabs---wenjie
	            $(function() {
                $( "#tabs" ).tabs();
            });
	//End of tabs---wenjie
	
	
          $(document).ready(function() {
        //ta
        $("#myTable")
          .tablesorter({widthFixed: true, widgets: ['zebra']});

        //


      }); // ends (document).ready(function()

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
                    yearRange: '-100y:-6y'

                });
            });
//Validate end date is greater than start date



	$(function() {
		$( "#sortable" ).sortable();
		$( "#sortable" ).disableSelection();
	});

	$(function() {
		$( "button, input:submit, a", ".form_submit" ).button();
		$( "a", ".form_submit" ).click(function() { return false; });
	});


//start of function for dynamic background for "set_activity_form" on page "set activity"
        $(function() {
		var icons = {
			header: "ui-icon-circle-arrow-e",
			headerSelected: "ui-icon-circle-arrow-s"
		};
		$( "#accordion" ).accordion({
			icons: icons
		});
	});

//radio button effect

        $(function()
        {
            $('.left,.left_update,.tasks, .form_content input, .form_content textarea, .form_content select').focus(function(){
            $(this).parents('.row').addClass("over");
            }).blur(function(){
            $(this).parents('.row').removeClass("over");
            });
        });
//End of function for dynamic background for "set_activity_form" on page "set activity"
//Bowen---Accordion
            $(function() {
                $( "#accordion" ).accordion({
                    autoHeight: false,
                    navigation: true
                });
            });
//End of Bowen---Accordion

//Bowen---Check
$(function() {
            		$( "#check" ).button();
		$( "#format" ).buttonset();
            });
//End of Check--bowen

//start of function for dynamic "HELP" effect(drop-show effect) for "set_activity_form" on page "set activity"
$(function() {

	//ACCORDION BUTTON ACTION
	$('div.left').click(function() {
		$('div.accordionContent').slideUp('normal');
		$(this).next().slideDown('normal');
	});

        $('div.left_update').click(function() {
		$('div.accordionContent').slideUp('normal');
		$(this).next().slideDown('normal');
	});


	//HIDE THE DIVS ON PAGE LOAD
	$("div.accordionContent").hide();

});
//end of function for dynamic "HELP" effect(drop-show effect) for "set_activity_form" on page "set activity"
              $(function() {

    
//Begin of the activity tracking
        $('.Educational,.Financial,.Spiritual,.Physical,.Career,.Social,.Family').hide();

          $('.goal_type').change(function() {
            var selectedGoal = $( ".goal_type" ).val();

            if (selectedGoal === "Family") {
              $('.Educational,.Financial,.Spiritual,.Physical,.Career,.Social').hide();
              $('.Family').effect('slide');
            }
            else if (selectedGoal === "Educational") {
              $('.Family,.Financial,.Spiritual,.Physical,.Career,.Social').hide();
              $('.Educational').effect('slide');
            }
            else if (selectedGoal === "Financial") {
              $('.Educational,.Family,.Spiritual,.Physical,.Career,.Social').hide();
              $('.Financial').effect('slide');
            }
            else if (selectedGoal === "Spiritual") {
              $('.Educational,.Family,.Financial,.Physical,.Career,.Social').hide();
              $('.Spiritual').effect('slide');
            }
            else if (selectedGoal === "Physical") {
              $('.Educational,.Family,.Spiritual,.Financial,.Career,.Social').hide();
              $('.Physical').effect('slide');
            }
            else if (selectedGoal === "Career") {
              $('.Educational,.Family,.Spiritual,.Physical,.Financial,.Social').hide();
              $('.Career').effect('slide');
            }
            else if (selectedGoal === "Social") {
              $('.Educational,.Family,.Spiritual,.Physical,.Career,.Financial').hide();
              $('.Social').effect('slide');
            }
          }); // ends $('#questions_set').change

      }); // ends (document).ready(function()


                  $(function() {
                $( ".accordion_Family, .accordion_Educational, .accordion_Financial, .accordion_Career, .accordion_Social, .accordion_Physical, .accordion_Spiritual" ).accordion({
                    autoHeight: false,
                    navigation: true
                });
            });
            //end of activity tracking

            //Begin of No of character countdown---Robin
function textCounter( field, countfield, maxlimit ) {
  if ( field.value.length > maxlimit )
  {
    field.value = field.value.substring( 0, maxlimit );
    alert( 'Your motto can only be 33 characters in length.' );
    return false;
  }
  else
  {
    countfield.value = maxlimit - field.value.length;
  }
}
//End of No of character countdown---Robin
	</script>



  
        





<script>
   // $(function submit_form()
//{
//document.set_activity_family.submit();
//})
    </script>

        <style>
	#format { margin-top: 2em; }
	</style>





    <!--start all table relevant plugin-->

        <script type="text/javascript" src="<?php echo base_url();?>js/jquery.tablesorter.js"></script>
            
        <!--CSS for table sorter -->
        <link rel="stylesheet" href="<?php echo base_url();?>CSS/table_sorter.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url();?>CSS/jquery.tablesorter.pager.biowee.css" type="text/css" />


           
        <!--end of all table-->
    </head>

    <body>
        <div id="wrapper">

            <div id="header">
                <div id="menu">
                    <ul>
                        <li class="current_page_item"><a href="<?php echo base_url();?>index.php/home/mission_statement"><img src="<?php echo base_url();?>CSS/images/background/mission.png"></a></li>
			<li><a href="<?php echo base_url();?>index.php/home/determineValue/"><img src="<?php echo base_url();?>CSS/images/background/values.png"></a></li>
                        <li><a href="<?php echo base_url();?>index.php/home/holistic/"><img src="<?php echo base_url();?>CSS/images/background/goals.png"></a></li>
                        <li><a href="<?php echo base_url();?>index.php/home/activity_page/"><img src="<?php echo base_url();?>CSS/images/background/activity.png"></a></li>
                        <li><a href="<?php echo base_url();?>index.php/home/resilience/"><img src="<?php echo base_url();?>CSS/images/background/resilience.png"></a></li>
                        <li><a href="<?php echo base_url();?>index.php/home/portfolio/"><img src="<?php echo base_url();?>CSS/images/background/coat_of_arm.png"></a></li>
                        <li><a href="<?php echo base_url();?>index.php/home/portfolio_mission"><img src="<?php echo base_url();?>CSS/images/background/portfolio.png"></a></li>                        
                        <!--<li><a href="http://sit.rp.edu.sg/91234/assignment2/images/StartingSnow.swf"><img>Game</a></li>-->
                    </ul>
                </div>
            </div>
            <!--end #header -->
            