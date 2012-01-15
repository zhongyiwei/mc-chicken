<?php $this->load->view('register/register_header'); ?>
<div id="register">
    <h1 style="padding-top: 20px;">Reset Password</h1>
    <?php
    if (isset($msg)) {
        echo $msg;
    } else {
        ?>
        <h3 style="padding-top: 20px;padding-left: 20px;">Cannot remember your password?
        <br style="margin-top: 20px;padding-left: 20px;"/>Enter your e-mail below. We will send you an e-mail with your new password.</h3>
        <?php
    }
    ?>

    <table cellpadding="5" cellspace="5" style="padding-left: 20px; color: black; font-size: 16px;">
    <?php echo form_open('login/forgot_password'); ?>

        <tr>
            <th>Email:</th>
            <td><?php echo form_input('email', ''); ?></td>
            <td align="right"><?php echo form_submit('submit', 'Submit', 'id=submit_reset_password'); ?></td>
            <td><?php echo form_error('email'); ?></td>
        </tr>


<?php echo form_close(); ?>
    </table>
</div>

<div id="home">
    <a href="<?php echo base_url();?>index.php/home/index/"><img src="<?php echo base_url();?>CSS/images/background/home_button.png"/></a>
</div>
<?php $this->load->view('register/register_footer'); ?>