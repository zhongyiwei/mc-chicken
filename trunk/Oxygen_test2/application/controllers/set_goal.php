<?php

class Set_goal extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    //according to the $id, get the detail information of particular goal
    function update($id) {
        $this->load->model('goal_setting');
        $query = $this->goal_setting->display_goal($id);

        if (!$query == null) {
            $data['id']=$query[0]->seeker_goal_id;
            $data['goal'] = $query[0]->goal_category;
            $data['goal_cat_id']=$query[0]->goal_cat_id;
            $data['goal_des'] = $query[0]->goal_desc;
            $data['target_end_date']=$query[0]->target_end_date;
            $data['achievement'] = $query[0]->achievement_criteria;
            $data['Progress'] = $query[0]->goal_completion_status;

            $this->load->view('subpage/update_goal_setting', $data);
        }
    }

    //create family goal
    function create_family_goal() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (isset($is_logged_in) && ($is_logged_in == 'true')) {
            $this->load->library('form_validation');

            //validation rules
            $this->form_validation->set_rules('family', 'Family Goal', 'trim|required');
            $this->form_validation->set_rules('family_criteria', 'Family Criteria', 'trim|required');
            $this->form_validation->set_rules('target_date1', 'Target Completion Date','trim|required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('subpage/wrong');
            } else {
                $seek_id = $this->session->userdata('seeker_id');
                $query = "SELECT * FROM goal WHERE seeker_id= ? and goal_cat_id=? and goal_completion_status=?";
                $record = $this->db->query($query, array($this->session->userdata('seeker_id'), 1,'Active'));
                if ($record->num_rows() <= 2) {
                    $this->load->model('goal_setting');
                    if ($query = $this->goal_setting->create_family_goal()) {
                        $this->load->view('subpage/goal_ok');
                        $this->output->set_header('refresh:2; url='.base_url().'index.php/home/see_goal/');
                    } else {
                        $this->load->view('subpage/wrong');
                    }
                } else {
                    $this->load->view('subpage/add_goal_error');
                }
            }
        } else {
            $this->load->view('login/login_page');
        }
    }
    //create career goal
    function create_career_goal() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (isset($is_logged_in) && ($is_logged_in == 'true')) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('career', 'Career Goal', 'trim|required');
            $this->form_validation->set_rules('career_criteria', 'Career Criteria', 'trim|required');
            $this->form_validation->set_rules('target_date2', 'Target Completion Date','trim|required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('subpage/wrong');
            } else {
                $seek_id = $this->session->userdata('seeker_id');
                $query = "SELECT * FROM goal WHERE seeker_id= ? and goal_cat_id=? and goal_completion_status=?";
                $record = $this->db->query($query, array($this->session->userdata('seeker_id'), 2,'Active'));
                if ($record->num_rows() <= 2) {
                    $this->load->model('goal_setting');
                    if ($query = $this->goal_setting->create_career_goal()) {
                        $this->load->view('subpage/goal_ok');
                        $this->output->set_header('refresh:2; url='.base_url().'index.php/home/see_goal/');
                    } else {
                        $this->load->view('subpage/wrong');
                    }
                } else {
                    $this->load->view('subpage/add_goal_error');
                }
            }
        } else {
            $this->load->view('login/login_page');
        }
    }
    //create education goal
    function create_education_goal() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (isset($is_logged_in) && ($is_logged_in == 'true')) {
            $this->load->library('form_validation');

            //validation rules
            $this->form_validation->set_rules('education', 'Education Goal', 'trim|required');
            $this->form_validation->set_rules('education_criteria', 'Education Criteria', 'trim|required');
            $this->form_validation->set_rules('target_date3', 'Target Completion Date','trim|required');

            //check the rules
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('subpage/wrong');
            } else {//rules are correct
                $seek_id = $this->session->userdata('seeker_id');
                $query = "SELECT * FROM goal WHERE seeker_id= ? and goal_cat_id=? and goal_completion_status=?";
                $record = $this->db->query($query, array($this->session->userdata('seeker_id'), 3,'Active'));
                if ($record->num_rows() <= 2) {
                    $this->load->model('goal_setting');
                    if ($query = $this->goal_setting->create_education_goal()) {//connect to model
                        $this->load->view('subpage/goal_ok');
                        $this->output->set_header('refresh:2; url='.base_url().'index.php/home/see_goal/');
                    } else {
                        $this->load->view('subpage/wrong');
                    }
                } else {
                    $this->load->view('subpage/add_goal_error');
                }
            }
        } else {
            $this->load->view('login/login_page');
        }
    }
    //create spiritual goal
    function create_spiritual_goal() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (isset($is_logged_in) && ($is_logged_in == 'true')) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('spiritual', 'Spiritual Goal', 'trim|required');
            $this->form_validation->set_rules('spiritual_criteria', 'Spiritual Criteria', 'trim|required');
            $this->form_validation->set_rules('target_date4', 'Target Completion Date','trim|required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('subpage/wrong');
            } else {
                $seek_id = $this->session->userdata('seeker_id');
                $query = "SELECT * FROM goal WHERE seeker_id= ? and goal_cat_id=? and goal_completion_status=?";
                $record = $this->db->query($query, array($this->session->userdata('seeker_id'), 4,'Active'));
                if ($record->num_rows() <= 2) {
                    $this->load->model('goal_setting');
                    if ($query = $this->goal_setting->create_spiritual_goal()) {
                        $this->load->view('subpage/goal_ok');
                        $this->output->set_header('refresh:2; url='.base_url().'index.php/home/see_goal/');
                    } else {
                        $this->load->view('subpage/wrong');
                    }
                }else {
                    $this->load->view('subpage/add_goal_error');
                }
            }
        } else {
            $this->load->view('login/login_page');
        }
    }
    //create financial goal
    function create_financial_goal() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (isset($is_logged_in) && ($is_logged_in == 'true')) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('financial', 'Financial Goal', 'trim|required');
            $this->form_validation->set_rules('financial_criteria', 'Financial Criteria', 'trim|required');
            $this->form_validation->set_rules('target_date5', 'Target Completion Date','trim|required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('subpage/wrong');
            } else {
                $seek_id = $this->session->userdata('seeker_id');
                $query = "SELECT * FROM goal WHERE seeker_id= ? and goal_cat_id=? and goal_completion_status=?";
                $record = $this->db->query($query, array($this->session->userdata('seeker_id'), 5,'Active'));
                if ($record->num_rows() <= 2) {
                    $this->load->model('goal_setting');
                    if ($query = $this->goal_setting->create_financial_goal()) {
                        $this->load->view('subpage/goal_ok');
                        $this->output->set_header('refresh:2; url='.base_url().'index.php/home/see_goal/');
                    } else {
                        $this->load->view('subpage/wrong');
                    }
                }else {
                    $this->load->view('subpage/add_goal_error');
                }
            }
        } else {
            $this->load->view('login/login_page');
        }
    }
    //create social goal
    function create_social_goal() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (isset($is_logged_in) && ($is_logged_in == 'true')) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('social', 'Social Goal', 'trim|required');
            $this->form_validation->set_rules('social_criteria', 'Social Criteria', 'trim|required');
            $this->form_validation->set_rules('target_date6', 'Target Completion Date','trim|required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('subpage/wrong');
            } else {
                $seek_id = $this->session->userdata('seeker_id');
                $query = "SELECT * FROM goal WHERE seeker_id= ? and goal_cat_id=? and goal_completion_status=?";
                $record = $this->db->query($query, array($this->session->userdata('seeker_id'), 6,'Active'));
                if ($record->num_rows() <= 2) {
                    $this->load->model('goal_setting');
                    if ($query = $this->goal_setting->create_social_goal()) {
                        $this->load->view('subpage/goal_ok');
                        $this->output->set_header('refresh:2; url='.base_url().'index.php/home/see_goal/');
                    } else {
                        $this->load->view('subpage/wrong');
                    }
                }else {
                    $this->load->view('subpage/add_goal_error');
                }
            }
        } else {
            $this->load->view('login/login_page');
        }
    }
    //create physical goal
    function create_physical_goal() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (isset($is_logged_in) && ($is_logged_in == 'true')) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('physical', 'Physical Goal', 'trim|required');
            $this->form_validation->set_rules('physical_criteria', 'Physical Criteria', 'trim|required');
            $this->form_validation->set_rules('target_date7', 'Target Completion Date','trim|required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('subpage/wrong');
            } else {
                $seek_id = $this->session->userdata('seeker_id');
                $query = "SELECT * FROM goal WHERE seeker_id= ? and goal_cat_id=? and goal_completion_status=?";
                $record = $this->db->query($query, array($this->session->userdata('seeker_id'), 7,'Active'));
                if ($record->num_rows() <= 2) {
                    $this->load->model('goal_setting');
                    if ($query = $this->goal_setting->create_physical_goal()) {
                        $this->load->view('subpage/goal_ok');
                        $this->output->set_header('refresh:2; url='.base_url().'index.php/home/see_goal/');
                    } else {
                        $this->load->view('subpage/wrong');
                    }
                }else {
                    $this->load->view('subpage/add_goal_error');
                }
            }
        } else {
            $this->load->view('login/login_page');
        }
    }
}

?>
