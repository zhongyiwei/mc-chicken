<?php $this->load->view('register/register_header'); ?>

<div id="register">
    <h1>Password Reset</h1>

<?php

    echo $msg;

?>
</div>

<div id="home">
    <a href="<?php echo base_url();?>index.php/home/index/"><img src="<?php echo base_url();?>CSS/images/background/home_button.png"/></a>
</div>

<?php $this->load->view('register/register_footer'); ?>