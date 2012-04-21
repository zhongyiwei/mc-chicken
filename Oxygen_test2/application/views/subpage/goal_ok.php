<!--load header-->
<?php $this->load->view('register/register_header'); ?>
<!--main content-->
<div id="register">
    <h1>Successful!</h1>
    <div styel="margin-left:50px; margin-top:50px;color:black;">
        <p>The goal you have typed has been inserted successfully!</p>
        <p>The system is directing you to detail your goal details.</p>
        <p>Please wait for a while...</p>
    </div>
</div>


<div id="home">
    <a href="<?php echo base_url();?>index.php/home/index/"><img src="<?php echo base_url();?>CSS/images/background/home_button.png"/></a>
</div>

<!--footer-->
<?php $this->load->view('register/register_footer'); ?>