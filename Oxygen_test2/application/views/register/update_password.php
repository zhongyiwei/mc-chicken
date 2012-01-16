<?php $this->load->view('register/register_header'); ?>


<div id="register">
    <h1 style="padding-top: 20px;">Update User Password</h1>

    <table cellpadding="5" cellspace="5" style="text-align: left; padding-top: 20px;padding-left: 20px;">
        <?php echo form_open('update_info/change_pass'); ?>
        <tr>
            <th>Please Enter Your Old Password:</th>
            <td><?php echo form_password('password', ''); ?></td>
        </tr>


        <tr>
            <th>New Password:</th>
            <td><?php echo form_password('password_new', '', 'id="inputPassword"'); ?></td>
            <td><div id="complexity" class="default"></div></td>
        </tr>

        <tr>
            <th>Confirm Your New Password:</th>
            <td><?php echo form_password('password_new123', ''); ?></td>
        </tr>

        <tr>
            <td><?php echo form_submit('submit', 'Submit'); ?></td>
        </tr>
        <?php echo form_close(); ?>
    </table>
</div>

<div id="home">
    <a href="<?php echo base_url(); ?>index.php/home/index/"><img src="<?php echo base_url(); ?>CSS/images/background/home_button.png"/></a>
</div>

<?php $this->load->view('register/register_footer'); ?>