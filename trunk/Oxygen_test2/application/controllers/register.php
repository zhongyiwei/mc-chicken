<?php
class Register extends CI_Controller{
    
    function Register(){
        parent::__construct();
        $this->is_logged_in();
    }
    //using the model class to create the member
    function create_member(){
        $this->load->model('membership_model');
        if($query= $this->membership_model->create_member()){
            if($query!=null){
                $this->load->view('includes/template');
            }else{
                $this->load->view('register/error_email');
                $this->output->set_header('refresh:2; url='.base_url().'index.php/login/register/');
            }
            
        }else{
            $this->load->view('register/register');
        }
    }
    //once the user is logged in, it will assign True
    function is_logged_in(){
        $is_logged_in = $this->session->userdata('is_logged_in');
        if(!isset($is_logged_in) || $is_logged_in !=true){
            return true;
        }else{
            return false;
        }
    }
}
?>
