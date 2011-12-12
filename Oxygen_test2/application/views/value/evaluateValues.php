<div id="page">
    <div id="content_sub">
        <div class="post">
            <h2 class="title">Values Submission</h2>


         
            <br/>
            <br/>
 
 <br/>
 

 <?php
 $is_logged_in = $this->session->userdata('is_logged_in');
       if (isset($is_logged_in) && ($is_logged_in == 'true')) {
      $seeker_id=$this->session->userdata('seeker_id');
     
 $numValues=4;
 $errFound=false;
  for($i=1;$i<=$numValues;$i++) {
      $data['value'.$i] = $this->input->post('value'.$i);
      if($data['value'.$i]==null) {
                    $errFound=true;
                }
  }
 
  if($errFound==true){
     ?><center>
         <img height="180" width="200" src="http://1.bp.blogspot.com/_kGSwmz0Fk7s/TT9oVUoCBnI/AAAAAAAAAVk/rU4ZhmmKTFY/s1600/Sad-Emoticon-raul.jpg"><br/>
         <b><font size="5"> Your Values are  <font color="red">not saved!</font></font> </b></center>
<?php  }
else{
    $query=$this->db->query('SELECT * FROM seeker_value WHERE seeker_id="'.$seeker_id.'"');
    if($query->num_rows()>1){

                    $deleteData=$this->db->query('DELETE FROM seeker_value WHERE seeker_id="'.$seeker_id.'"');

                }
              for($i=1;$i<=$numValues;$i++) {
                    $newValue=$this->input->post('value'.$i);

     $statement='SELECT value_id FROM value WHERE value_name="'.$newValue.'"';
                    $query=$this->db->query($statement);

                    $row = $query->row();
                  
                    $newValueID=$row->value_id;

                    $insertData=$this->db->query('INSERT INTO seeker_value (value_id, seeker_id) VALUES ("'.$newValueID.'", "'.$seeker_id.'")');
     

  }
?>

 <center>
 <img height="180" width="200" src="http://3.bp.blogspot.com/_Bi2BWztHgGI/TPmyKjWRl3I/AAAAAAAAA2Y/X2gd7mSP4rQ/s1600/SmileyFace.jpg"><br/>
 <b><font size="5"> Your Values are  <font color="green">saved!</font></font> </b></center>
<?php   }

   
            }
            else{
                echo "LOGIN FIRST";
            }
 ?>

            



        </div>

    </div>
<!-- end #content -->
