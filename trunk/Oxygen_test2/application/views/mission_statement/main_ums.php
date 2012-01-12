<link href="<?php echo base_url();?>CSS/style_subpage_main.css" rel="stylesheet" type="text/css" media="screen" />
<!--[if IE]><link href="<?php echo base_url();?>CSS/styleForIE.css" rel="stylesheet" type="text/css" /><![endif]-->
  <!--[if IE]><link href="<?php echo base_url();?>CSS/styleForIEfooter.css" rel="stylesheet" type="text/css" /><![endif]-->
<div id="page">
        <div id="sub-nav">
        <ul>
            <li><a href="<?php echo base_url(); ?>index.php/home/mission_statement/" >Set Mission</a></li>
        </ul>
    </div>
    <div id="content_sub">
        <div class="post">
            <h2 class="title">Update your Mission Statement</h2>
            <div class="entry">        
        <?php
        echo form_open('db_control/validate_mission_update');
              $data = array('name'=> 'mission_update','id'=> 'mission','value'=> $mission_set,'rows'=> '3','cols'=> '65',);
              echo form_textarea($data);
              echo form_error('mission_update');

              echo form_hidden('id_seeker', $this->session->userdata('seeker_id'));
        ?>
<br>
        <?php
        echo "<div style='padding-left:460px;'>";
        echo form_submit('submit','Update','id="form_submit"');
        echo "</div>"?>
        <?php echo form_close(); ?>



            </div><!-- End of div class entry -->
        </div><!-- End of div class post -->

    </div>
<!-- end #content -->
