<link href="<?php echo base_url();?>CSS/style_subpage_coa.css" rel="stylesheet" type="text/css" media="screen" /
<div id="page">
    <div id="content_sub">
        <div class="post">
            <h2 class="title">The 1st Step: Set the Mission Statement of your life</h2>
            <div class="entry">
               

        <h3>Write down your Motto here: </h3>
        <?php echo form_open('db_control/validate_motto_input');?>
        <?php //echo form_input('mission', '','id="mission"','size=50'); ?>
        <?php
        $count = 'onkeypress="textCounter()"';
              $data = array('name'=> 'motto_input','id'=> 'motto','value'=> '','rows'=> '3','cols'=> '65','onkeypress'=>"textCounter(this,this.form.counter,33);");
              echo form_textarea($data,$count);
              echo form_error('motto_input');
              $display_count= 'onblur="textCounter()"' ;
              ?><br>You have<?php
              $data = array(
              'name' => 'counter','value'=> '33','maxlength'=> '3','size'=> '3','onblur'=>'textCounter(this.form.counter,this,33);');
                 echo form_input($data,$display_count);
              ?>characters left<?php
              echo form_hidden('id_seeker', $this->session->userdata('seeker_id'));
     ?>
<br>
        <?php  //$attributes = array('id'=>'form_submit','class'=>'form_submit');
        echo "<div style='padding-left:460px;'>";
        echo form_submit('submit','Submit','id="form_submit"');
        echo "</div>"?>
        <?php echo form_close(); ?>



            </div><!-- End of div class entry -->
        </div><!-- End of div class post -->

    </div>
<!-- end #content -->

