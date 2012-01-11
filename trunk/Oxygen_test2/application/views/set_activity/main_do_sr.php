<link href="<?php echo base_url();?>CSS/style_subpage_main.css" rel="stylesheet" type="text/css" media="screen" />
  <!--[if IE]><link href="<?php echo base_url();?>CSS/styleForIE.css" rel="stylesheet" type="text/css" /><![endif]-->
      
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

            <h2 class="title">My Reminder Setting</h2>
            <div class="entry">
            <h3>My reminder preference Setting is</h3>
            <ul>
            <?php
            $this->load->model('link_db_model');
            $data = $this->link_db_model->get_reminder();
            if($data->num_rows() > 0) {
                $r=$data->result();
                $mode_email=$r[0]->reminder_email;
                $mode_sms=$r[0]->reminder_sms;
                $frequency=$r[0]->reminder_frequency;
                        if($mode_email==1){?>
		<li><p style="font-size:150%">
                    Email
                </p></li>
		<?php  }
                if($mode_sms==1){ ?>
                    <li><p style="font-size:150%">
                    SMS
                </p></li>
               <?php } ?>
                </ul>
            <h3>My reminder frequency </h3>
            <ul>
            <li><p style="font-size:150%">
                    <?php echo $frequency; ?>
                </p></li>
                </ul>
            <?php } else{?>
                <p style="font-size:150%">
                    You have never set any reminder preference yet
                </p>
           <?php }  ?>


            

            </div><!-- End of div class entry -->

<h5 align="right">Update and Change your Reminder Setting <a href="<?php echo base_url();?>index.php/home/reminder_update/">HERE</a></h5>
    </div></div>
<!-- end #content -->

