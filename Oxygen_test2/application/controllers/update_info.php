<?php

class Update_info extends CI_Controller {
    //update personal information
    function info() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (isset($is_logged_in) && ($is_logged_in == 'true')) {
            
            $new=array(
                'gender'=>  $this->input->post('gender'),
                'name'=>  $this->input->post('name'),
                'nation'=>  $this->input->post('nationality'),
                'dob'=>  $this->input->post('dob'),
                'mobile'=>  $this->input->post('mobile_number'),
                'referee_name'=>  $this->input->post('referee_name'),
                'referee_email'=>  $this->input->post('referee_email')
            );
            
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('name', 'Name', 'trim|required|alpha');
            $this->form_validation->set_rules('nationality', 'Nationality', 'trim|required|alpha');
            $this->form_validation->set_rules('date_of_birth', 'Date of Birth', 'trim|required');
            $this->form_validation->set_rules('mobile_number', 'Mobile Number', 'trim|required|numeric');
            $this->form_validation->set_rules('referee_name', 'Referee Name', 'trim|alpha');
            $this->form_validation->set_rules('referee_email', 'Referee Email', 'trim|valid_email');

            if ($this->form_validation->run() == FALSE) {
                  $this->load->view('register/error');
            } else {
                $this->session->set_userdata($new);
                $this->load->model('membership_model');
                $new_record = $this->membership_model->update_member();
                if ($new_record) {
                    $this->load->view('register/update_info_successful');
                    $this->output->set_header('refresh:2;url=' . base_url() . 'index.php/home/index/');
                } else {
                    $this->load->view('register/error');
                }
            }
        }
    }
    //change the password
    function change_pass() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (isset($is_logged_in) && ($is_logged_in == 'true')) {
            $record12=$this->db->select('*')
                    ->from('seeker')
                    ->where('seeker_id',$this->session->userdata('seeker_id'))
                    ->where('password', sha1($this->input->post('password')))
                    ->get();        
            
            if ($record12->num_rows == 1) {
                $this->load->library('form_validation');
                $this->form_validation->set_rules('password_new', 'Password', 'trim|required|min_length[8]|max_length[32]');
                $this->form_validation->set_rules('password_new123', 'Confirm Password', 'trim|required|matches[password_new]');

                if ($this->form_validation->run() == FALSE) {
                    $info_detail['info']='<p style="padding-left: 20px; color: black; font-size: 16px;">The New Password you have typed does not match, please try again.</p><p style="padding-left: 20px; color: black; font-size: 16px;">System will link you to that page, please hold on!</p>';
                    $this->load->view('register/error_password',$info_detail);
                    $this->output->set_header('refresh:2;url=' . base_url() . 'index.php/home/change_password/');
                } else {
                    $this->load->model('membership_model');
                    $pass = $this->membership_model->update_password();
                    if ($pass) {
                        $this->load->view('register/change_password_successful');
                    }
                }
            }else{
                $info_detail['info']='<p style="padding-left: 20px; color: black; font-size: 16px;">The Old Password you have typed is not correct, please try again.</p><p style="padding-left: 20px; color: black; font-size: 16px;">System will link you to that page, please hold on!</p>';
                $this->load->view('register/error_password',$info_detail);
                $this->output->set_header('refresh:2;url=' . base_url() . 'index.php/home/change_password/');
            }
        }
    }

    function forgot_password() {
        $this->load->view('register/forgot_password');
    }

}

?>
