<?php 
$session_name = $this->session->userdata('name');
echo $session_name;
if($session_name != ""){
$session_status="true";

}
else{
$session_status="null";
}

//$session_status="true";
echo "session_status=$session_status";
//echo "&session_name=$session_name";
//echo "&session_id=$session_id";
exit();
?>