<?php
$seeker_name = $this->session->userdata('seeker_name');

$to="91234@myrp.edu.sg";

$headers = "From: no-reply@rp.edu.sg \r\n";
$headers .= "Reply-To: " .$seeker_name. "\r\n";
//$headers .= "CC: susan@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$subject = "Inventation to monitor your friend:$seeker_name's Achievement";

$backButton = "&nbsp;&nbsp;<a href='javascript:history.go(-1)'><input name='back' value='Back' type='button'/></a>";

$link = base_url() . "index.php/home/portfolio_export_pdf?id=<?php echo $this->session->userdata('seeker_id')";

$message = "Dear <br/> Your have received your friend:$seeker_name's portofoilo about his achivement, here is link:  <br/>$link<br/>";
$status = $mail_sent ? "Mail sent <b style='color: #060'>Successfully!</b>" : "Mail failed to send, Please go back to Previous Page. <br/>$backButton";

$mail_sent = mail($to, $subject, $message, $headers);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Send Email Status</title>
    </head>

    <body>
        <?php echo $status; ?>
    </body>
</html>