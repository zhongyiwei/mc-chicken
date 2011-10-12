
<?php $this->load->view('register/register_header'); ?>

<?php $this->load->view('includes/banner_general'); ?>
<h1>Reset Password</h1>
<?php
if (isset($msg))
{
    echo $msg;
}
else
{
    ?>
    <h3>Cannot remember your password?
    <br/>Enter your e-mail below. We will send you an e-mail with your new password.</h3>
    <?php
}
?>

<table cellpadding="5" cellspace="5">
<?php echo form_open('login/forgot_password'); ?>

    <tr>
        <th>Email:</th>
        <td><?php echo form_input('email', ''); ?></td>
        <td align="right"><?php echo form_submit('submit', 'Submit', 'id=submit_reset_password'); ?></td>
        <td><?php echo form_error('email'); ?></td>
    </tr>

    
<?php echo form_close(); ?>
</table>

<?php $this->load->view('includes/footer_general'); ?>