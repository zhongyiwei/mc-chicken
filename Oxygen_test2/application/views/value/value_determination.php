<?php if($this->session->userdata('type')=='negative'){ ?>
<link href="<?php echo base_url();?>CSS/style_subpage_main_neutral.css" rel="stylesheet" type="text/css" media="screen" />
<?php }else{?>
<link href="<?php echo base_url();?>CSS/style_subpage_main.css" rel="stylesheet" type="text/css" media="screen" />
<?php }?>

<!--[if IE]><link href="<?php echo base_url();?>CSS/styleForIE.css" rel="stylesheet" type="text/css" /><![endif]-->
        <!--[if IE]><link href="<?php echo base_url();?>CSS/styleForIEfooter.css" rel="stylesheet" type="text/css" /><![endif]-->


<div id="page">

    <div id="content_sub">
	
        <div class="post">
            <h2 class="title">Set Your Values</h2>
			
 <div class="entry">
 <!--<div id="popup">-->

            <script type="text/javascript">
                function addToList(boxvalue,boxname){
                    var i=1;
                    isOneOfBoxValue=new Boolean(false);
                    for (i=1;i<5;i++)
                    {


                        if((document.getElementById("field"+i).value)==boxvalue){
                            document.getElementById("field"+i).value="";
                            document.getElementById("value"+i).value="";
                            isOneOfBoxValue=true;
                            break;
                        }
                    }
                    if(isOneOfBoxValue==false){
                        for (i=1;i<5;i++)
                        {
                            if((document.getElementById("field"+i).value)==""){
                                document.getElementById("field"+i).value=boxvalue;
                                document.getElementById("value"+i).value=boxvalue;
                                break;
                            }
                            if(i==4){
							
							input='input[name='+boxname+']';
					
							
             
				$(input).removeAttr("checked");
				$(input).button( "refresh" );
				alert("You can only select 4 values");

                 


                            }

                        }
                    }
                }

function checkBoxes(){
var Questions=4;
var submit=true;

for (var i = 1; i <= Questions; i++) {

var questionDone = false;
var Radios = document.getElementsByName('value' + i);

for (var a = 0; a < Radios.length; a++) {
if (Radios[a].value!=''){
    questionDone = true;

}
}
if(questionDone==false){
    alert("You did not choose 4 values!");
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

				function changeHTML(value,meaning) {
	
				var text='<?php echo "Meaning for ";?>'+value+'<?php echo ":"; ?>'+meaning;
	document.getElementById('dialog2').innerHTML=text;
				}

            </script>


            <center>
			<br/>
                <b> Choose only <font color="red">4</font> Values that matches you best</b>
                <br/>
                <?php   $role=$this->session->userdata('role');
                        if($role=='admin'){
                            ?>
                <div align="right">

             <!--   <a href="<?php echo base_url();?>index.php/home/insert_values/">Add More Values</a>
                <a href="<?php echo base_url();?>index.php/home/delete_values/">Delete Values</a> -->

                
                </div>
                 <?php }?>
                <br/>

                <form method="post" action="<?php echo base_url();?>index.php/home/evaluate_values" onsubmit="return checkBoxes();">
                    Your Values:<br/>
                    <?php for($fieldCount=1;$fieldCount<=4;$fieldCount++) { ?>
                    <input type="text" size="15" id="field<?php echo $fieldCount; ?>" disabled='disabled'  />
                    <input type="hidden" id="value<?php echo $fieldCount; ?>" name="value<?php echo $fieldCount; ?>" >
                        <?php } ?>
                    <br/>Right-Click the values to know its meaning!
					<div title="Meaning Of Word" id="dialog2">aaa</div>
                    <div id="format">
                        <?php $query = $this->db->query('SELECT * FROM value');

                        ?>
                        <?php

                        $valuesCount=0;
                        $separator=1;
                        foreach($query->result()as $r):
                            ?>
							
                       <input type="checkbox"   name="check<?php echo $valuesCount; ?>" id="check<?php echo $valuesCount; ?>" value="<?php echo $r->value_name;?>" onclick="addToList(this.value,this.name);"  /><label  oncontextmenu="event.returnValue = false;changeHTML('<?php echo $r->value_name;?>','<?php echo $r->value_definition;?>');$( '#dialog2' ).dialog( 'open' );"for="check<?php echo $valuesCount; ?>"><?php echo $r->value_name;?></label>

                            <?php        if($separator%5==0) {
                                echo "<br/>";
                            }
                            $valuesCount++;
                            $separator++;
                        endforeach;?>

                    </div>




                    <br/><div align="right">
                        <?php 	
                      
                            echo form_submit('submit', 'Submit','id="submit"');  ?>

                    </div>
                    <?php 	echo form_close(); ?>
                </form>
            </center>
            <?php
            $is_logged_in = $this->session->userdata('is_logged_in');

       if (isset($is_logged_in) && ($is_logged_in == 'true')) {
          $seeker_id=$this->session->userdata('seeker_id');

                $query=$this->db->query('SELECT v.value_name FROM seeker_value sv,value v WHERE sv.value_id=v.value_id AND seeker_id="'.$seeker_id.'"');
                if($query->num_rows()>1) {
                    $fieldCount=1;
                    foreach($query->result()as $a):

                        $valuedata=$a->value_name;

                        ?>
            <script type="text/javascript">
                document.getElementById("field<?php echo $fieldCount; ?>").value="<?php echo $valuedata;?>";
                document.getElementById("value<?php echo $fieldCount; ?>").value="<?php echo $valuedata;?>";
                input='input[value='+'<?php echo $valuedata; ?>'+']';
                $(input).attr('checked', true);
            </script>
                        <?php

                        $fieldCount++;
                    endforeach;
                }
            }
            else { ?>
            <script type="text/javascript">
                input='input[id=submit]';
                $(input).attr('disabled', 'disabled');
            </script>
                <?php    }
            ?>

</div>
        </div>
</div>
  
	
	
    <!-- end #content -->
