<?php
session_start();
$gameResult = $_POST['score'];
$seeker_id=$this->session->userdata('seeker_id');

$this->db->query("INSERT INTO resilience_game_result ('seeker_id','score')VALUES('$seeker_id','$gameResult')");

?>
