<link href="<?php echo base_url();?>CSS/style_subpage_main.css" rel="stylesheet" type="text/css" media="screen" />
<div id="page">
        <div id="sub-nav">
        <ul>
            <li><a href="<?php echo base_url(); ?>index.php/home/mission_statement/" >Set Mission</a></li>
        </ul>
    </div>
    <div id="content_sub">
        <div class="post">
            <h2 class="title">Set the Mission Statement of your life</h2>
            <div class="entry">


        <!--<textarea id="ms" name="mission_statement" rows="5" cols="67"></textarea>-->
        <?php //echo form_open('db_control/input_mission_control');?>
        <?php echo form_open('db_control/validate_mission_input');?>
        <?php //echo form_input('mission', '','id="mission"','size=50'); ?>
        <?php
              $data = array('name'=> 'mission','id'=> 'mission','value'=> '','rows'=> '3','cols'=> '80',);
              echo form_textarea($data);
              echo form_error('mission');
              echo form_hidden('id_seeker', $this->session->userdata('seeker_id'));
     ?>
<br>
        <?php  //$attributes = array('id'=>'form_submit','class'=>'form_submit');
        echo "<div style='padding-left:600px;'>";
        echo form_submit('submit','Submit','id="form_submit"');
        echo "</div>"?>
        <?php echo form_close(); ?>

              

            </div><!-- End of div class entry -->
        </div><!-- End of div class post -->

    </div>
<!-- end #content -->

