<script type="text/javascript">
<!--
    function validate_form ()
{
    valid = true;
    if ( document.update_activity.activity_name.value == "" )
    {
        alert ( "Please fill in the activity name." );
        valid = false;
    }
    if ( document.update_activity.activity_desc.value == "" )
    {
        alert ( "Please fill in the activity description." );
        valid = false;
    }
        if ( document.update_activity.start_date8.value == "" )
    {
        alert ( "Please fill in the activity start date." );
        valid = false;
    }
            if ( document.update_activity.end_date8.value == "" )
    {
        alert ( "Please fill in the activity end date." );
        valid = false;
    }

    return valid;
}


//-->
</script>

<link href="<?php echo base_url();?>CSS/style_subpage_main.css" rel="stylesheet" type="text/css" media="screen" />
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
            <h2 class="title">Set your activity for your goal here</h2>
            <div class="entry">
                <!--reminder preference selection begin-->

		<div>
                    <?php
                   // print_r($_GET);

                    $goal_id_seeker = $_GET['seeker_goal_id'];
                   // echo $id_activity;
             $query = $this->db->query('SELECT g.goal_cat_id FROM activity a, goal g, goal_category gc WHERE a.seeker_goal_id = g.seeker_goal_id AND a.seeker_goal_id='.$goal_id_seeker.' AND g.seeker_id ='.$this->session->userdata('seeker_id').'');
             if($query->num_rows() > 0){
             $row=$query->result();
            $goal_cat = $row[0]->goal_cat_id;}
            //$js = 'onsubmit="return validate_form();"';
                    $attributes = array('class' => 'form', 'id' => 'form', 'name' => 'update_activity','onsubmit'=>'return validate_form();');
                    
                    echo form_open('db_control/validate_activity_input',$attributes);
                     $this->load->view('set_activity/activity_form');
                    //echo form_hidden('goal_type_id', $goal_cat);
                 echo form_hidden('activity_status', 'New');
                 echo form_hidden('id_seeker', $this->session->userdata('seeker_id'));
                 
                 echo form_hidden('seeker_goal_id', $goal_id_seeker);
                    echo "<div align='right' width='190px'>";
                       echo form_submit('submit','Submit','id="form_submit"','align="center"');
                          echo "</div>";
                 echo form_close();
        ?>
		</div>



<div class="form_content">
</div>

            </div><!-- End of div class entry -->
        </div><!-- End of div class post -->

    </div>
<!-- end #content -->