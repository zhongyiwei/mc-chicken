<!-- The codes below are used to generate the page that displays the error message if users tried to access to a function that only members who logged in are able to access -->

<?php $this->load->view('register/register_header'); ?>
<div id="register">
    <h1 style="padding-top: 20px;">&otimes;Error&otimes;</h1>

    <div id="p_font">
        <h2 style="color: grey;">You have not login, please <a href="<?php echo base_url(); ?>index.php/login/index/">login</a> first!</h2>
        <h2 style="color: grey;">My Portfolio is only displayed to the Members. If you are not a member yet, please <a href="<?php echo base_url(); ?>index.php/login/register">Sign up</a> first!</h2>
    </div>
    

</div>

<div id="home" >
    <a href="<?php echo base_url(); ?>index.php/home/index/"><img src="<?php echo base_url(); ?>CSS/images/background/home_button.png"/></a>
</div>

<?php $this->load->view('register/register_footer'); ?>
