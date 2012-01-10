
<?php $this->load->view('register/register_header'); ?>

<div id="register">
    <h1>Registration Successful</h1>
    <div styel="margin-left:50px; margin-top:50px;color:black;">
        <p>Due to the system fault, your registration is not registered successfully, Please do it again!</p>
        <p>The system will direct you to the <strong>Register Page</strong>, please wait for a while...</p>
    </div>
</div>


<div id="home">
    <a href="<?php echo base_url();?>index.php/home/index/"><img src="<?php echo base_url();?>CSS/images/background/home_button.png"/></a>
</div>

<?php $this->load->view('includes/footer_general'); ?>