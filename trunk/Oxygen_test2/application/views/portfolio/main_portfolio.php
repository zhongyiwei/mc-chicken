<?php if ($this->session->userdata('type') == 'negative') { ?>
    <link href="<?php echo base_url(); ?>CSS/style_subpage_main_neutral.css" rel="stylesheet" type="text/css" media="screen" />
<?php } else { ?>
    <link href="<?php echo base_url(); ?>CSS/style_subpage_main.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url(); ?>CSS/popUp.css" rel="stylesheet" type="text/css" media="screen" />
<?php } ?>

<!--[if IE]><link href="<?php echo base_url(); ?>CSS/styleForIE.css" rel="stylesheet" type="text/css" /><![endif]-->
<!--[if IE]><link href="<?php echo base_url(); ?>CSS/styleForIEfooter.css" rel="stylesheet" type="text/css" /><![endif]-->
<script type="text/javascript" src="<?php echo base_url(); ?>js/popUp.js"></script>

<div id = "bodycolor"></div>
<div id="popupContent" >
    <div onclick="disablePopup()" style="cursor:pointer; margin-left:670px;font-size:24px;border-width: 3px;border-color:#999;border-style: solid;text-align: center;padding-bottom: 2px;width:25px;">x</div>
    <p class="askforsendemail">According to the research by the Dominican University of California, those who commit their goals by sharing them with his friends are more likely to achieve their goals. Do you want to send your achievement to the friends you refer to when you register?</p>
    <a href="<?php echo base_url(); ?>index.php/home/email_pdf" class="yesButton">Yes</a>
    <a class="noButton" href="<?php echo base_url(); ?>index.php/home/portfolio_export_pdf?id=<?php echo $this->session->userdata('seeker_id') ?>">No</a>
    <p id="ContentArea"> </p>
</div>


<div id="page">
    <div id="sub-nav">
        <ul>
<!--            <li><a href="<?php echo base_url(); ?>index.php/home/portfolio_export_pdf?id=<?php echo $this->session->userdata('seeker_id') ?>" onclick="loadPopup()">Generate report</a></li>-->
            <li><a href="#" onclick="loadPopup()">Generate report</a></li>
        </ul>
    </div>

    <div id="content_sub">
        <div class="post">


            <div class="post">
                <!--<h2 class="title" id="MOTTO">My Motto</h2>
                <div class="entry">
                
            <p style="font-family:arial;color:black;font-size:14px"><?php //echo $motto_set;      ?></p>
                </div>-->

                <h2 class="title" id="MS">My Mission Statement</h2>
                <div class="entry">

                    <p ><?php echo $mission_set; ?></p>
                </div>


                <h2 class="title" id="VALUE">My Value</h2>
                <div class="entry">
                    <table border="1" style="font-size:16px;">
                        <th width="120px" align="center" style="border-bottom-width: thin;
                            border-bottom-style: dotted;
                            border-bottom-color: #837669;padding:5px;border-right-width: thin;
                            border-right-style: dotted;
                            border-right-color: #837669;">Value 1</th>
                        <th width="120px" align="center"style="border-bottom-width: thin;
                            border-bottom-style: dotted;
                            border-bottom-color: #837669;padding:5px;border-right-width: thin;
                            border-right-style: dotted;
                            border-right-color: #837669;">Value 2</th>
                        <th width="120px" align="center"style="border-bottom-width: thin;
                            border-bottom-style: dotted;
                            border-bottom-color: #837669;padding:5px;border-right-width: thin;
                            border-right-style: dotted;
                            border-right-color: #837669;">Value 3</th>
                        <th width="120px" align="center"style="border-bottom-width: thin;
                            border-bottom-style: dotted;
                            border-bottom-color: #837669;padding:5px;">Value 4</th>
                        <tbody><tr>                           
                                <td width="120px" align="center" style="padding:5px;border-right-width: thin;
                                    border-right-style: dotted;
                                    border-right-color: #837669;"><?php echo $value1; ?></td>
                                <td width="120px" align="center" style="padding:5px;border-right-width: thin;
                                    border-right-style: dotted;
                                    border-right-color: #837669;"><?php echo $value2; ?></td>
                                <td width="120px" align="center" style="padding:5px;border-right-width: thin;
                                    border-right-style: dotted;
                                    border-right-color: #837669;"><?php echo $value3; ?></td>
                                <td width="120px" align="center" style="padding:5px;"><?php echo $value4; ?></td>
                            </tr></tbody>
                    </table>
                    <br><br><br><br>
                </div>

                <h2 class="title" id="ACHIEVEMENT">My Achievement</h2>
                <div class="entry">
                    <?php
                    //echo "here".$rows;
                    if ($rows == null) {
                        echo "<p>No goal has been accomplished at this moment</p>";
                    } else {
                        ?>
                        <table border="1">
                            <th>Description</th>
                            <th width="500px">My achievements</th>
                            <tbody>
                                <?php foreach ($rows as $r) : ?>                   
                                    <tr><td><b>Goal Type:</b></td><td><b><p style="font-family:arial;color:black;font-size:14px;text-align:center;"><?php echo $r->goal_category; ?></p></b></td></tr>
                                    <tr><td><b>Goal Description:</b></td><td><p style="font-family:arial;color:black;font-size:14px; text-align:center;"><?php echo $r->goal_desc; ?></p></td></tr>
                                    <tr><td><b>Achievement Criteria:</b></td><td><p style="font-family:arial;color:black;font-size:14px;text-align:center;"><?php echo $r->achievement_criteria; ?></p></td></tr>
                                    <tr><td><b>Goal Completion Date:</b></td><td><p style="font-family:arial;color:black;font-size:14px;text-align:center;"><?php echo $r->actual_end_date; ?></p></td></tr>
                                    <?php
                                    $seeker_goal_id = $r->seeker_goal_id;
                                    $activity_query = $this->db->query('SELECT * FROM activity WHERE activity_status="Completed" AND seeker_goal_id = ' . $seeker_goal_id . '');
                                    ?>
                                    <?php foreach ($activity_query->result_array() as $row) : ?>
                                        <tr><td><b>Completed Activity:</b></td><td><p style="font-family:arial;color:black;font-size:14px;text-align:center;"><?php echo $row['activity_name']; ?></p></td></tr>
                                    <?php endforeach; ?>
                                    <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                                    <?php
                                endforeach;
                            }
                            ?>
                        </tbody></table>
                </div>
                <br>


                <h2 class="title" id="RESILIENCE">My Resilience Scale</h2>
                <div class="entry">
                    <?php $this->load->view('portfolio/resilience_section'); ?>
                </div>
                <br/>
                <!--<h2 class="title" id="VALUE">Your Values</h2>-->
                <!--                <h2 class="title" id="">Export Your Record as PDF</h2>
                                <br/>
                                <a class="entry" href="<?php echo base_url(); ?>index.php/home/portfolio_export_pdf">Click here to download your Record</a>
                -->
            </div>
        </div>

    </div>
    <!-- end #content -->
