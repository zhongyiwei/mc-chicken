<?php $this->load->view('register/register_header'); ?>
<div id="register">
    <h1>&otimes;Error&otimes;</h1>
<div id="p_font">
    <h2 style="color: grey;">You can only accomplish a goal after you complete all its activities<br/>
        Some of your activities have not been completed, please try to finish them before you update your goal status.<br/> 
        Please <a href="<?php echo base_url();?>index.php/home/activity_list/"> View Activity</a></h2>
</div>
    </div>
<div id="home">
    <a href="<?php echo base_url();?>index.php/home/index/"><img src="<?php echo base_url();?>CSS/images/background/home_button.png"/></a>
</div>

<?php $this->load->view('register/register_footer'); ?>