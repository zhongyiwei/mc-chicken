<!--     
    Author     : Wang Qianhua
    Description: Used to display the "do you know" page for "Set Activities" function
-->

<?php if($this->session->userdata('type')=='negative'){ ?>
<link href="<?php echo base_url();?>CSS/style_subpage_main_neutral.css" rel="stylesheet" type="text/css" media="screen" />
<?php }else{?>
<link href="<?php echo base_url();?>CSS/style_subpage_main.css" rel="stylesheet" type="text/css" media="screen" />
<?php }?>
<!--[if IE]><link href="<?php echo base_url();?>CSS/styleForIE.css" rel="stylesheet" type="text/css" /><![endif]-->
        <!--[if IE]><link href="<?php echo base_url();?>CSS/styleForIEfooter.css" rel="stylesheet" type="text/css" /><![endif]-->

<div id="page">
         <div id="sub-nav">
        <ul>
            <li><a href="<?php echo base_url(); ?>index.php/home/activity/" >Set Activities</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/home/set_reminder/" >Set Reminders</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/home/activity_list/" >View Activities</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/home/activity_tracking/" >Track Activities</a></li>
        </ul>
         </div>
    <div id="content_sub">
        <div class="post">


         <div class="post">
            <h2 class="title" id="AC">Set activity for your goals</h2>
            <div class="entry">

            </div>

            <h2 class="title" id="AC2">Set activity on Oxygen life guidance portal:</h2>
            <div class="entry">

            </div>
                  
         </div>
        </div>

    </div>
    <!-- end #content -->

