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
                <table>
                    <tr>
                        <th>Email:</th>
                        <td>14234</td>
                    </tr>
                    
                    <tr>
                        <th>Password:</th>
                        <td>124243</td>
                    </tr>
                </table>
            </div>
            
            <div id="home">
                <a href="<?php echo base_url(); ?>index.php/home/index/"><img src="<?php echo base_url(); ?>CSS/images/background/home_button.png"/></a>
            </div>

           <?php $this->load->view('register/register_footer'); ?>
