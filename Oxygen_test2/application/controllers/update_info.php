<?php

class Update_info extends CI_Controller {

    function info() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (isset($is_logged_in) && ($is_logged_in == 'true')) {
            
            $new=array(
                'name'=>  $this->input->post('name'),
                'nationality'=>  $this->input->post('nationality'),
                'hp'=>  $this->input->post('hp'),
                'email'=>  $this->input->post('email')
            );
            
            $this->session->set_userdata($new);
            
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('name', 'Name', 'trim|required|alpha');
            $this->form_validation->set_rules('nationality', 'Nationality', 'trim|required|alpha');
            $this->form_validation->set_rules('mobile_number', 'Mobile Number', 'trim|required|min_length[8]|numeric');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|unique[seeker.email]');

            if ($this->form_validation->run() == FALSE) {
//                $this->load->view('register/error');
//                $this->output->set_header('refresh:2;url=' . base_url() . 'index.php/home/personal_info/');
                  $this->load->view('register/update');
            } else {
                $this->load->model('membership_model');
                $new_record = $this->membership_model->update_member();
                if ($new_record) {
                    $this->load->view('register/update_info_successful');
                } else {
                    redirect('home/personal_info');
                }
            }
        }
    }

    function change_pass() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (isset($is_logged_in) && ($is_logged_in == 'true')) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('password_new', 'Password', 'trim|required|min_length[8]|max_length[32]');
            $this->form_validation->set_rules('password_new123', 'Confirm Password', 'trim|required|matches[password_new]');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('register/error');
                $this->output->set_header('refresh:3;url=' . base_url() . 'index.php/home/change_password/');
            } else {
                $this->load->model('membership_model');
                $pass = $this->membership_model->update_password();
                if ($pass) {
                    $this->load->view('register/change_password_successful');
                } else {
                    $this->load->view('register/error_password');
                }
            }
        }
    }

    function forgot_password() {
        $this->load->view('register/forgot_password');
    }

}

?>
