<!--     
    Author     : Wang Qianhua
    Description: Used to generate the page that displays the error message if users tried to access to "Track Activity" which only members who logged 
                in are able to access 
-->
<?php $this->load->view('register/register_header'); ?>
<div id="register">
    <h1 style="padding-top: 20px;">&otimes;Error&otimes;</h1>
    
    <p style="padding-left: 20px;font-family:arial;color:green;font-size:16px">You have not login, please <a href="<?php echo base_url();?>index.php/login/index/">login</a> first!</p>
    <p style="padding-left: 20px;font-family:arial;color:green;font-size:12px">Track Activity is only displayed to the Members. If you are not a member yet, please <a href="<?php echo base_url();?>index.php/login/register">Sign up</a> first!</p>
</div>




<div id="home">
    <a href="<?php echo base_url();?>index.php/home/index/"><img src="<?php echo base_url();?>CSS/images/background/home_button.png"/></a>
</div>

<?php $this->load->view('register/register_footer'); ?>
