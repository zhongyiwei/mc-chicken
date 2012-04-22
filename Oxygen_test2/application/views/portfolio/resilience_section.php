<!--     
    Author     : Wang Qianhua
    Description: Used to generate resilience test results based on users` answered to the resilience test questions saved in database
-->
            <?php
            $is_logged_in = $this->session->userdata('is_logged_in');
        if (isset($is_logged_in) && ($is_logged_in == 'true')) {
            $seeker_id=$this->session->userdata('seeker_id');
            $errFound=false;
            $query = $this->db->query('SELECT * FROM test_result WHERE seeker_id='.$seeker_id.' ORDER BY result_id DESC LIMIT 0, 1');
            $rows=$query->num_rows();
            if($rows>0){
            $data=$query->result();
            //$rows=$query->num_rows();

            //for($i=1;$i<=$rows;$i++) {
            $PvBscore = $data[0]->PvB_score;
            $PmBscore = $data[0]->PmB_score;
            $PsBscore = $data[0]->PsB_score;
            $PmGscore = $data[0]->PmG_score;
            $PvGscore = $data[0]->PvG_score;
            $PsGscore = $data[0]->PsG_score;
            /*
                $PvBscore=$data['PvBscore'];
                $PmBscore=$data['PmBscore'];
                $PsBscore=$data['PsBscore'];
                $PmGscore=$data['PmGscore'];
                $PvGscore=$data['PvGscore'];
                $PsGscore=$data['PsGscore'];
*/
            //}



                $Hope=$PvBscore+$PmBscore;
                $BadEvents=$PmBscore+$PvBscore+$PsBscore;
                $GoodEvents=$PmGscore+$PvGscore+$PsGscore;
                $Optimism=$GoodEvents-$BadEvents;


                ?>
            <br/>
            <center>
                          <?php if($Hope<=2) {
                        $h_descriptor1=" extraordinarily hopeful about life";
                        $h_descriptor2="This is a very good sign that you can survive challenging times. You don’t give up easily";
                        $h_descriptor3="We believe in your potential";


                    }
                    else if($Hope<=6) {
                        $h_descriptor1=" moderately hopeful  about life";
                        $h_descriptor2="This is a good sign that you can survive challenging times. You don’t give up easily";
                        $h_descriptor3="We believe in your potential";

                    }
                    else if($Hope<=8) {
                        $h_descriptor1=" average in being hopeful about life";
                        $h_descriptor2=" This is a sign that you can survive challenging times. You don’t give up so easily";
                        $h_descriptor3="We want YOU to have these special abilities";

                    }
                    else if($Hope<=11) {
                        $h_descriptor1=" not so hopeful about life";
                        $h_descriptor2="These are signs that you may feel more vulnerable than hopeful people around you when you are dealing with challenging issues. You tend to give up more readily. This is quite worrying";
                        $h_descriptor3="We want YOU to have these special abilities";

                    }
                    else if($Hope<=16) {
                        $h_descriptor1=" really not hopeful";
                        $h_descriptor2="These are signs that you may feel a lot more vulnerable than hopeful people around you when you are dealing with challenging issues. You tend to give up readily. This is really worrying";
                        $h_descriptor3="We want YOU to have these special abilities";

                    }
                    ?><?php if($Optimism<0) {
                        $op_descriptor=" very pessimistic in general.";
                    }
                    else if($Optimism<=2) {
                        $op_descriptor=" quite pessimistic in general.";
                    }
                    else if($Optimism<=5) {
                        $op_descriptor=" average in being optimistic in general.";
                    }
                    else if($Optimism<=8) {
                        $op_descriptor=" moderately optimistic in general.";
                    }
                    else {
                        $op_descriptor=" very optimistic in general.";
                    }
                    ?><?php if($GoodEvents<=10) {
                        $g_descriptor=" is very optimistic";
                    }
                    else if($GoodEvents<=13) {
                        $g_descriptor=" is moderately optimistic";
                    }
                    else if($GoodEvents<=16) {
                        $g_descriptor=" average in optimism";
                    }
                    else if($GoodEvents<=19) {
                        $g_descriptor=" is quite pessimistic";
                    }
                    else {
                        $g_descriptor=" is very pessimistic";
                    }
                    ?>
                    <?php if($BadEvents<=6) {
                        $b_descriptor=" marvellously optimistic";
                    }
                    else if($BadEvents<=9) {
                        $b_descriptor=" is moderately optimistic";
                    }
                    else if($BadEvents<=11) {
                        $b_descriptor=" is average in optimism";
                    }
                    else if($BadEvents<=14) {
                        $b_descriptor=" is quite pessimistic";
                    }
                    else {
                        $b_descriptor=" is very pessimistic";
                    }

                    ?>
                <table border="1">
                    <tr><th><b>Indicators</b></th>
                   <th><b>Explanation</b></th></tr>
                    <tr><td>Hope</td><td>Your Hope score shows that you are <?php echo $h_descriptor1;?>. <?php echo $h_descriptor2;?>.<br/><br/>
                        Optimistic people do have special eyes that can help them look out for chances, they have super arms to gather resources and they have mighty legs that will keep running until they reach their goals. <?php echo $h_descriptor3; ?>!</td></tr>
                    <tr><td>Optimism</td><td>Your optimism level indicates that you are <?php echo $op_descriptor;?></td></tr>
                    <tr><td>Good Events</td><td>The way you think about good events <?php echo $g_descriptor; ?>. </td></tr>
<tr><td>Bad Events</td><td>The way you think about bad events <?php echo $b_descriptor;?>.</td></tr>
                </table>
            </center>
<?php
//$query = $this->db->query("INSERT INTO `test_result` (`result_id`, `PmB_score`, `PmG_score`, `PvB_score`, `PvG_score`, `PsB_score`, `PsG_score`, `test_type_id`, `seeker_id`) VALUES (NULL, '$PmBscore', '$PmGscore', '$PvBscore', '$PvGscore', '$PsBscore', '$PsGscore', '1', '$seeker_id')");
}else{
?>
            <br><center>
            <p> You have never completed resilience test yet.  </p></center>
  <?php
}
        }
else{
   echo "LOGIN FIRST";
}
?>