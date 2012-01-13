
<?php $this->load->view('register/register_header'); ?>

<?php $this->load->view('includes/banner_general'); ?>

<div id="register">
    <h1>Update User Info</h1>

    <table cellpadding="5" cellspace="5" style="text-align: left;">
        <?php 
        
        $name=$this->session->userdata('name');
        $email=$this->session->userdata('email');
        $gender=$this->session->userdata('gender');
        $dob=$this->session->userdata('dob');
        $nationality=$this->session->userdata('nation');
        $hp=$this->session->userdata('mobile');
        echo form_open('update_info/info'); ?>

        <tr>
            <th>Name:</th>
            <td><?php echo form_input('name', set_value('name', $name), 'id="name"'); ?></td>
            <td><?php echo form_error('name'); ?></td>
        </tr>

        <tr>
            <th>Gender:</th>
            <td><?php echo $gender;?></td>
        </tr>

        <tr>
            <th>Date Of Birth:</th>
            <td><?php echo $dob ;?></td>
        </tr>
        
        <tr>
            <th>Nationality:</th>
            <td><?php
                $options = array(
                    'Burma' => 'Burma',
                    'China' => 'China',
                    'India' => 'India',
                    'Indonesia' => 'Indonesia',
                    'Malaysia' => 'Malaysia',
                    'Singaporean' => 'Singaporean',
                    'Thailand' => 'Thailand',
                    'Vietnam' => 'Vietnam',
                    'Others' => 'Others'
                );
                echo form_dropdown('nationality', $options, set_value('nationality', $nationality));
        ?></td>
            <td><?php echo form_error('nationality'); ?></td>
        </tr>

        <tr>
            <th>Mobile Number:</th>
            <td><?php echo form_input('mobile_number', set_value('mobile_number', $hp)); ?></td>
            <td><?php echo form_error('mobile_number'); ?></td>
        </tr>

        <tr>
            <th>Email:</th>
            <td><?php echo $email; ?></td>
        </tr>

        <tr>
            <td><?php echo form_submit('submit', 'Submit', 'id=submit_login'); ?></td>
        </tr>
        <?php echo form_close(); ?>
    </table>
</div>

<div id="home">
    <a href="<?php echo base_url(); ?>index.php/home/index/"><img src="<?php echo base_url(); ?>CSS/images/background/home_button.png"/></a>
</div>
<?php $this->load->view('register/register_footer'); ?>