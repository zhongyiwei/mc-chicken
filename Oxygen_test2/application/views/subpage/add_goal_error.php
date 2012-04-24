<!--load header-->
<?php $this->load->view('register/register_header'); ?>
<!--main content-->
<div id="register">
    <h1>&otimes;Error&otimes;</h1>
<div id="p_font">
    <h2 style="color: grey;">To have a balanced life, you should set goals in all key areas of life. <br/>
        There should not be more than 3 uncompleted in each goal category. <br/>
        Please finish the existing goals in this category first before you set another goal! <br/>
        Click to <a href="<?php echo base_url(); ?>index.php/home/see_goal/">View your Goals</a>!</h2>
</div>
    </div>
<div id="home">
    <a href="<?php echo base_url(); ?>index.php/home/index/"><img src="<?php echo base_url(); ?>CSS/images/background/home_button.png"/></a>
</div>
<!--load footer-->
<?php $this->load->view('register/register_footer'); ?>