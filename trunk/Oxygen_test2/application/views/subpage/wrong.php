<?php $this->load->view('register/register_header'); ?>

<div id="register">
    <h1>&otimes;Error&otimes;</h1>
    
    <p>There is a wrong about inserting your goal, please <a href="<?php echo base_url();?>index.php/home/holistic/">try again</a>!</p>
</div>


<div id="home">
    <a href="<?php echo base_url();?>index.php/home/index/"><img src="<?php echo base_url();?>CSS/images/background/home_button.png"/></a>
</div>

<?php $this->load->view('register/register_footer'); ?>