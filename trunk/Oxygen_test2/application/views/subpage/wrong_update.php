<!-- 
    Author     : CAI BOWEN
    Description: error page when update the goal information
-->
<?php $this->load->view('register/register_header'); ?>
<div id="register">
    <h1>&otimes;Error&otimes;</h1>
<div id="p_font">
    <h2 style="color: grey;">You did not set your goal correctly, please <a href="<?php echo base_url();?>index.php/home/holistic/">try again</a>!</h2>
</div>
    </div>

<div id="home">
    <a href="<?php echo base_url();?>index.php/home/index/"><img src="<?php echo base_url();?>CSS/images/background/home_button.png"/></a>
</div>

<?php $this->load->view('register/register_footer'); ?>
