<!--     
    Author     : Teo Wen Jie
    Description: Used to retrieve resilience test question and be passed to flash for display 
-->
<?php

// Create local variables from the Flash ActionScript posted variables
$questionStart=$_POST['questionStart'];
//$questionStart=1;
$questionEnd=$_POST['questionEnd'];
//$questionEnd=4;
// Strip slashes on the Local variables for security


$arrQuestions = $this->db->query("SELECT * FROM question WHERE test_question_num BETWEEN $questionStart and $questionEnd");
$arrOptions = $this->db->query("SELECT * FROM options WHERE test_question_num BETWEEN $questionStart and $questionEnd");


$row = $arrQuestions->row(0);
$return_msg1=$row->question;
	    echo "return_msg1=$return_msg1";
		$row = $arrQuestions->row(1);
$return_msg2=$row->question;
	    echo "&return_msg2=$return_msg2";
		$row = $arrQuestions->row(2);
$return_msg3=$row->question;
	    echo "&return_msg3=$return_msg3";
		$row = $arrQuestions->row(3);
$return_msg4=$row->question;
	    echo "&return_msg4=$return_msg4";

		$row=$arrOptions->row(0);
		$rb1=$row->option;
		$row=$arrOptions->row(1);
		$rb2=$row->option;
		$row=$arrOptions->row(2);
		$rb3=$row->option;
				$row=$arrOptions->row(3);
		$rb4=$row->option;
				$row=$arrOptions->row(4);
		$rb5=$row->option;
				$row=$arrOptions->row(5);
		$rb6=$row->option;
						$row=$arrOptions->row(6);
		$rb7=$row->option;
						$row=$arrOptions->row(7);
		$rb8=$row->option;

		 		$row=$arrOptions->row(0);
		$rb1val=$row->option_score;
				$row=$arrOptions->row(1);
		$rb2val=$row->option_score;
				$row=$arrOptions->row(2);
		$rb3val=$row->option_score;
				$row=$arrOptions->row(3);
		$rb4val=$row->option_score;
				$row=$arrOptions->row(4);
		$rb5val=$row->option_score;
				$row=$arrOptions->row(5);
		$rb6val=$row->option_score;
						$row=$arrOptions->row(6);
		$rb7val=$row->option_score;
						$row=$arrOptions->row(7);
		$rb8val=$row->option_score;


					echo "&rb1=$rb1";
		echo "&rb2=$rb2";
				echo "&rb3=$rb3";
		echo "&rb4=$rb4";
				echo "&rb5=$rb5";
		echo "&rb6=$rb6";
						echo "&rb7=$rb7";
		echo "&rb8=$rb8";
		echo "&rb1val=$rb1val";
		echo "&rb2val=$rb2val";
				echo "&rb3val=$rb3val";
		echo "&rb4val=$rb4val";
				echo "&rb5val=$rb5val";
		echo "&rb6val=$rb6val";
						echo "&rb7val=$rb7val";
		echo "&rb8val=$rb8val";


// Exit script
exit();
?>