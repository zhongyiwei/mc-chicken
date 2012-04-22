<!--     
    Author     : Wang Qianhua
    Description: Used to retrieve users` mission statement saved in database
-->
                <?php
                $this->load->model('link_db_model');
                $data = $this->link_db_model->get_mission();
                if($data->num_rows() > 0) {
                foreach($data->result() as $r) : ?>
                <div id="example1" align="center">
                                    <!--<p>Double-click the mission statement below to start translation:</p>-->
		<p class="example" style="font-size:150%">
                    
                    <?php echo $r->mission_statement; ?>
                </p>
               	
		<?php endforeach; ?>
                  <h5 align="right">Update and Change your Mission Statement <a href="<?php echo base_url();?>index.php/home/update_ms/">HERE</a></h5>
                </div>
<?php
}else{

?>
<p style="font-size:110%"> You do not have any record of Mission Statement yet. Please set your Mission first</p>
<p style="font-size:110%">Set your Mission Statement<a href="<?php echo base_url();?>index.php/home/mission_statement/"> Here</a></p>
<?php }
?>