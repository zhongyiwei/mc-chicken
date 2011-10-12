<?php $this->load->view('includes/header_general');?>
<?php $this->load->view('includes/banner_general');?>

<h1>&otimes;Error&otimes;</h1>

<p><?php echo form_error('name');?></p>
<p><?php echo form_error('gender');?></p>
<p><?php echo form_error('date_of_birth');?></p>
<p><?php echo form_error('nationality');?></p>
<p><?php echo form_error('mobile_number');?></p>
<p><?php echo form_error('email');?></p>
<p><?php echo form_error('password_new');?></p>
<p><?php echo form_error('password_new123');?></p>

<p><strong>Please wait for a while, system is processing now...</strong></p>

<?php $this->load->view('includes/footer_general'); ?>