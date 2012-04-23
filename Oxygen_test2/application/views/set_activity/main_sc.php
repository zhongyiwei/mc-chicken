<!--     
    Author     : Wang Qianhua
    Description: Used to generate the page and the function for users to select goals users want to set activities for
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
            <h2 class="title">Set Activities For Your Goals Here</h2>
            <div class="entry">
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
             if($query->num_rows() > 0){?>
             <table id="myTable" style="table-layout:fixed; width: 500px" class="tablesorter">
                    <thead>
                    <tr>
                        <th width="90px">Goal Name</th>
                        <th width="100px">Achievement Criteria</th>
                        <th width="60px">Goal Set Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query2 = $this->db->query('SELECT * FROM goal WHERE goal_cat_id = '.$i.' AND goal_completion_status = "Active" AND seeker_id ='.$this->session->userdata('seeker_id').'');                        
                            foreach ($query2->result_array() as $row){                  
                    ?>
                            <tr>
                                <td><a href="<?php echo base_url();?>index.php/home/input_activity/?seeker_goal_id=<?php echo $row['seeker_goal_id'];?>"><?php echo substr($row['goal_desc'],0,70); ?></a></td>
                                <td><?php echo substr($row['achievement_criteria'],0,70); ?></td>
                                <td><?php echo $row['goal_set_date']; ?></td>
                            </tr>
                    <?php
                    //$goal_id= array('seeker_goal_id'=>$row->seeker_goal_id);
                    //$this->session->set_userdata($goal_id);
                        }

                    ?>
                            </tbody>
                </table>

                 <?php
                 //$js = 'onchange="ValidateDate(this)"';
        }            else{
                ?>
                                 <h3>You have not set any goal of this type yet. Please set the goal before setting its activities. </h3>
                                 <?php
            }
        }       
        else{        
        ?>
          <h3>You have not login yet. Please Log in first to use this function. </h3>
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


