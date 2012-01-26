
<?php
$goal_cat_query = $this->db->query('SELECT * FROM goal_category');

?>
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
          
           

            <div class="entry">
                 <p style="font-size:150%; color:black;" >Activity Tracking</p>
<!--Dropdown list to select goal category                -->
  <div id="popup">
                <p style="font-size:150%; color:black;" >Goal Type : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="goal_type" class="goal_type">
                        <option value="">-Select a goal type-</option>
                        <?php
                        foreach ($goal_cat_query->result() as $row) {
                        ?>
                        <option value="<?php echo $row->goal_category; ?>"><?php echo $row->goal_category; ?></option>
                        <?php
                        }
                        ?>

                    </select>
                </p>
<!--End dropdown list to select goal category                -->
                
                <?php
                    foreach ($goal_cat_query->result() as $row) {
                        $goal_cat = $row->goal_category;
                        
                        $goal_query = $this->db->query('SELECT goal_desc FROM goal g, goal_category gc
                                WHERE g.goal_cat_id = gc.goal_cat_id
                                AND g.seeker_id = '.$this->session->userdata('seeker_id').'
                                AND g.goal_completion_status <> "Completed"
                                AND gc.goal_category ="'.$goal_cat.'"');
                ?>

                <div class="<?php echo $goal_cat; ?>">
                <?php
                        if($goal_query->num_rows()===0) {
                                echo "<p style='font-family:arial;color:green;font-size:16px'>No Goal Set for this category</p>";
                        }
                        else {
                            $num_goal = $goal_query->num_rows();
                            for ($k=0; $k<$num_goal; $k++) {
                                echo "<h3 style='font-size:130%; '>Goal Description: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                                $row=$goal_query->result();
                                $goal_desc = $row[$k]->goal_desc;
                                echo $goal_desc;
                                echo "</h3>";

                                $activity_query = $this->db->query('SELECT * FROM activity a, goal g, goal_category gc
                                WHERE a.seeker_goal_id = g.seeker_goal_id
                                AND g.goal_cat_id = gc.goal_cat_id
                                AND gc.goal_category = "'.$goal_cat.'"
                                AND g.goal_completion_status <> "Completed"
                                AND g.goal_desc = "'.$goal_desc.'"
                                AND g.seeker_id = '.$this->session->userdata('seeker_id').'
                                ORDER BY a.activity_status DESC');
                                ?>




                                  <!--Start Activity-->
                    <div class="accordion_<?php echo $goal_cat; ?>">
                        <?php
                            if($activity_query->num_rows()===0) {
                                echo "<p style='font-family:arial;color:green;font-size:16px'>No activity set for this goal!</p>";
                            }
                            else {

                            $i = 1;
                            //checking if activity for this goal has been set
                            if($activity_query->num_rows()===0) {
                                echo "No activity has been set for " . $goal_cat . " goal!";
                            }
                            else {
                            foreach ($activity_query->result_array() as $row) {

                            $activity_id = $row['activity_id'];
                            $status = "status" . $i;
                            $i = $i + 1;
                            ?>

                            <h3>
                                <a href="#">
                                    <div class="row1">
                                        <span class="left1">
                                            <?php echo $row['activity_name'] ?>
                                        </span>
                                        <span class="right1" id="<?php echo $status; ?>">
                                            Status: <?php echo $row['activity_status'] ?>
                                        </span>
                                    </div>
                                </a>
                            </h3>
                            <div>
                                <table border="0">
                                    <tr valign="top">
                                        <td width="150px"><b>Description:</b></td>
                                        <td width="400px"><?php echo $row['activity_desc'] ?></td>
                                    </tr>
                                    <tr valign="top">
                                        <td width="150px"><b>Target Start Date:</b></td>
                                        <td width="400px"><?php echo $row['start_date'] ?></td>
                                    </tr>
                                    <tr valign="top">
                                        <td width="150px"><b>Target End Date:</b></td>
                                        <td width="400px"><?php echo $row['end_date'] ?></td>
                                    </tr>
                                            <tr>

                                                <td align="right" colspan="2">
                                                    <div class="fg-buttonset fg-buttonset-single">
                                                        <input type="button" value="New" class="fg-button ui-state-default ui-priority-primary ui-corner-left" ONCLICK="window.location.href='<?php echo base_url();?>index.php/home/activity_tracking/?activity_id=<?php echo $row['activity_id']; ?>&status=1'">
                                                        <input type="button" value="In Progress" class="fg-button ui-state-default ui-priority-primary" ONCLICK="window.location.href='<?php echo base_url();?>index.php/home/activity_tracking/?activity_id=<?php echo $row['activity_id']; ?>&status=2'">
                                                        <input type="button" value="Completed" class="fg-button ui-state-default ui-priority-primary ui-corner-right" ONCLICK="window.location.href='<?php echo base_url();?>index.php/home/activity_tracking/?activity_id=<?php echo $row['activity_id']; ?>&status=3'">
                                                    </div>
                                                </td>
                                            </tr>

                                        </table>

                                    </div>
                                    <?php
                                            } //loop for all activities
                                        } // else for if($activity_query->num_rows()===0)
                                    ?>

                            <?php
                                } // else for if($goal_query->num_rows()===0)

                            ?>



                    </div> <!--Activity_accordion-->
                    <!--End Activity-->







                    <br/><br/>


                                <?php
                                
                            }


                        }

           
                    ?>








                </div><!--End Activity for Each Goal Type-->

                <?php

                    } //end loop for all the goal types
                ?>
                
                



            </div> <!--Entry-->

</div>

        </div>
        <!--     end #content -->
    </div>
