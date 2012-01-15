<?php $this->load->view('register/register_header'); ?>

<div id="register">
    <h1 style="padding-top: 20px;">&otimes;Error&otimes;</h1>

    <p style="padding-left: 20px; color: black; font-size: 16px;">The email you entered has been registered, Please use an other email address.Please wait for a while, system will link to register page.</p>
</div>

<div id="home">
    <a href="<?php echo base_url();?>index.php/home/index/"><img src="<?php echo base_url();?>CSS/images/background/home_button.png"/></a>
</div>

<?php $this->load->view('register/register_footer'); ?>