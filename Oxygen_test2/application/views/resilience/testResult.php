<div id="page">
    <div id="content_sub">
        <div class="post">
            <h2 class="title">Your Results.</h2>




            <?php
            $is_logged_in = $this->session->userdata('is_logged_in');
        if (isset($is_logged_in) && ($is_logged_in == 'true')) {
            $seeker_id=$this->session->userdata('seeker_id');
            $errFound=false;
            $query = $this->db->query('SELECT * FROM question');
            $rows=$query->num_rows();

            for($i=1;$i<=$rows;$i++) {
                $data['q'.$i] = $this->input->post('q'.$i);
                if($data['q'.$i]==null) {
                    $errFound=true;
                }
            }
            if ($errFound==true) {
                echo "There is an error!";?>
              <a href="<?php echo base_url();?>index.php/home/testResilience/">Click here to go back!</a>
      <?php      }
            else {
                $PvG=array(6,7,28,31,34,35,37,43);
                $PvB=array(8,16,17,18,22,32,44,48);
                $PmG=array(2,10,14,15,24,26,38,40);
                $PmB=array(5,13,20,21,29,33,42,46);
                $PsG=array(1,4,11,12,23,27,36,45);
                $PsB=array(3,9,19,25,30,39,41,47);

// PvG Total Score
                $PvGscore=0;
                for($PvGcount=0;$PvGcount<count($PvG);$PvGcount++) {
                    $PvGscore=$PvGscore+$data['q'.$PvG[$PvGcount]];

                }


//PvB Total Score
                $PvBscore=0;
                for($PvBcount=0;$PvBcount<count($PvB);$PvBcount++) {
                    $PvBscore=$PvBscore+$data['q'.$PvB[$PvBcount]];

                }


// PmG Total Score
                $PmGscore=0;
                for($PmGcount=0;$PmGcount<count($PmG);$PmGcount++) {
                    $PmGscore=$PmGscore+$data['q'.$PmG[$PmGcount]];

                }


//PmB Total Score
                $PmBscore=0;
                for($PmBcount=0;$PmBcount<count($PmB);$PmBcount++) {
                    $PmBscore=$PmBscore+$data['q'.$PmB[$PmBcount]];

                }



// PsG Total Score
                $PsGscore=0;
                for($PsGcount=0;$PsGcount<count($PsG);$PsGcount++) {
                    $PsGscore=$PsGscore+$data['q'.$PsG[$PsGcount]];

                }


//PmB Total Score
                $PsBscore=0;
                for($PsBcount=0;$PsBcount<count($PsB);$PsBcount++) {
                    $PsBscore=$PsBscore+$data['q'.$PsB[$PsBcount]];

                }

                $Hope=$PvBscore+$PmBscore;
                $BadEvents=$PmBscore+$PvBscore+$PsBscore;
                $GoodEvents=$PmGscore+$PvGscore+$PsGscore;
                $Optimism=$GoodEvents-$BadEvents;


                ?>
            <br/>
            <center>
                <table border="1">
                    <tr>
                        <td> <b>Indicators</b> </td>
                        <td> <b>Score</b> </td>
                        <td> <b>Explanation</b> </td>
                    </tr>
                    <tr>
                        <td>Hope</td>
                        <td><?php echo $Hope; ?></td>
                        <td><?php if($Hope<=2) {
                                    echo "You are extraodinarily Hopeful!";
                                }
                                else if($Hope<=6) {
                                    echo "You are moderately Hopeful!";
                                }
                                else if($Hope<=8) {
                                    echo "You are average Hopeful!";
                                }
                                else if($Hope<=11) {
                                    echo "You are moderately Hopeless!";
                                }
                                else if($Hope<=16) {
                                    echo "You are severely Hopeless!";
                                }
                                ?></td>
                    </tr>
                    <tr>
                        <td>Overall level of Optimism</td>
                        <td><?php echo $Optimism; ?></td>
                        <td><?php if($Optimism<0) {
                                    echo "You are very pessimistic!";
                                }
                                else if($Optimism<=2) {
                                    echo "You are moderately pessimistic!";
                                }
                                else if($Optimism<=5) {
                                    echo "You are average pessimistic!";
                                }
                                else if($Optimism<=8) {
                                    echo "You are moderately optimistic!";
                                }
                                else {
                                    echo "You are very optimistic across the board!";
                                }
                                ?></td>
                    </tr>
                    <tr>
                        <td>Explanatory Style For Good Events</td>
                        <td><?php echo $GoodEvents; ?></td>
                        <td><?php if($GoodEvents<=10) {
                                    echo "You have great pessimism in you!";
                                }
                                else if($GoodEvents<=13) {
                                    echo "You think quite pessimistically!";
                                }
                                else if($GoodEvents<=16) {
                                    echo "You think about good events average!";
                                }
                                else if($GoodEvents<=19) {
                                    echo "Your thinking is moderately optimistic!";
                                }
                                else {
                                    echo "You think about good events very optimistic!";
                                }
                                ?></td>
                    </tr>
                    <tr>
                        <td>Explanatory Style For Bad Events</td>
                        <td><?php echo $BadEvents; ?></td>
                        <td><?php if($BadEvents<=6) {
                                    echo "You are marvelously optimistic!";
                                }
                                else if($BadEvents<=9) {
                                    echo "You are moderately optimistic!";
                                }
                                else if($BadEvents<=11) {
                                    echo "You are about average when you think about bad events!";
                                }
                                else if($BadEvents<=14) {
                                    echo "Your are moderately pessimistic!";
                                }
                                else {
                                    echo "You require a change badly!";
                                }

?></td>
                    </tr>

                </table>

            </center>
<?php
$query = $this->db->query("INSERT INTO `test_result` (`result_id`, `PmB_score`, `PmG_score`, `PvB_score`, `PvG_score`, `PsB_score`, `PsG_score`, `test_type_id`, `seeker_id`) VALUES (NULL, '$PmBscore', '$PmGscore', '$PvBscore', '$PvGscore', '$PsBscore', '$PsGscore', '1', '$seeker_id')");


?><center>
            <font color="green" size="5"> Data Successfully Saved! </font></center>
 <?php           }

}
else{
   echo "LOGIN FIRST";
}
?>
        </div>

    </div>
    <!-- end #content -->
