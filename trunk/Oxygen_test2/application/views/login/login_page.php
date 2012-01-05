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
        <link href="<?php echo base_url(); ?>CSS/register.css" rel="stylesheet" type="text/css" media="screen" />
    </head>
    <body>
        <div id="wrapper">
            <div id="login">
                <table>
                    <tr>
                        <th>Email:</th>
                        <td></td>
                    </tr>
                    
                    <tr>
                        <th>Password:</th>
                        <td></td>
                    </tr>
                </table>
            </div>
            
            <div id="home">
                <a href="<?php echo base_url(); ?>index.php/home/index/"><img src="<?php echo base_url(); ?>CSS/images/background/home_button.png"/></a>
            </div>

            <?php $this->load->view('includes/footer_general'); ?>
