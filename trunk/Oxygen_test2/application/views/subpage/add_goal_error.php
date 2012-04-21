<!--load header-->
<?php $this->load->view('register/register_header'); ?>
<!--main content-->
<div id="register">
    <h1>&otimes;Error&otimes;</h1>

    <p>The number of your active goals are up to 3. Please finish the rest goals first before you insert another goal! Click to <a href="<?php echo base_url(); ?>index.php/home/see_goal/">View your Goals</a>!</p>
</div>
<div id="home">
    <a href="<?php echo base_url(); ?>index.php/home/index/"><img src="<?php echo base_url(); ?>CSS/images/background/home_button.png"/></a>
</div>
<!--load footer-->
<?php $this->load->view('register/register_footer'); ?>