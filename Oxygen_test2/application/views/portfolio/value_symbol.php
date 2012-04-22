<!--     
    Author     : Wang Qianhua
    Description: Used for retrieve and display all the values within coat of arms and on "Coat of Arms" pages
-->
<?php
  $this->load->model('link_db_model');
  $data = $this->link_db_model->get_value_symbol();
  $row=$data->result();
  //echo $row[0]->value_symbol_kids;
  if($this->session->userdata('category')=='child'){
?>
  <div class="value1">
  <img alt="" src="<?php echo base_url();
  echo $row[0]->value_symbol_kids;
  ?>" />
  </div>
    <div class="value2">
  <img alt="" src="<?php echo base_url();
  echo $row[1]->value_symbol_kids;
  ?>" />
  </div>
    <div class="value3">
  <img alt="" src="<?php echo base_url();
  echo $row[2]->value_symbol_kids;
  ?>" />
  </div>
    <div class="value4">
  <img alt="" src="<?php echo base_url();
  echo $row[3]->value_symbol_kids;
  ?>" />
  </div>
  <?php
  }else{?>
    <div class="value1">
  <img alt="" src="<?php echo base_url();
  echo $row[0]->value_symbol;
  ?>" />
  </div>
    <div class="value2">
  <img alt="" src="<?php echo base_url();
  echo $row[1]->value_symbol;
  ?>" />
  </div>
    <div class="value3">
  <img alt="" src="<?php echo base_url();
  echo $row[2]->value_symbol;
  ?>" />
  </div>
    <div class="value4">
  <img alt="" src="<?php echo base_url();
  echo $row[3]->value_symbol;
  ?>" />
  </div>
<?php
 }
  
  ?>