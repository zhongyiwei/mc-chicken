<?php if($this->session->userdata('type')=='negative'){ ?>
<link href="<?php echo base_url();?>CSS/style_subpage_main_neutral.css" rel="stylesheet" type="text/css" media="screen" />
<?php }else{?>
<link href="<?php echo base_url();?>CSS/style_subpage_main.css" rel="stylesheet" type="text/css" media="screen" />
<?php }?>

<!--[if IE]><link href="<?php echo base_url();?>CSS/styleForIEfooter.css" rel="stylesheet" type="text/css" /><![endif]-->

<div id="page">
    <div id="content_sub">
        <div class="post">
            <h2 class="title">Test Your Resilience</h2>
            <br/>
            Complete the questions to test your resilience.<br/>
<?php $query = $this->db->query('SELECT * FROM question');
$rows=$query->num_rows();
?>

            <script type="text/javascript">
                function checkBoxes(){
var Questions=<?php echo $rows;?>;
var submit=true;


for (var i = 1; i <= Questions; i++) {

var questionDone = false;
var Radios = document.getElementsByName('q' + i);

for (var a = 0; a < Radios.length; a++) {

if (Radios[a].checked){
    questionDone = true;
}
}
if(questionDone==false){
    alert("You have questions unanswered!");
  
    submit=false;
   break;
}

}
if(submit==true){
    return true;

}
else {

    return false;
}

                }
</script>
            <?php $i=1;
            $attributes = array('onsubmit' => 'return checkBoxes();');

            echo form_open('home/testResult',$attributes);
            //$this->load->model('test_resilience_model');
            //$question = $this->test_resilience_model->get_record();


            ?>


            <div id="tabs">
                <ul>

                    <li><a href="#tabs-1">1-5</a></li>
                    <li><a href="#tabs-2">6-10</a></li>
                    <li><a href="#tabs-3">11-15</a></li>
                    <li><a href="#tabs-4">16-20</a></li>
                    <li><a href="#tabs-5">21-25</a></li>
                    <li><a href="#tabs-6">26-30</a></li>
                    <li><a href="#tabs-7">31-35</a></li>
                    <li><a href="#tabs-8">36-40</a></li>
                    <li><a href="#tabs-9">41-45</a></li>
                    <li><a href="#tabs-10">46-48</a></li>



                </ul>

                <?php $tabnumber=1;
                $isfirstset=true;
                $query = $this->db->query('SELECT * FROM question');

                ?>

                <?php foreach($query->result()as $r):
                    $name="tabs-".$tabnumber;
                    ?>
                    <?php

                    if($i%5!=0) {
                        if($isfirstset==true) {
                            echo "<div id='$name'>"?>
                            <?php $isfirstset=false;

                        }

                        ?>

   

                        <?php

                        echo $r->test_question_num;
                        echo ". ";
                        echo $r->question;
                        echo "</br></br>";
                        $optionsquery = $this->db->query('SELECT * FROM options WHERE test_question_num='.$r->test_question_num);
                        foreach($optionsquery->result()as $a):
                            $optionvalue=$a->option_score;
                            $optionname="q".$r->test_question_num;
                            echo "<input type='radio' id='$optionname' name='$optionname' value=$optionvalue />";
                            echo $a->option;
                            echo "<br/>";
                        endforeach;
                        echo "<br/>";
                    }

                    else {
                        echo $r->test_question_num;
                        echo ". ";
                        echo $r->question;
                        echo "</br></br>";
                        $optionsquery = $this->db->query('SELECT * FROM options WHERE test_question_num='.$r->test_question_num);
                        foreach($optionsquery->result()as $a):
                            $optionvalue=$a->option_score;
                            $optionname="q".$r->test_question_num;
                            echo "<input type='radio' id='$optionname' name='$optionname' value=$optionvalue />";
                            echo $a->option;
                            echo "<br/>";
                        endforeach;
                        echo "</br>";
                        echo "</div>";
                        ?>





                        <?php
                        $isfirstset=true;
                        $tabnumber++;
                    }
                    $i++;
                endforeach;
                ?>



            </div>
            <div align="right"><input type="submit" name="submit" value="Submit" ></div>





        </div>




    </div>

</div>
<!-- end #content -->
