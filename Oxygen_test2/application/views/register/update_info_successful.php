<?php $this->load->view('register/register_header'); ?>

<div id="register">
    <h1 style="padding-top: 20px;">Successful</h1>
    <p style="padding-left: 20px; color: black; font-size: 16px;">Your request has been updated successfully!</p>
    <p style="padding-left: 20px; color: black; font-size: 16px;">System is directing you to the Home Page, please wait for a while!</p>
</div>


<div id="home">
    <a href="<?php echo base_url();?>index.php/home/index/"><img src="<?php echo base_url();?>CSS/images/background/home_button.png"/></a>
</div>

<?php $this->load->view('register/register_footer'); ?>