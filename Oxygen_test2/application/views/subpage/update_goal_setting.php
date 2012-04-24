<!-- 
    Author     : CAI BOWEN
    Description: to update the goal information  
-->
<?php $this->load->view('includes/header_general'); ?>

<?php $this->load->view('includes/banner_general'); ?>

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
            <li><a href="<?php echo base_url(); ?>index.php/home/holistic/" >Set Goals</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/home/see_goal/" >View Goals</a></li>
        </ul>
    </div>
    <div id="content_sub">
        <?php if($Progress=='Completed'){ ?>
        <div class="post">
            <h2 class="title">View Your Completed Goal</h2>
            <div class="entry">
                <div class="row">
                    <div><h4>Type of Goal:</h4></div>
                    <div style="color: black;margin-top: 5px;margin-bottom: 5px;font-size: 16px;font-weight: bold;"><?php echo $goal;?></div>
                    <div class="clear"></div>
                </div>
                
                <div class="row">
                    <div><h4>Goal Description:</h4></div>
                    <div style="color: black;margin-top: 5px;margin-bottom: 5px;font-size: 16px;font-weight: bold;">
                    <?php echo $goal_des; ?><br>
                    </div>
                </div>
                
                <div class="row">
                    <div><h4>Achievement Criteria:</h4></div>
                    <div style="color: black;margin-top: 5px;margin-bottom: 5px;font-size: 12px;font-weight: bold;">
                    <?php echo $achievement;?><br></div>
                    <div class="clear"></div>
                </div>
                
                <div class="row">
                    <div><h4>Target End Date:</h4></div>
                    <div style="color: black;margin-top: 5px;margin-bottom: 5px;font-size: 16px;font-weight: bold;">
                    <?php echo $target_end_date;?><br></div>
                    <div class="clear"></div>
                </div>
                
                <div class="row">
                    <div><h4>Progress:</h4></div>
                    <div style="color: black;margin-top: 5px;margin-bottom: 5px;font-size: 16px;font-weight: bold;">Completed<br></div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
<?php            
        }else{
?>
        <div class="post">

            <h2 class="title">Update Your Goal</h2>
            <div class="entry">
                    <?php echo form_open('update_goal/update'); ?>
                    <?php echo form_hidden('goal_id', $id); ?>
                    <?php echo form_hidden('goal_cat_id', $goal_cat_id); ?>
                <div class="row">
                    <div><h4>Type of Goal:</h4></div>
                    <div style="color: black;margin-top: 5px;margin-bottom: 5px;font-size: 16px;font-weight: bold;"><strong><?php echo $goal;?></strong></div>
                    <div class="clear"></div>
                </div>  
                
                <div class="row">
                    <div><h4>Goal Description:</h4></div>
                    <div class="">
     <?php
      $data = array(
              'name'=> 'goal_des','id'=> 'goal_des','value'=> $goal_des,'rows'=> '5','cols'=> '79',
            );
                 echo form_textarea($data);
     ?><br></div>
                    <div class="clear"></div>
                </div>  
                
                <div class="row">
                    <div><h4>Achievement Criteria:</h4></div>
                    <div class="">
     <?php
      $data = array(
              'name'=> 'achievement','id'=> 'achievement','value'=> $achievement,'rows'=> '5','cols'=> '79',
            );
                 echo form_textarea($data);
     ?><br></div>
                    <div class="clear"></div>
                </div>
                
                <div class="row">
                    <div><h4>Target End Date:</h4></div>
                    <div class="">
     <?php
      $data = array(
              'name'=> 'target_end_date',
              'class'=> 'datepicker',
              'id'=> 'start_date8',
              'value'=> $target_end_date,
              'size'=> '30',
              'onchange'=>'ValidateDate(this)'
            );
                 echo form_input($data);
     ?><br></div>
                    <div class="clear"></div>
                </div>
                
                <div class="row">
                    <div><h4>Progress:</h4></div>
                    <div class="">
     <?php
                    $choice = array(
                        'Active' => 'Active',
                        'Completed' => 'Completed'
                    );
                    if ($Progress == 'Active') {
                        echo form_dropdown('process', $choice, 'Active');
                    } else if ($Progress == 'Completed') {
                        echo $Progress;
                    }
                    ?><br></div>
                    <div class="clear"></div>
                </div>
               
               <?php echo "<div align='right' width='200px'>";
                       echo form_submit('submit','Update','id="form_submit"','align="center"');
                          echo "</div>";?>
                <?php echo form_close(); ?>
            </div>
        </div>
        <?php } ?>
    </div>
    <div style="clear: both;">&nbsp;</div>
</div>
<!-- end #page -->
<br><br>
<div id="home">
    <a href="<?php echo base_url();?>index.php/home/index/"><img src="<?php echo base_url();?>CSS/images/background/home_button.png"/></a>
</div>
<div id="dialog" title="Your Flow Chart">
</div>
<div id="footer" align="center">
    <div id="image_footer"><img id="opener" onclick="loadFlow()" src="<?php echo base_url();?>CSS/images/background/what_is_now.png" alt="" /></img></div>
    <div id="image_footer"><a href="<?php echo base_url();?>index.php/home/goal/"><img src="<?php echo base_url();?>CSS/images/background/do_u_know.png" alt="" /></a></div>
<?php $this->load->view('includes/footer_general'); ?>
