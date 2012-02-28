<?php
date_default_timezone_set('Asia/Singapore');

$seeker_name = $this->session->userdata('name');
$seeker_id = $this->session->userdata('seeker_id');

$to = $this->session->userdata('referee_email');
$referee_name = $this->session->userdata('referee_name');
$gender = $this->session->userdata('gender');

if ($gender == "male"){
    $it = "He";
    $its = "His";
}else if ($gender == "female"){
    $it = "She";
    $its = "Her";
}

$email = $this->session->userdata('email');

$headers = "From: no-reply@rp.edu.sg \r\n";
$headers .= "Reply-To: " . $seeker_name . "\r\n";
//$headers .= "CC: susan@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$subject = "Inventation to monitor your friend:$seeker_name's Achievement";

$backButton = "&nbsp;&nbsp;<a href='javascript:history.go(-1)'><input name='back' value='Back' type='button'/></a>";

$link = base_url() . "index.php/home/portfolio_export_pdf?id=$seeker_id";

$message = "<p style='font-family:Arial;color:#065270'>Hi $referee_name<br/><br/><br/> $seeker_name is using Oxygen-The Life Coaching Interactive Application to set his goals, track his progress and build resilience.<br/><br/>$it would like to share with you $its current goals and achievements. $it has also designed his own Coat of Arms which represents his values in life. Here is link:  <br/><br/><br/>$link<br/><br/><br/>";
$message .= "Do drop him a mail ($email) to encourage him to continue to strive towards his objectives.<br/><br/>";
$message .= "Best Regards<br/></p>";
$message .= "<p style='font-family:Segoe UI;color:#065270;margin-top:-10px;'>Team Oxygen</p>";

$mail_sent = mail($to, $subject, $message, $headers);

$status = $mail_sent ? "Mail sent <b style='color: #060'>Successfully!</b>" : "Mail failed to send, Please go back to Previous Page. <br/>$backButton";
?>


<?php $this->load->view('register/register_header'); ?>

<div id="register">
    <h1 style="padding-top: 20px; font-size:22px;">Congratulations! You have successfully sent to your friend email.</h1>
    <p style="padding-left: 20px; color: black; font-size: 16px;"><?php echo $status; ?>, go <a href="<?php echo base_url();?>index.php/home/index/">back to home</a></p>
</div>

<div id="home">
    <a href="<?php echo base_url();?>index.php/home/index/"><img src="<?php echo base_url();?>CSS/images/background/home_button.png"/></a>
</div>

<?php $this->load->view('register/register_footer'); ?>