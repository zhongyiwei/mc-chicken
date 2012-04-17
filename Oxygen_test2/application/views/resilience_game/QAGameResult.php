<?php
/* 
    Document   : QAGameResult
    Created on : Apr 12, 2012, 1:29:24 PM
    Author     : ZHONG YIWEI
    Description:
        Insert the Result of the game into the databse
*/
session_start();
$gameResult = $_POST['score'];
$seeker_id=$this->session->userdata('seeker_id');


$this->db->query("INSERT INTO `resilience_game_result` (`seeker_id`, `score`) VALUES ('$seeker_id','$gameResult')");

?>
