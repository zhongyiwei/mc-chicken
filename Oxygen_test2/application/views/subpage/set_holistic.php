<!-- 
    Author     : CAI BOWEN
    Description: Used to generate the page that displays goal-setting portal
-->
<!--based on the color code to decide which css is going to use-->
<?php if($this->session->userdata('type')=='negative'){ ?>
<link href="<?php echo base_url();?>CSS/style_subpage_main_neutral.css" rel="stylesheet" type="text/css" media="screen" />
<?php }else{?>
<link href="<?php echo base_url();?>CSS/style_subpage_main.css" rel="stylesheet" type="text/css" media="screen" />
<?php }?>
<!--[if IE]><link href="<?php echo base_url();?>CSS/styleForIE.css" rel="stylesheet" type="text/css" /><![endif]-->
        <!--[if IE]><link href="<?php echo base_url();?>CSS/styleForIEfooter.css" rel="stylesheet" type="text/css" /><![endif]-->
<!--main content-->
<div id="page">
         <div id="sub-nav">
        <ul>
            <li><a href="<?php echo base_url(); ?>index.php/home/holistic/" >Set Goals</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/home/see_goal/" >View Goals</a></li>
        </ul>
         </div>
    <div id="content_sub">
        <div class="post">
            <h2 class="title">Please Set Your Goal</h2>
            <div class="entry">
                <p style="font-size:150%; color:black;" > Notice: Do submit one goal at a time before proceeding to the next: </p>
                <table cellpadding="5" cellspace="5" style="text-align: left;">
                    <div id="activity_accordion">
                        <h3><a href="#">Family</a></h3>
                        <div>
                            <?php 
                            $is_logged_in = $this->session->userdata('is_logged_in');
                            if (isset($is_logged_in) && ($is_logged_in == 'true')) {
                            echo form_open('set_goal/create_family_goal'); ?>
                            <p>Goal:</p>
                            <p><?php
                    $data = array(
                        'name' => 'family',
                        'id' => 'family',
                        'size' => '90'
                    );
                    echo form_input($data); ?></p>
 
                            <p>Achievement criteria: </p>
                            <p><?php
                            $data = array(
                                'name' => 'family_criteria',
                                'rows' => '5',
                                'clos' => '10',
                            );
                            echo form_textarea($data); ?></p>
                            
                            <p>Target Completion Date:</p>
                            <?php 
                            $data = array(
                                'name' => 'target_date1',
                                'class'=>'datepicker',
                                'id'=> 'start_date1',
                                'value'=> '',
                                'size'=> '30',
                                'onchange'=>'ValidateDate(this)'
                                );
                            
                            echo form_input($data); 
                            ?><br></br>

                           <div align="right"><?php echo form_submit('submit', 'Submit');?></div>
                            <?php echo form_close(); }else { ?>
                           <h3>You have not login yet. Please Log in first to set relevant activities. </h3>
            <?php } ?>
                        </div>

                        <h3><a href="#">Career</a></h3>
                        <div>
                            <?php 
                            if (isset($is_logged_in) && ($is_logged_in == 'true')) {
                            echo form_open('set_goal/create_career_goal'); ?>
                            <p>Goal:</p>
                            <p><?php
                            $data = array(
                                'name' => 'career',
                                'id' => 'career',
                                'size' => '90',
                            );
                            echo form_input($data); ?></p>

                            <p>Achievement criteria: </p>
                            <?php
                            $data = array(
                                'name' => 'career_criteria',
                                'rows' => '5',
                                'clos' => '10',
                            );
                            echo form_textarea($data); ?>
                            
                            <p>Target Completion Date:</p>
                            <?php 
                            $data = array(
                                'name' => 'target_date2',
                                'class'=>'datepicker',
                                'id'=> 'start_date2',
                                'value'=> '',
                                'size'=> '30',
                                'onchange'=>'ValidateDate(this)'
                                );
                            
                            echo form_input($data);
                            ?><br></br>
                            <div align="right"><?php echo form_submit('submit', 'Submit');?></div>
                            <?php echo form_close(); }else{ ?>
                             <h3>You have not login yet. Please Log in first to set relevant activities. </h3>
            <?php } ?>
                        </div>

                        <h3><a href="#">Education</a></h3>
                        <div>
                            <?php 
                            if (isset($is_logged_in) && ($is_logged_in == 'true')) {
                            echo form_open('set_goal/create_education_goal'); ?>
                            <p>Goal:</p>
                            <p><?php
                            $data = array(
                                'name' => 'education',
                                'id' => 'education',
                                'size' => '90',
                            );
                            echo form_input($data); ?></p>

                            <p>Achievement criteria: </p>
                            <?php
                            $data = array(
                                'name' => 'education_criteria',
                                'rows' => '5',
                                'clos' => '10',
                            );
                            echo form_textarea($data); ?>

                            <p>Target Completion Date:</p>
                            <?php 
                            $target_date=array(
                                'name' => 'target_date3',
                                'class'=>'datepicker',
                                'id'=> 'start_date3',
                                'value'=> '',
                                'size'=> '30',
                                'onchange'=>'ValidateDate(this)'
                            );
                            echo form_input($target_date); 
                            ?><br></br>
                            
                            <div align="right"><?php echo form_submit('submit', 'Submit');?></div>
                            <?php echo form_close(); }else{ ?>
                            <h3>You have not login yet. Please Log in first to set relevant activities. </h3>
            <?php } ?>
                        </div>

                        <h3><a href="#">Spiritual </a></h3>
                        <div>
                            <?php 
                            if (isset($is_logged_in) && ($is_logged_in == 'true')) {
                            echo form_open('set_goal/create_spiritual_goal'); ?>
                            <p>Goal:</p>
                            <p><?php
                            $data = array(
                                'name' => 'spiritual',
                                'id' => 'spiritual',
                                'size' => '90',
                            );
                            echo form_input($data); ?></p>

                            <p>Achievement criteria: </p>
                            <?php
                            $data = array(
                                'name' => 'spiritual_criteria',
                                'rows' => '5',
                                'clos' => '10',
                            );
                            echo form_textarea($data); ?>

                            <p>Target Completion Date:</p>
                            <?php 
                            $target_date=array(
                                'name' => 'target_date4',
                                'class'=>'datepicker',
                                'id'=> 'start_date4',
                                'value'=> '',
                                'size'=> '30',
                                'onchange'=>'ValidateDate(this)'
                            );
                            echo form_input($target_date); 
                            ?><br></br>
                            
                            <div align="right"><?php echo form_submit('submit', 'Submit');?></div>
                            <?php echo form_close(); }else{?>
                            <h3>You have not login yet. Please Log in first to set relevant activities. </h3>
            <?php } ?>
                        </div>

                        <h3><a href="#">Financial </a></h3>
                        <div>
                            <?php 
                            if (isset($is_logged_in) && ($is_logged_in == 'true')) {
                            echo form_open('set_goal/create_financial_goal'); ?>
                            <p>Goal:</p>
                            <p><?php
                            $data = array(
                                'name' => 'financial',
                                'id' => 'financial',
                                'size' => '90',
                            );
                            echo form_input($data); ?></p>

                            <p>Achievement criteria: </p>
                            <?php
                            $data = array(
                                'name' => 'financial_criteria',
                                'rows' => '5',
                                'clos' => '10',
                            );
                            echo form_textarea($data); ?>

                            <p>Target Completion Date:</p>
                            <?php 
                            $target_date=array(
                                'name' => 'target_date5',
                                'class'=>'datepicker',
                                'id'=> 'start_date5',
                                'value'=> '',
                                'size'=> '30',
                                'onchange'=>'ValidateDate(this)'
                            );
                            echo form_input($target_date); 
                            ?><br></br>
                            
                            <div align="right"><?php echo form_submit('submit', 'Submit');?></div>
                            <?php echo form_close(); }else{?>
                            <h3>You have not login yet. Please Log in first to set relevant activities. </h3>
            <?php } ?>
                        </div>

                        <h3><a href="#">Social</a></h3>
                        <div>
                            <?php 
                            if (isset($is_logged_in) && ($is_logged_in == 'true')) {
                            echo form_open('set_goal/create_social_goal'); ?>
                            <p>Goal:</p>
                            <p><?php
                            $data = array(
                                'name' => 'social',
                                'id' => 'social',
                                'size' => '90',
                            );
                            echo form_input($data); ?></p>

                            <p>Achievement criteria: </p>
                            <?php
                            $data = array(
                                'name' => 'social_criteria',
                                'rows' => '5',
                                'clos' => '10',
                            );
                            echo form_textarea($data); ?>

                            <p>Target Completion Date:</p>
                            <?php 
                            $target_date=array(
                                'name' => 'target_date6',
                                'class'=>'datepicker',
                                'id'=> 'start_date6',
                                'value'=> '',
                                'size'=> '30',
                                'onchange'=>'ValidateDate(this)'
                            );
                            echo form_input($target_date); 
                            ?><br></br>
                            
                            <div align="right"><?php echo form_submit('submit', 'Submit');?></div>
                            <?php echo form_close(); }else{?>
                            <h3>You have not login yet. Please Log in first to set relevant activities. </h3>
            <?php } ?>
                        </div>

                        <h3><a href="#">Physical</a></h3>
                        <div>
                            <?php 
                            if (isset($is_logged_in) && ($is_logged_in == 'true')) {
                            echo form_open('set_goal/create_physical_goal'); ?>
                            <p>Goal:</p>
                            <p><?php
                            $data = array(
                                'name' => 'physical',
                                'id' => 'physical',
                                'size' => '90',
                            );
                            echo form_input($data); ?></p>

                            <p>Achievement criteria: </p>
                            <?php
                            $data = array(
                                'name' => 'physical_criteria',
                                'rows' => '5',
                                'clos' => '10',
                            );
                            echo form_textarea($data); ?>

                            <p>Target Completion Date:</p>
                            <?php 
                            $target_date=array(
                                'name' => 'target_date7',
                                'class'=>'datepicker',
                                'id'=> 'start_date7',
                                'value'=> '',
                                'size'=> '30',
                                'onchange'=>'ValidateDate(this)'
                            );
                            echo form_input($target_date); 
                            ?><br></br>
                            
                            <div align="right"><?php echo form_submit('submit', 'Submit');?></div>
                            <?php echo form_close(); }else{?>
                            <h3>You have not login yet. Please Log in first to set relevant activities. </h3>
            <?php } ?>
                        </div>
                    </div>
                </table>
            </div>
        </div>
    </div>
    <!-- end #content -->
