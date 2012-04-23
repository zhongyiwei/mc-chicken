<!--
    Author     : Ariansah
    Description: Used to display the status of posting to facebook wall for value
-->
<?php 
$this->load->view('register/register_header'); 
$error = $_GET['status'];
?>
<div id="register">
    <h1 style="padding-top: 20px;">
	<?php if ($error == "2") {
			echo "Success";
		  }
		  
		  else {
			echo "&otimes;Error&otimes;";
		  }
		 
	?>
	
	</h1>
	<?php 
		
		if ($error == "1") {
			$msg = "You have already shared your current Values on your Facebook Wall.";
		}
		else if($error == "2") {
			$msg = "You have successfully shared your Values on your Facebook Wall.";
		}
                else if($error == "4") {
			$msg = "Please set your life values before posting it on Facebook";
                        
		}
		else {
			$msg = $error;
		}
	?>
    <p style="padding-left: 20px;font-family:arial;color:green;font-size:16px"><?php echo $msg; ?></p>
	<p style="padding-left: 20px;font-family:arial;color:green;font-size:16px">
	<a href="<?php echo base_url();?>index.php/home/portfolio_mission/">Return to Portfolio</a>
	</p>
    
</div>




<div id="home">
    <a href="<?php echo base_url();?>index.php/home/index/"><img src="<?php echo base_url();?>CSS/images/background/home_button.png"/></a>
</div>

<?php $this->load->view('register/register_footer'); ?>
