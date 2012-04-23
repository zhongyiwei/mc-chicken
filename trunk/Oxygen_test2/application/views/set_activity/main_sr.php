<!--     
    Author     : Wang Qianhua
    Description: Used to generate the page and the function for users to set reminder for activities
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
            <h2 class="title">Set the Reminder Preference for your activity</h2>
            <div class="entry">
               
        <!--reminder preference selection begin-->
   <!--css & JS for radio reminder setting -->
<link href="<?php echo base_url(); ?>CSS/reminder_radio.css" rel="stylesheet" type="text/css" media="screen" />
        <script type="text/javascript" src="<?php echo base_url(); ?>js/radio_reminder.js"></script>
 
<script language="javascript" type="text/javascript">
$(function(){ 
    $(".cb-enable").click(function(){
        var parent = $(this).parents('.switch');
        $('.cb-disable',parent).removeClass('selected');
        $(this).addClass('selected');
        $('.checkbox',parent).attr('checked', true);
    });
    $(".cb-disable").click(function(){
        var parent = $(this).parents('.switch');
        $('.cb-enable',parent).removeClass('selected');
        $(this).addClass('selected');
        $('.checkbox',parent).attr('checked', false);
    });
});
    
$(function() {
                $( "#radio_frequency" ).buttonset();
	});
        

</script>


	<style>
	#format { margin-top: 2em; }
	</style>
        
                             
        <div class="left"><h4>Do you want to receive reminders?</h4></div>
<br><br><br><br>
 <?php
     $attributes = array('class' => 'form', 'id' => 'form', 'name' => 'set_reminder_form');
     echo form_open('db_control/input_reminder_control',$attributes);
     echo form_hidden('id_seeker', $this->session->userdata('seeker_id'));
 ?>
<p class="field switch">
    <input type="radio" id="radio1" name="email_reminder" value="1" checked />
    <input type="radio" id="radio2" name="email_reminder" value="0" />
    <label for="radio1" class="cb-enable selected"><span>Enable</span></label>
    <label for="radio2" class="cb-disable"><span>Disable</span></label>
</p>
<br><br><br><br><br><br>
<div class="left"><h4>How frequently you want the reminder to be sent to you? </h4></div>
         <br><br><br><br>   
<?php $data = array('name' => 'radio_frequency','id'=> 'daily_reminder','value'=> 'Daily','checked'=> TRUE);
        echo form_radio($data);?><label for="daily_reminder">Daily</label>
        <?php $data = array('name' => 'radio_frequency','id'=> 'weekly_reminder','value'=> 'Weekly');
        echo form_radio($data);?><label for="weekly_reminder">Weekly</label>
        <?php $data = array('name' => 'radio_frequency','id'=> 'monthly_reminder','value'=> 'Monthly');
        echo form_radio($data);?><label for="monthly_reminder">Monthly</label>
        <?php $data = array('name' => 'radio_frequency','id'=> 'None_reminder','value'=> 'None');
        echo form_radio($data);?><label for="None_reminder">None</label>

   <br>
<?php 
echo "<div style='padding-left:495px;'>";
        echo form_submit('submit','Submit','id="form_submit"');
   echo "</div>";
       echo form_close(); ?>

<div class="form_content">
</div>

            </div><!-- End of div class entry -->
        </div><!-- End of div class post -->

    </div>
<!-- end #content -->