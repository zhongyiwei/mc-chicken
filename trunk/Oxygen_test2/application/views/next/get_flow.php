<?php $logged=$_POST['logged'];

if($logged=='yes'){
$session_id=$this->session->userdata('seeker_id');

$checkMission = $this->db->query("SELECT * FROM mission WHERE seeker_id='$session_id'");
$checkValue = $this->db->query("SELECT * FROM seeker_value WHERE seeker_id='$session_id'");
$checkGoal = $this->db->query("SELECT * FROM goal WHERE seeker_id='$session_id'");
$checkActivityStatus=false;
foreach ($checkGoal->result() as $row)
{
  $seeker_goal_id=$row->seeker_goal_id;
  $checkActivity = $this->db->query("SELECT * FROM activity WHERE seeker_goal_id='$seeker_goal_id'");
	if($checkActivity->num_rows()>0){
	$checkActivityStatus=true;
	break;
	}
}
$checkResilience = $this->db->query("SELECT * FROM test_result WHERE seeker_id='$session_id'");
$checkCOA = $this->db->query("SELECT * FROM coat_of_arm WHERE seeker_id='$session_id'");



?>

<a href="<?php echo base_url();?>index.php/home/portfolio_coa_motto/#MS">
<?php if($checkMission->num_rows() >0){//Has mission statement set ?>
<img width="100px" height="100px" src="<?php echo base_url();?>web_images/flowchart/Mission-Green.png"></img></a>
<?php } else{ ?>
<img width="100px" height="100px" src="<?php echo base_url();?>web_images/flowchart/Mission-Blue (PNG).png"></img></a>
<?php } ?>
<img width="50px" height="50px" src="<?php echo base_url();?>web_images/flowchart/arrow.png"></img>
<?php if($checkValue->num_rows() >0){ ?>
<a href="<?php echo base_url();?>index.php/home/determineValue/"><img width="100px" height="100px" src="<?php echo base_url();?>web_images/flowchart/Value-Green(PNG).png"></a>
<?php } 
else if($checkMission->num_rows() >0){ ?>
<a href="<?php echo base_url();?>index.php/home/determineValue/"><img width="100px" height="100px" src="<?php echo base_url();?>web_images/flowchart/Value-Blue (PNG).png"></a> <?php
} else { ?>
<a href="<?php echo base_url();?>index.php/home/determineValue/"><img width="100px" height="100px" src="<?php echo base_url();?>web_images/flowchart/Value-Red(PNG).png"></a>
<?php } ?>

<img width="50px" height="50px" src="<?php echo base_url();?>web_images/flowchart/arrow.png"></img>


<?php if($checkGoal->num_rows() >0){ ?>
<a href="<?php echo base_url();?>index.php/home/goal/"><img width="100px" height="100px" src="<?php echo base_url();?>web_images/flowchart/Goals-Green(PNG).png"></a>
<?php } 
else if($checkValue->num_rows() >0){ ?>
<a href="<?php echo base_url();?>index.php/home/goal/"><img width="100px" height="100px" src="<?php echo base_url();?>web_images/flowchart/Goals-Blue(PNG).png"></a> <?php
} else { ?>
<a href="<?php echo base_url();?>index.php/home/goal/"><img width="100px" height="100px" src="<?php echo base_url();?>web_images/flowchart/Goals-Red(PNG).png"></a>
<?php } ?>



<img width="50px" height="50px" src="<?php echo base_url();?>web_images/flowchart/arrow.png"></img>

<?php if($checkActivityStatus==true){//means there is activity for this user ?>
<a href="<?php echo base_url();?>index.php/home/activity_page/"><img width="100px" height="100px" src="<?php echo base_url();?>web_images/flowchart/Activity-Green(PNG).png"></a>
<?php } 
else if($checkGoal->num_rows() >0){ ?>
<a href="<?php echo base_url();?>index.php/home/activity_page/"><img width="100px" height="100px" src="<?php echo base_url();?>web_images/flowchart/Activity-Blue(PNG).png"></a> <?php
} else { ?>
<a href="<?php echo base_url();?>index.php/home/activity_page/"><img width="100px" height="100px" src="<?php echo base_url();?>web_images/flowchart/Activity-Red(PNG).png"></a>
<?php } ?>


<img width="50px" height="50px" src="<?php echo base_url();?>web_images/flowchart/arrow.png"></img>



<?php if($checkResilience->num_rows()>0){?>
<a href="<?php echo base_url();?>index.php/home/resilience/"><img width="100px" height="100px" src="<?php echo base_url();?>web_images/flowchart/Resilience-Green(PNG).png"></a>
<?php } 
else if($checkActivityStatus==true){ ?>
<a href="<?php echo base_url();?>index.php/home/resilience/"><img width="100px" height="100px" src="<?php echo base_url();?>web_images/flowchart/Resilience-Blue(PNG).png"></a> <?php
} else { ?>
<a href="<?php echo base_url();?>index.php/home/resilience/"><img width="100px" height="100px" src="<?php echo base_url();?>web_images/flowchart/Resilience-Red(PNG).png"></a>
<?php } ?>


<img width="50px" height="50px" src="<?php echo base_url();?>web_images/flowchart/arrow.png"></img>

<?php if($checkCOA->num_rows()>0){?>
<a href="<?php echo base_url();?>index.php/home/portfolio_coa_motto/#MS"><img width="100px" height="100px" src="<?php echo base_url();?>web_images/flowchart/Coat of Arms-Green(PNG).png"></a>
<?php } 
else if($checkResilience->num_rows()>0){ ?>
<a href="<?php echo base_url();?>index.php/home/portfolio_coa_motto/#MS"><img width="100px" height="100px" src="<?php echo base_url();?>web_images/flowchart/Coat of Arms-Blue(PNG).png"></a> <?php
} else { ?>
<a href="<?php echo base_url();?>index.php/home/portfolio_coa_motto/#MS"><img width="100px" height="100px" src="<?php echo base_url();?>web_images/flowchart/Coat of Arms-Red(PNG).png"></a>
<?php } ?>


		<!--		<img width="80px" height="80px" src="<?php echo base_url();?>web_images/flowchart/Mission - Red (PNG).png"></img></a>		
<img width="60px" height="60px" src="<?php echo base_url();?>web_images/flowchart/arrow.png"></img>
<a href="<?php echo base_url();?>index.php/home/determineValue/"><img width="80px" height="80px" src="<?php echo base_url();?>web_images/flowchart/Value-Red(PNG).png"></a>
<img width="60px" height="60px" src="<?php echo base_url();?>web_images/flowchart/arrow.png"></img>
<a href="<?php echo base_url();?>index.php/home/goal/"><img width="80px" height="80px"  src="<?php echo base_url();?>web_images/flowchart/Goals-Red(PNG).png"></a>
<img width="60px" height="60px" src="<?php echo base_url();?>web_images/flowchart/arrow.png"></img>
<a href="<?php echo base_url();?>index.php/home/activity_page/"><img width="80px" height="80px"  src="<?php echo base_url();?>web_images/flowchart/Activity-Red(PNG).png"></a>
<img width="60px" height="60px" src="<?php echo base_url();?>web_images/flowchart/arrow.png"></img>
<a href="<?php echo base_url();?>index.php/home/resilience/"><img width="80px" height="80px"  src="<?php echo base_url();?>web_images/flowchart/Resilience-Red(PNG).png"></a>
<img width="60px" height="60px" src="<?php echo base_url();?>web_images/flowchart/arrow.png"></img>
                        <a href="<?php echo base_url();?>index.php/home/portfolio_coa_motto/#MS"><img width="80px" height="80px" src="<?php echo base_url();?>web_images/flowchart/Coat of Arms-Red(PNG).png"></a>
						<img width="60px" height="60px" src="<?php echo base_url();?>web_images/flowchart/arrow.png"></img>
                        <a href="<?php echo base_url();?>index.php/home/portfolio_coa_motto/#MS"><img width=width="80px" height="80px"  src="<?php echo base_url();?>web_images/flowchart/Portfolio-Red(PNG).png"></a> -->
<?php }
else{
echo "<p>You are not logged in!</p>";
}
?>