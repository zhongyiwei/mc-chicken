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

        <!--load main css-->
        <link href="<?php echo base_url(); ?>CSS/style.css" rel="stylesheet" type="text/css" media="screen" />

        <!--load sliding login file-->
        <!-- stylesheets -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>js/home_page/css/slide.css" type="text/css" media="screen" />
        <!--[if IE]><link href="<?php echo base_url(); ?>CSS/styleForIE.css" rel="stylesheet" type="text/css" /><![endif]-->

        <!-- PNG FIX for IE6 -->
        <!-- http://24ways.org/2007/supersleight-transparent-png-in-ie6 -->
        <!--[if lte IE 6]>
                <script type="text/javascript" src="<?php echo base_url(); ?>js/home_page/js/pngfix/supersleight-min.js"></script>
        <![endif]-->

        <!-- jQuery - the core -->
        <script src="<?php echo base_url(); ?>js/home_page/js/jquery-1.3.2.min.js" type="text/javascript"></script>
        <!-- Sliding effect -->
        <script src="<?php echo base_url(); ?>js/home_page/js/slide.js" type="text/javascript"></script>





        <link type="text/css" href="<?php echo base_url(); ?>CSS/themename/ui-lightness/jquery-ui-1.8.12.custom.css" rel="Stylesheet" />

        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.5.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui-1.8.12.custom.min.js"></script>

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
    </head>

    <body>
        <div id="wrapper">
            <!-- Panel -->
            <div id="toppanel adjusttoppanel" style="font-family: Arial">
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
                                        <td><?php echo $this->session->userdata('gender'); ?></td>
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
                                    <a class="lost-pwd" href="<?php echo base_url(); ?>index.php/update_info/forgot_password/">Lost your password?</a>
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
                        <li class="current_page_item"><a href="<?php echo base_url(); ?>index.php/home/mission_statement"><img src="<?php echo base_url(); ?>CSS/images/background/mission.png"></a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/home/determineValue/"><img src="<?php echo base_url(); ?>CSS/images/background/values.png"></a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/home/holistic/"><img src="<?php echo base_url(); ?>CSS/images/background/goals.png"></a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/home/activity_page/"><img src="<?php echo base_url(); ?>CSS/images/background/activity.png"></a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/home/resilience/"><img src="<?php echo base_url(); ?>CSS/images/background/resilience.png"></a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/home/portfolio/"><img src="<?php echo base_url(); ?>CSS/images/background/coat_of_arm.png"></a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/home/portfolio_mission"><img src="<?php echo base_url(); ?>CSS/images/background/portfolio.png"></a></li>                        
                        <!--<li><a href="http://sit.rp.edu.sg/91234/assignment2/images/StartingSnow.swf"><img>Game</a></li>-->
                    </ul>
                </div>
            </div>
            <!--end #header -->

            <br/>
            <br/> 
            <br/> 
<!--            <div style="background:rgba(255,255,255,0.5); position:absolute;width:450px; height:70px;margin-top: 480px;"></div>-->
            <div id="fb-root" ></div>
            <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=270684012976952";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
            
                <div class="fb-like" data-href="https://www.facebook.com/pages/Oxygen-Life-Guidance/339319049426031" data-send="false" data-width="450" data-show-faces="false"></div>
                <br/>
                <a href="https://twitter.com/share" class="twitter-share-button" data-via="twitterapi" data-lang="en">Tweet</a>

            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

            <!-- end #page -->
            <div id="dialog" title="Your Flow Chart">
            </div>
            <div id="footer" align="center">
                <div id="image_footer"><img id="opener" onclick="loadFlow()" src="<?php echo base_url(); ?>CSS/images/background/what_is_now.png" alt="" /></img></div>
                <div id="image_footer"><a href="#"><img src="<?php echo base_url(); ?>CSS/images/background/do_u_know.png" alt="" /></a></div>
                <div id="sitemap" >
                    <ul>
                        <li><a href="<?php echo base_url(); ?>index.php/home/">User Guide</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/home/goal/">About Us</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/home/activity_page/">Terms of Use</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/home/portfolio_coa_motto/#MS">Contact Us</a></li>
                    </ul>
                </div>
                <div id="copy">
                    <p>Copyright (c) 2011 SIT-Sem1-2011-1074 All rights reserved.</p>
                </div>
            </div>
            <!-- end #footer -->
        </div>
    </body>
</html>              
