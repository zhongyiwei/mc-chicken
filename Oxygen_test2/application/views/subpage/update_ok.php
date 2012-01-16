<?php $this->load->view('register/register_header'); ?>
<div id="register">
    <h1>Update Successful</h1>
    <div styel="margin-left:50px; margin-top:50px;color:black;">
        <p>The system is directing you to <strong>Goal Setting Page</strong>!</p>
        <p>Please wait for a while...</p>
    </div>
</div>

<div id="home">
    <a href="<?php echo base_url();?>index.php/home/index/"><img src="<?php echo base_url();?>CSS/images/background/home_button.png"/></a>
</div>

<?php $this->load->view('includes/footer_general'); ?>