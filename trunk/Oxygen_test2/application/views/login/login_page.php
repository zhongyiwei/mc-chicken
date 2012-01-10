<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login Page</title>
        <link rel="shortcut icon" href="<?php echo base_url(); ?>CSS/images/favicon.ico"/>
        <link href="<?php echo base_url(); ?>CSS/login.css" rel="stylesheet" type="text/css" media="screen" />
    </head>
    <body>
        <div id="wrapper">
            <div id="login">
                <h1>User Login</h1>
                <table  class="click">
                    <?php echo form_open('login/validate'); ?>
                    <tr>
                        <th>Email:</th>
                        <td><?php echo form_input('email','');?></td>
                    </tr>

                    <tr>
                        <th>Password:</th>
                        <td><?php echo form_password('password','');?></td>
                    </tr>
                </table>
                
                <table>
                    <tr>
                        <td class="link_page"><?php echo anchor('login/register', 'Register'); ?></td>
                        <td class="link_page"><?php echo anchor('update_info/forgot_password', 'Forgot Password?'); ?></td>
                        <td class="link_page"><?php echo form_submit('submit', 'Login', 'id="submit"'); ?></td>
                        <?php echo form_close(); ?>
                    </tr>
                </table>
            </div>

            <div id="home">
                <a href="<?php echo base_url(); ?>index.php/home/index/"><img src="<?php echo base_url(); ?>CSS/images/background/home_button.png"/></a>
            </div>

            <?php $this->load->view('register/register_footer'); ?>
