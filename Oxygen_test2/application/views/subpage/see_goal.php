<!--based on the color code to decide which css is going to use-->
<?php if($this->session->userdata('type')=='negative'){ ?>
<link href="<?php echo base_url();?>CSS/style_subpage_main_neutral.css" rel="stylesheet" type="text/css" media="screen" />
<?php }else{?>
<link href="<?php echo base_url();?>CSS/style_subpage_main.css" rel="stylesheet" type="text/css" media="screen" />
<?php }?>
<!--[if IE]><link href="<?php echo base_url();?>CSS/styleForIE.css" rel="stylesheet" type="text/css" /><![endif]-->
     <!--[if IE]><link href="<?php echo base_url();?>CSS/styleForIEfooter.css" rel="stylesheet" type="text/css" /><![endif]-->

<!--main content-->
<div id="page">
    <div id="sub-nav">
        <ul>
           <li><a href="<?php echo base_url(); ?>index.php/home/holistic/" >Set Goals</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/home/see_goal/" >View Goals</a></li>
        </ul>
   </div>
    <div id="content_sub">
        <div class="post">
            <h2 class="title">See your goals</h2>
            <div class="entry">
                <div id="popup">
                <p style="font-family:arial;color:green;font-size:16px">Please click the Goal name to update it</p>
                <table id="myTable" style="table-layout:fixed; width: 600px" class="tablesorter">
                    <thead>
                    <tr>
                        <th width="55px">Type Of Goal</th>
                        <th width="90px">Goal Description</th>
                        <th width="100px">Achievement Criteria</th>
                        <th width="60px">Goal Set Date</th>
                        <th width="60px">Progress</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
                    //$query="SELECT * FROM goal WHERE seeker_id= ?";
                    
                    //$record = $this->db->query($query,array($this->session->userdata('seeker_id')));
                    $seeker_id=$this->session->userdata('seeker_id');
                    $this->db->select('*');
                    $this->db->from('goal');
                    $this->db->where('seeker_id',$seeker_id);
                    $this->db->join('goal_category','goal_category.goal_cat_id=goal.goal_cat_id');

                    $record=$this->db->get();
                    if ($record) {
                        foreach ($record->result()as $row){
                  
                    ?>
                            <tr>
                                <td><?php echo $row->goal_category; ?></td>
                                <td><a href="<?php echo base_url();?>index.php/set_goal/update/<?php echo $row->seeker_goal_id;?>/"><?php echo substr($row->goal_desc,0,70); ?></a></td>
                                <td><?php echo substr($row->achievement_criteria,0,70); ?></td>
                                <td><?php echo $row->goal_set_date; ?></td>
                                <td><?php echo $row->goal_completion_status; ?></td>
                            </tr>
                    <?php
                        }
                    } else {
                        $record = null;
                    }
                    ?>
                            </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end #sub-content -->
