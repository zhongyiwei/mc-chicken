<?php
$id=$this->session->userdata('seeker_id');
    $all_activity_query = $this->db->query('SELECT * FROM activity a, goal g, goal_category gc
        WHERE a.seeker_goal_id = g.seeker_goal_id
        AND g.goal_cat_id = gc.goal_cat_id
        AND a.activity_status != "Completed"
        AND g.seeker_id = '.$id.'');

?>
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
          
            <h2 class="title">View all your records below</h2>
            <div class="entry" width="">  <div id="popup">
                <p style="font-family:arial;color:green;font-size:16px">Please click the activity name to update your activity:</p>
                
                <table id="myTable" style="table-layout:fixed; width: 600px" class="tablesorter">
                   <thead>
                    <tr>
                      <th width="55px">Goal Type</th>
                      <th width="90px">Activity Name</th>
                      <th width="100px">Activity Description</th>
                      <th width="60px">Start Date</th>
                      <th width="60px">End Date</th>
                      <th width="60px">Status</th>
                    </tr>
                  </thead>

                  <tbody>
                       <?php
                    foreach ($all_activity_query->result_array() as $row)
                    {
                  ?>
                        <tr>
                          <td><?php echo $row['goal_category']; ?></td>
                          <td><a href="<?php echo base_url();?>index.php/home/update_activity/?activity_id=<?php echo $row['activity_id']; ?>"><?php echo $row['activity_name']; ?></a></td>
                          <td><?php echo $row['activity_desc']; ?></td>
                          <td><?php echo $row['start_date']; ?></td>
                          <td><?php echo $row['end_date']; ?></td>
                          <td><?php echo $row['activity_status']; ?></td>
                        </tr>

                  <?php
                    }
                  ?>

                  </tbody>
               </table>

            </div><!-- End of div class entry -->
        </div><!-- End of div class post -->
        </div>
    </div>
<!-- end #content -->