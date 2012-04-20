<?php $this->load->view('register/register_header'); ?>
<div id="register">
    <h1 style="padding-top: 20px;">&otimes;Error&otimes;</h1>
<<<<<<< .mine

    <p style="padding-left: 20px;font-family:arial;color:green;font-size:16px">You have not login, please <a href="<?php echo base_url(); ?>index.php/login/index/">login</a> first!</p>
    <p style="padding-left: 20px;font-family:arial;color:green;font-size:12px">This function is only displayed to the Members. If you are not a member yet, please <a href="<?php echo base_url(); ?>index.php/login/register">Sign up</a> first!</p>
=======
    <div id="p_font">
        <h2 style="color: grey;">You have not login, please <a href="<?php echo base_url(); ?>index.php/login/index/">login</a> first!</h2>
        <h2 style="color: grey;">My Portfolio is only displayed to the Members. If you are not a member yet, please <a href="<?php echo base_url(); ?>index.php/login/register">Sign up</a> first!</h2>
    </div>
    
>>>>>>> .r314
</div>




<div id="home" >
    <a href="<?php echo base_url(); ?>index.php/home/index/"><img src="<?php echo base_url(); ?>CSS/images/background/home_button.png"/></a>
</div>

<?php $this->load->view('register/register_footer'); ?>
