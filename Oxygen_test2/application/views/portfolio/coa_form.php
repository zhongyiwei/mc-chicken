<?php echo form_open('db_control/validate_coa_input');
echo form_hidden('id_seeker', $this->session->userdata('seeker_id'));
?>
<input name="shield_coa" type="hidden" size="35" id="MyTextBox_coa" value="" />
<?php
echo form_submit('submit','Submit Your Selection','id="form_submit"');
echo form_close();
?>