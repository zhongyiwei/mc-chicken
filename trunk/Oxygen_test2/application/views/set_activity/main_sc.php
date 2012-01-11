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
            <h2 class="title">Set the Activity for Your Goals Here</h2>
            <div class="entry">
                <p style="font-size:150%; color:white;" > Notice: Do submit one goal at a time before proceeding to the next: </p>
<div class="goal_for_activity">
<div id="activity_accordion">
        <?php
        $activity_type=array('Family','Career','Educational','Spiritual','Financial','Social','Physical');
        for($i=1; $i<=7; $i++){
?>
	<h3><a href="#section1"><?php echo $activity_type[$i-1]?></a></h3>
	<div>

	     <?php
            $is_logged_in = $this->session->userdata('is_logged_in');
        if (isset($is_logged_in) && ($is_logged_in == 'true')) {
             $query = $this->db->query('SELECT seeker_goal_id FROM goal WHERE goal_cat_id = '.$i.' AND goal_completion_status = "Active" AND seeker_id ='.$this->session->userdata('seeker_id').'');
             if($query->num_rows() > 0){
             $row=$query->result();
            $seeker_id_goal = $row[0]->seeker_goal_id;

                            
            //echo $seeker_id_goal;
             $attributes = array('class' => 'form', 'id' => 'form', 'name' => 'set_activity_family');
                 echo form_open('db_control/validate_activity_input',$attributes);
                 echo form_hidden('seeker_goal_id',$seeker_id_goal);
                echo form_hidden('goal_type_id', $i);
                 echo form_hidden('activity_status', 'New');
                 echo form_hidden('id_seeker', $this->session->userdata('seeker_id'));
                 

                 //$this->load->view('set_activity/activity_form');
                 ?>


                     <div class="row">
        <h4>Activity Name: </h4>

        <div class="right">
                 <?php
                 $data = array(
              'name' => 'activity_name','id'=> 'activity_name','value'=> '','maxlength'=> '100','size'=> '88',);
                 echo form_input($data);
                 echo form_error('activity_name');
                 ?></div>

        <div class="clear"></div>
        </div>

        <!--start_date selection begin-->
        <div class="row">
         <h4>Description:</h4>
        <div class="">

     <?php
      $data = array(
              'name'=> 'activity_desc','id'=> 'activity_desc','value'=> '','rows'=> '5','cols'=> '88',
            );
                 echo form_textarea($data);
                 echo form_error('activity_desc');
     ?><br></div>
        </div>

        <div class="row">
             <h4>Start Date:

             <?php
             //$js = 'onchange="ValidateDate(this)"';
                 $data = array('name' => 'start_date','class'=> 'start_date','value'=> '','id'=> 'start_date'.$i.'','size'=> '35',  'onchange'=>'ValidateDate(this)');
                 echo form_input($data);
                 echo form_error('start_date');
                 ?>
             </h4></div>

        <div class="row">
            <h4>End Date:&nbsp&nbsp
             <?php
             //$js = 'onchange="ValidateDate(this)"';
                 $data = array('name' => 'end_date','class'=> 'end_date','id'=> 'end_date'.$i.'','value'=> '','size'=> '35','onchange'=>'ValidateDate(this)');
                 echo form_input($data);
                 echo form_error('end_date');
                 ?>
             </h4></div>


                 <?php
                 //$js = 'onchange="ValidateDate(this)"';
                 echo "<div align='right'>";
                 echo form_submit('submit','Submit','id="form_submit"');
                 echo "</div>";
                 echo form_close();
        }            else{
                ?>
                                 <h3>You do not have any goal of this type yet. Please set the its goal before you setting any of its activity </h3>
                                 <?php
            }
        }       
        else{        
        ?>
          <h3>You have not login yet. Please Log in first to set relevant activities. </h3>
            <?php
        }
             ?>
    </div>
        <?php
        }
        ?>
        
	</div>


</div><!-- End demo -->
            </div><!-- End of div class entry -->
        </div><!-- End of div class post -->

    </div>
<!-- end #content -->


