<?php 

// Create local variables from the Flash ActionScript posted variables
$questionStart=$this->input->post('questionStart');
$questionStart=1;
$questionEnd=$this->input->post('questionEnd');
$questionEnd=4;
$arrQuestions = $this->db->query("SELECT * FROM question WHERE test_question_num BETWEEN $questionStart and $questionEnd");
$arrOptions = $this->db->query("SELECT * FROM question WHERE test_question_num BETWEEN $questionStart and $questionEnd");

$row = $arrQuestions->row(0); 
$return_msg1=$row->question;
echo $return_msg1;

	    echo "return_msg1=$return_msg1";

// Exit script	
exit();
?>