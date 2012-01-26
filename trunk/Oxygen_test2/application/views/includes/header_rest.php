<link href="<?php echo base_url(); ?>CSS/dropdown_sidebar.css" rel="stylesheet" type="text/css" media="screen" />
<link type="text/css" href="<?php echo base_url(); ?>CSS/themename/ui-lightness/jquery-ui-1.8.12.custom.css" rel="Stylesheet" />
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui-1.8.12.custom.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.dropdown.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/script.sidebar_dropdown.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/script.js"></script>

<!--start of css and js for TRANSLATION-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>CSS/translation.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>js/google_ajax_translation.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.translation.js"></script>

<!--Start change the scrolldown bar format,but it does not suit for IE-->
<![if !IE]><script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.lionbars.0.3.min.js"></script><![endif]>
<![if !IE]><link href="<?php echo base_url(); ?>CSS/lionbars.css" rel="stylesheet" type="text/css" media="screen" /><![endif]>
<!--End change the scrolldown bar format,but it does not suit for IE-->


<!--end of css and js for gallery slider in mission_slider page-->


<!-- Start of Reference: http://www.jankoatwarpspeed.com/post/2008/06/09/Building-a-better-web-forms-Context-highlighting-using-jQuery.aspx -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>CSS/radio.css" media="screen"/>
<script type="text/javascript" src="<?php echo base_url(); ?>js/radio.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>CSS/highlight.css" media="screen"/>
<!-- End of Reference: http://www.jankoatwarpspeed.com/post/2008/06/09/Building-a-better-web-forms-Context-highlighting-using-jQuery.aspx -->


<!--Start of the style for Sortable textarea for specific tasks under page "set activity"   -->
<style>
    #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
    #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
    #sortable li span { position: absolute; margin-left: -1.3em; }
</style>
<!--End of the style for Sortable textarea for specific tasks under page "set activity"   -->

<!--load sliding login file-->
        <!-- stylesheets -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>js/home_page/css/slide.css" type="text/css" media="screen" />
        <!--[if IE]><link href="<?php echo base_url();?>CSS/styleForIE.css" rel="stylesheet" type="text/css" /><![endif]-->
  
        <!-- PNG FIX for IE6 -->
        <!-- http://24ways.org/2007/supersleight-transparent-png-in-ie6 -->
        <!--[if lte IE 6]>
                <script type="text/javascript" src="<?php echo base_url(); ?>js/home_page/js/pngfix/supersleight-min.js"></script>
        <![endif]-->
<!-- Sliding effect -->
        <script src="<?php echo base_url(); ?>js/home_page/js/slide.js" type="text/javascript"></script>

        <!--end of css and js for gallery slider in mission_slider page-->
<!--Begin of TRANSLATION--Robin   -->
<script type="text/javascript">

    //Cufon('h1')('h2')('h3')('h4')('h5')('h6')('.intro')('dt');

    $(function() {
        // DEMO -------------------------------------------
        //document.write("<p>" + Date() + "</p>");
        
        $('p').Translator( { trigger:'dblclick' } );
        $('p').TranslatorBubble( {  ctrlKey:true, shiftKey:true } );
        $('dd').TranslatorBubble();

        // EXAMPLE 1 ----------------------------------------
        $('#example1 .example').TranslatorReset();
        $('#example1 .example').Translator({
            source:'en',
            trigger:'dblclick',
            destination:{
                fr:'Fran?ais',
                it:'Italiano',
                es:'Espa?ol',
                de:'Deutsch',
                ja:'日本語',
                ar:'Arabic',
                hr:'hrvatski',
                id:'Indonesia',
                ko:'Korean',
                lt:'Lietuvi懦',
                lv:'latvie拧u',
                nl:'Nederlands',
                no:'norsk',
                pl:'Polski',
                pt:'Portugu锚s',
                ro:'Rom芒n膬',
                ru:'Russian',
                sk:'sloven膷ina',
                sl:'sloven拧膷ina',
                sv:'Svenska',
                tl:'Filipino',
                CN:'简体中文'
            }
        });

        // EXAMPLE 2 ----------------------------------------
        $('#example2 .example').TranslatorReset();
        $('#example2 .example').TranslatorBubble({
            source:'en',
            destination:'fr'
        });

        // EXAMPLE 3 ----------------------------------------
        $('#example3 .example').TranslatorReset();
        $('#example3 .example input[type=button]').click(function(evt) {
            $.Translator(
            $('#example3 input[type=text]').val(),
            { destination:'fr', menuLeft:evt.pageX, menuTop:evt.pageY},
            function(response) {
                $('#example3 input[type=text]').val(response.translation);
            }
        );
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

<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.tablesorter.js"></script>

<!--CSS for table sorter -->
<link rel="stylesheet" href="<?php echo base_url(); ?>CSS/table_sorter.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>CSS/jquery.tablesorter.pager.biowee.css" type="text/css" />



<!--end of all table-->
</head>

<body onload="$('#content_sub').lionbars()">
    <div id="wrapper">
<!-- Panel -->
        <div id="toppanel" style="font-family: Arial">
            <div id="panel">
                <div class="content clearfix">
                    <div class="left" id="info">
                        <h1>Welcome to Oxygen</h1>
                        <h2></h2>		
                        <p class="grey">We will guide you to lead a meaningful and successful life with happiness and resilience. </> 
                        <p class="grey">You will be setting personal statement, guiding values, goals for your life.  </p>
                        <p class="grey">You will be building resilience skills through playing games. </p>
                        <p class="grey">You will get personalized Coat of Arms to represent yourself.</p>
                        
                    </div>
                    <div class="left" id="userinfo">
                        <?php
                        $is_logged_in = $this->session->userdata('is_logged_in');
                        $name = $this->session->userdata('name');
                        if (isset($is_logged_in) && $is_logged_in == 'true') {
                            ?>
                            <h1>Welcome back,<?php echo $name; ?>!</h1>
                            <table>
                                <tr>
                                    <td><strong><u>Email:</u></strong></td>
                                    <td><?php echo $this->session->userdata('email'); ?></td>
                                </tr>
                                <tr>
                                    <td><strong><u>Gender:</u></strong></td>
                                    <td><?php echo $this->session->userdata('gender');?></td>
                                </tr>
                                <tr>
                                    <td><strong><u>Birthday:</u></strong></td>
                                    <td><?php echo $this->session->userdata('dob'); ?></td>
                                </tr>
                                <tr>
                                    <td><strong><u>Nationality:</u></strong></td>
                                    <td><?php echo $this->session->userdata('nation'); ?></td>
                                </tr>
                                <tr>
                                    <td><strong><u>Mobile:</u></strong></td>
                                    <td><?php echo $this->session->userdata('mobile'); ?></td>
                                </tr>
                            </table>
                            <p class="grey"><a href="<?php echo base_url(); ?>index.php/login/log_out/">Log out!</a></p>
                            <p class="grey"><a href="<?php echo base_url(); ?>index.php/home/personal_info/">Update Your Information!</a></p>
                            <p class="grey"><a href="<?php echo base_url(); ?>index.php/home/change_password/">Change Your Password!</a></p>
                            <?php
                        } else {
                            ?>
                            <!-- Login Form -->
                            <form class="clearfix" action="<?php echo base_url() ?>index.php/login/validate/" method="post">
                                <h1>Member Login</h1>
                                <label class="grey" for="log">Email:</label>
                                <input class="field" type="text" name="email" id="log" value="" size="23" />
                                <label class="grey" for="pwd">Password:</label>
                                <input class="field" type="password" name="password" id="pwd" size="23" />
                                <label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> &nbsp;Remember me</label>
                                <div class="clear"></div>
                                <input type="submit" name="submit" value="Login" class="bt_login" />
                                <a class="lost-pwd" href="<?php echo base_url();?>index.php/update_info/forgot_password/">Lost your password?</a>
                            </form>
                            <?php echo form_open('login/register'); ?>
                            <input type="submit" name="submit" value="Register" class="bt_register" />
                            <?php echo form_close(); ?>
                            <!-- Login Form End-->
                        <?php } ?>
                    </div>
                </div>
            </div> <!-- /login -->	

            <!-- The tab on top -->	
            <div class="tab">
                <ul class="login">
                    <li class="left">&nbsp;</li>
                    <?php if (isset($is_logged_in) && $is_logged_in == 'true') {
                        ?>
                        <li>Hello <?php echo $name; ?>!</li>
                    <?php } else { ?>
                        <li>Hello Guest!</li>
                    <?php } ?>
                    <li class="sep">|</li>
                    <li id="toggle">
                        <?php if (isset($is_logged_in) && $is_logged_in == 'true') { ?>
                            <a id="open" class="open" href="#">View Your Profile</a>
                        <?php } else { ?>
                            <a id="open" class="open" href="#">Log In | Register</a>
                        <?php } ?>
                        <a id="close" style="display: none;" class="close" href="#">Close Panel</a>			
                    </li>
                    <li class="right">&nbsp;</li>
                </ul> 
            </div> <!-- / top -->

        </div> <!--panel -->
                    
        <div id="header">
            <div id="menu">
                <ul>
                    <li class="current_page_item"><a href="<?php echo base_url(); ?>index.php/home/mission_statement/"><img src="<?php echo base_url(); ?>CSS/images/background/mission.png"></a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/home/determineValue/"><img src="<?php echo base_url(); ?>CSS/images/background/values.png"></a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/home/holistic/"><img src="<?php echo base_url(); ?>CSS/images/background/goals.png"></a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/home/activity_page/"><img src="<?php echo base_url(); ?>CSS/images/background/activity.png"></a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/home/resilience/"><img src="<?php echo base_url(); ?>CSS/images/background/resilience.png"></a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/home/portfolio/"><img src="<?php echo base_url(); ?>CSS/images/background/coat_of_arm.png"></a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/home/portfolio_mission/"><img src="<?php echo base_url(); ?>CSS/images/background/portfolio.png"></a></li>
                    <!--<li><a href="http://sit.rp.edu.sg/91234/assignment2/images/StartingSnow.swf"><img>Game</a></li>-->
                </ul>
            </div>
        </div>


        <!--end #header -->

        <!--        <div id="flashBackground">
                    <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="690" height="550" id="Starting Snow" align="middle">
                        <param name="movie" value="../../flash/BackgroundPainting.swf" wmode="Transparent"/>
                        <param name="quality" value="high" />
                        <param name="bgcolor" value="#ffffff" />
                        <param name="play" value="true" />
                        <param name="loop" value="true" />
                        <param name="wmode" value="gpu" />
                        <param name="scale" value="showall" />
                        <param name="menu" value="true" />
                        <param name="devicefont" value="false" />
                        <param name="salign" value="" />
                        <param name="allowScriptAccess" value="sameDomain" />
                        [if !IE]>
                        <object type="application/x-shockwave-flash" data="../../flash/BackgroundPainting.swf" width="690" height="550">
                            <param name="movie" value="../../flash/BackgroundPainting.swf" />
                            <param name="quality" value="high" />
                            <param name="bgcolor" value="#ffffff" />
                            <param name="play" value="true" />
                            <param name="loop" value="true" />
                            <param name="wmode" value="gpu" />
                            <param name="scale" value="showall" />
                            <param name="menu" value="true" />
                            <param name="devicefont" value="false" />
                            <param name="salign" value="" />
                            <param name="allowScriptAccess" value="sameDomain" />
                            <param name="wmode" value="Transparent" />
                            <![endif]
                            <a href="http://www.adobe.com/go/getflash">
                                <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash Player" />
                            </a>
                            [if !IE]>
                        </object>
                        <![endif]
                    </object>
                </div>-->
<!--<div id="flashBackground">
        <OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
                codebase="http://download.macromedia.com/pub/shockwave/cabs/flash 
                /swflash.cab#version=5,0,0,0" 
                WIDTH=690 HEIGHT=550>
            <PARAM NAME=movie VALUE="../../flash/BackgroundPainting.swf">
            <PARAM NAME=quality VALUE=high> 
            <PARAM NAME=wmode VALUE=transparent> 
            <PARAM NAME=bgcolor VALUE=#FFFFFF>  
            <EMBED src="../../flash/BackgroundPainting.swf" quality=high wmode=transparent bgcolor=#FFFFFF WIDTH=690 HEIGHT=550 TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version 
                   =ShockwaveFlash"></EMBED> 
        </OBJECT>
        </div>-->