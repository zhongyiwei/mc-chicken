<!--     
    Author     : Wang Qianhua
    Description: Used to display the list which contain all the uncompleted activities
-->
<?php
$id=$this->session->userdata('seeker_id');
    $all_activity_query = $this->db->query('SELECT * FROM activity a, goal g, goal_category gc
        WHERE a.seeker_goal_id = g.seeker_goal_id
        AND g.goal_cat_id = gc.goal_cat_id
        AND a.activity_status != "Completed"
        AND g.seeker_id = '.$id.'');

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
          
            
            <!--<div class="entry" width="">  <div id="popup"> -->
                    <h2 class="title" id="AC">View all your active activities below</h2>
                    <div class="entry" width="100%">
                    
                    <p style="font-family:arial;color:green;font-size:16px">To view and update activity details, please click the activity name</p>
                
                <table id="myTable" style="table-layout:fixed; width: 600px" class="tablesorter">
                   <thead>
                    <tr>
                      <th width="60px" style="font-size:130%">Goal Type</th>
                      <th width="100px" style="font-size:130%">Goal Description</th>
                      <th width="90px" style="font-size:130%">Activity Name</th>
                      <th width="60px" style="font-size:130%">Start Date</th>
                      <th width="60px" style="font-size:130%">End Date</th>
                      <th width="60px"style="font-size:130%">Status</th>
                    </tr>
                  </thead>

                  <tbody>
                       <?php
                      
                    foreach ($all_activity_query->result_array() as $row)
                    {
                  ?>
                        <tr>
                          <td><?php echo $row['goal_category']; ?></td>
                           <td><?php echo substr($row['goal_desc'],0,20); ?></td>
                          <td><a href="<?php echo base_url();?>index.php/home/update_activity/?activity_id=<?php echo $row['activity_id']; ?>"><?php echo substr($row['activity_name'],0,20); ?></a></td>
                          <td><?php echo $row['start_date']; ?></td>
                          <td><?php echo $row['end_date']; ?></td>
                          <td><?php echo $row['activity_status']; ?></td>
                        </tr>

                  <?php
                    }
                  ?>

                  </tbody>
               </table>
                    <br/>
                    <br/>
                    </div>
                    <h2 class="title" id="AC">View all your completed activities</h2>
                    <div class="entry" width="">
                    <p style="font-family:arial;color:green;font-size:16px">To view all the completed activities, please click the "Archived Activities"</p>    
                    <a href="<?php echo base_url(); ?>index.php/home/archived_activity/"><p style="font-size:150%; color:blue; text-align:right" >Archived Activities</p></a>
                    </div>
        </div><!-- End of div class entry -->
        </div><!-- End of div class post -->
        

<!-- end #content -->