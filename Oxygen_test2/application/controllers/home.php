<?php

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->view('includes/template');
    }

    //Wenjie-----Value & Resilience
    function resilience_test() {
        $this->load->view('resilience_test/subpage_resilience_test');
    }

    function session() {
        $this->load->view('resilience_test/subpage_session');
    }

    function resiliencequestion() {
        $this->load->view('resilience_test/subpage_question');
    }

    function result() {
        $this->load->view('resilience_test/subpage_result');
    }

    function value() {
        $data['main'] = 'value/value_understanding';
        $data['nav'] = 'mission_statement/left_nav_value';
        $this->load->view('value/subpage_value', $data);
    }

    function whyValue() {
        $data['main'] = 'value/value_needs';
        $data['nav'] = 'mission_statement/left_nav_value';
        $this->load->view('value/subpage_value', $data);
    }

    function determineValue() {
        $data['main'] = 'value/value_determination';
        $data['nav'] = 'includes/left_nav_value';
        $this->load->view('value/subpage_value', $data);
    }

    function valueDesc() {

        $value = $this->input->post('value');

        $data['main'] = 'value_description';

        if ($this->input->post('ajax')) {
            $this->load->view($data['main']);
        } else {
            $data['main'] = 'value/value_determination';
            $data['nav'] = 'mission_statement/left_nav_value';
            $this->load->view('value/subpage_valuedetermination', $data);
        }
    }

    function evaluate_values() {
        $data['main'] = 'value/evaluate_values';
        $data['nav'] = 'mission_statement/left_nav_value';
        $this->load->view('value/subpage_value', $data);
    }

    function insert_values() {
        $data['main'] = 'value/insert_values';
        $data['nav'] = 'mission_statement/left_nav_value';
        $this->load->view('value/subpage_value', $data);
    }

    function do_insert_values() {
        $data['main'] = 'value/do_insert_values';
        $data['nav'] = 'mission_statement/left_nav_value';
        $this->load->view('value/subpage_value', $data);
    }

    function delete_values() {
        $data['main'] = 'value/delete_values';
        $data['nav'] = 'mission_statement/left_nav_value';
        $this->load->view('value/subpage_value', $data);
    }

    function do_delete_values() {
        $data['main'] = 'value/do_delete_values';
        $data['nav'] = 'mission_statement/left_nav_value';
        $this->load->view('value/subpage_value', $data);
    }

    function resilience() {
        $data['main'] = 'resilience/resilience';
        $data['nav'] = 'includes/left_nav_resilience';
        $this->load->view('resilience/subpage_resilience', $data);
    }

    function test_result() {
        $data['main'] = 'resilience/test_result';
        $data['nav'] = 'includes/left_nav_resilience';
        $this->load->view('resilience/subpage_resilience', $data);
    }

    //End of Wenjie----Value & Resilience
	//WenJie Flow
	   function getflow() {
        $this->load->view('next/subpage_flow');
    }
	//End of flow
    //Arian ---- activity Tracking
    function activity_tracking() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (isset($is_logged_in) && ($is_logged_in == 'true')) {
            parse_str($_SERVER['QUERY_STRING'], $_GET);
            $this->load->model('activity_tracking_model');
            $this->activity_tracking_model->update_activity_status();
            $data['main_activity'] = 'set_activity/activity_tracking';
            $data['nav_goal'] = 'includes/left_nav_goal';
            $this->load->view('set_activity/template_sc', $data);
        } else {
            $this->load->view('portfolio/page_visitor');
        }
    }

    //End of tracking --- Arian
//Bowen ----- Goal & Smart
    function goal() {
        $data['main'] = 'subpage/holistic';
        $data['nav'] = 'includes/left_nav_goal';
        $this->load->view('subpage/subpage_goal', $data);
    }

    function holistic() {
        $data['main'] = 'subpage/set_holistic';
        $data['nav'] = 'includes/left_nav_goal';
        $this->load->view('subpage/subpage_goal', $data);
    }

    function smart() {
        $data['main'] = 'subpage/smart_goal';
        $data['nav'] = 'includes/left_nav_goal';
        $this->load->view('subpage/subpage_goal', $data);
    }

    function see_goal() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (isset($is_logged_in) && ($is_logged_in == 'true')) {
            $data['main'] = 'subpage/see_goal';
            $data['nav'] = 'includes/left_nav_goal';
            $this->load->view('subpage/subpage_goal', $data);
        } else {
            $this->load->view('subpage/login');
        }
    }

    function update_goal() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (isset($is_logged_in) && ($is_logged_in == 'true')) {
            $data['main'] = 'subpage/update_goal_setting';
            $data['nav'] = 'includes/left_nav_goal';
            $this->load->view('subpage/update_goal_setting', $data);
        } else {
            $this->load->view('subpage/login');
        }
    }

    function change_password() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (isset($is_logged_in) && ($is_logged_in == 'true')) {
            $this->load->view('register/update_password');
        }
    }

    function personal_info() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (isset($is_logged_in) && ($is_logged_in == 'true')) {
            $this->load->model('membership_model');
            $member_info = $this->membership_model->select_info();

            if (!$member_info == null) {
                $old_info['id'] = $member_info[0]->seeker_id;
                $old_info['email'] = $member_info[0]->email;
                $old_info['name'] = $member_info[0]->name;
                $old_info['gender'] = $member_info[0]->gender;
                $old_info['dob'] = $member_info[0]->date_of_birth;
                $old_info['nationality'] = $member_info[0]->nationality;
                $old_info['hp'] = $member_info[0]->mobile_number;
            }
            $this->load->view('register/update', $old_info);
        }
    }

    //End of Bowen ----- Goal & Smart
    //Robin --- Activity & Portfolio & Mission statement & Coat of Arms
    function why_activity() {
        $data['main_activity'] = 'set_activity/main_wa';
        $data['nav_goal'] = 'includes/left_nav_goal';
        $this->load->view('set_activity/template_sc', $data);
    }

    function activity() {
        $data['main_activity'] = 'set_activity/main_sc';
        //$data['main_activity_task']='set_activity/main_sc_task';
        $data['nav_goal'] = 'includes/left_nav_goal';
        //$data2['activity_form']='set_activity/activity_form';
        $this->load->view('set_activity/template_sc', $data);
        //$this->load->view('set_activity/main_sc',$data2);
    }

    function activity_page() {
        $data['main_activity'] = 'set_activity/main_sc';
        $data['nav_goal'] = 'set_activity/left_nav_ac';
        $this->load->view('set_activity/template_sc', $data);
    }

    function activity_info() {
        $data['main_activity'] = 'set_activity/main_info';
        $data['nav_goal'] = 'set_activity/left_nav_ac';
        $this->load->view('set_activity/template_sc', $data);
    }

    function set_reminder() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (isset($is_logged_in) && ($is_logged_in == 'true')) {
            $this->load->model('link_db_model');
            //echo "here";
            $query = $this->link_db_model->get_reminder(); //change to get_goal in future
            if ($query->num_rows() == 0) {
                //echo "here1";
                $data['main_activity'] = 'set_activity/main_sr';
                $data['nav_goal'] = 'includes/left_nav_goal';
                $this->load->view('set_activity/template_sc', $data);
            } else {
                //echo "here";
                $data['main_activity'] = 'set_activity/main_do_sr';
                $data['nav_goal'] = 'includes/left_nav_goal';
                $this->load->view('set_activity/template_sc', $data);
            }
        } else {
            $this->load->view('portfolio/page_visitor');
        }
    }

    function reminder_setting() {
        $this->load->model('link_db_model');
        $data['rows'] = $this->link_db_model->get_reminder();

        $data['main_activity'] = 'set_activity/main_rs';
        $data['nav_goal'] = 'includes/left_nav_goal';
        $this->load->view('set_activity/template_sc', $data);
    }

    function reminder_update() {
        $this->load->model('link_db_model');
        $query = $this->link_db_model->get_reminder();
        if ($query->num_rows() > 0) {
            $row = $query->result();
            $data['frequency'] = $row[0]->reminder_frequency;
            $data['email'] = $row[0]->reminder_email;
            $data['sms'] = $row[0]->reminder_sms;
        } else {
            
        }
        $data['main_activity'] = 'set_activity/main_urs';
        $data['nav_goal'] = 'includes/left_nav_goal';
        $this->load->view('set_activity/template_sc', $data);
    }

    function update_activity() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (isset($is_logged_in) && ($is_logged_in == 'true')) {
            parse_str($_SERVER['QUERY_STRING'], $_GET); //converts query string into global GET 
            $this->load->model('link_db_model');
            $data['rows'] = $this->link_db_model->get_activity();

            $data['main_activity'] = 'set_activity/main_ua';
            $data['nav_goal'] = 'includes/left_nav_goal';
            $this->load->view('set_activity/template_sc', $data);
        } else {
            $this->load->view('portfolio/page_visitor');
        }
    }

    function activity_list() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (isset($is_logged_in) && ($is_logged_in == 'true')) {
            $data['main_activity'] = 'set_activity/main_al';
            $data['nav_goal'] = 'includes/left_nav_goal';
            $this->load->view('set_activity/template_sc', $data);
        } else {
            $this->load->view('portfolio/page_visitor');
        }
    }

    function coat_of_arm() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (isset($is_logged_in) && ($is_logged_in == 'true')) {
            $data['main'] = 'mission_statement/main_coa';
            $data['nav_value'] = 'mission_statement/left_nav_value';
            $this->load->view('mission_statement/template_ms', $data);
        } else {
            $this->load->view('portfolio/page_visitor');
        }
    }

    function why_coat_of_arm() {
        $data['main'] = 'mission_statement/main_wcoa';
        $data['nav_value'] = 'mission_statement/left_nav_value';
        $this->load->view('mission_statement/template_ms', $data);
    }

    function update_coa() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (isset($is_logged_in) && ($is_logged_in == 'true')) {
            $this->load->model('link_db_model');
            $data['rows'] = $this->link_db_model->get_mission();
            $query = $this->link_db_model->get_coa2();
            if ($query->num_rows() > 0) {
                $row = $query->result();
                $data['shield'] = $row[0]->shield;
                // $data['banner']=$row[0]->banner;
                // $data['crest']=$row[0]->crest;
            } else {
                
            }
			$query2 = $this->link_db_model->get_value();
            if ($query2->num_rows() > 0) {
                $row_value = $query2->result();
                $data['value1'] = $row_value[0]->value_name;
                $data['value2'] = $row_value[1]->value_name;
                $data['value3'] = $row_value[2]->value_name;
                $data['value4'] = $row_value[3]->value_name;
				//print_r($query2->result());
                //$this->load->view('mission_statement/template_ms', $data);
            } else {
                $data['value1'] = "No value";
                $data['value2'] = "No value";
                $data['value3'] = "No value";
                $data['value4'] = "No value";
            }
            $data['main_portfolio'] = 'portfolio/main_ucoa';
            $data['nav_portfolio'] = 'portfolio/left_nav_mp';
            $this->load->view('portfolio/template_mp', $data);
        } else {
            $this->load->view('portfolio/page_visitor');
        }
    }

    function view_coa_ms() {
        $data['main'] = 'mission_statement/main_coa_ms';
        $data['nav_value'] = 'mission_statement/left_nav_value';
        $this->load->view('mission_statement/template_ms', $data);
    }

    function why_ms() {
        $data['main'] = 'mission_statement/main_wm';
        $data['nav_value'] = 'mission_statement/left_nav_value';
        $this->load->view('mission_statement/template_ms', $data);
    }

    function mission_statement() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (isset($is_logged_in) && ($is_logged_in == 'true')) {
            $this->load->library('form_validation');
            $this->load->model('link_db_model');
            $data['rows'] = $this->link_db_model->get_mission();
            if ($data['rows']->num_rows() == 0) {
                $data['main'] = 'mission_statement/main_ms';
                $data['nav_value'] = 'mission_statement/left_nav_value';
                $this->load->view('mission_statement/template_ms', $data);
            } else {
                $this->load->model('link_db_model');
                $query = $this->link_db_model->get_mission();
                if ($query->num_rows() > 0) {
                    $row = $query->result();
                    $data['mission_statement'] = $row[0]->mission_statement;
                }
                $data['main'] = 'mission_statement/main_ms_set';
                $data['nav_value'] = 'mission_statement/left_nav_value';
                $this->load->view('mission_statement/template_ms', $data);
            }
        } else {
            $data['main'] = 'mission_statement/main_ms';
            $data['nav_value'] = 'mission_statement/left_nav_value';
            $this->load->view('mission_statement/template_ms', $data);
        }
    }

    function update_ms() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (isset($is_logged_in) && ($is_logged_in == 'true')) {
            $this->load->model('link_db_model');
            $query = $this->link_db_model->get_mission();
            if ($query->num_rows() > 0) {
                $row = $query->result();
                $data['mission_set'] = $row[0]->mission_statement;
                //$this->load->view('mission_statement/template_ms', $data);
            }
            $data['main'] = 'mission_statement/main_ums';
            $data['nav_value'] = 'mission_statement/left_nav_value';
            $this->load->view('mission_statement/template_ms', $data);
        } else {
            $this->load->view('portfolio/page_visitor');
        }
    }

    function portfolio() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (isset($is_logged_in) && ($is_logged_in == 'true')) {
            $this->load->model('link_db_model');
            $query = $this->link_db_model->get_value();
            if ($query->num_rows() == 0) {
                $data['main_portfolio'] = 'portfolio/main_error';
                $data['nav_portfolio'] = 'portfolio/left_nav_mp';
                $this->load->view('portfolio/template_mp', $data);
            } else {
        $query2 = $this->link_db_model->get_value();
        if ($query2->num_rows() > 0) {
            $row2=$query2->result();
            $data['value1']=$row2[0]->value_name;
            $data['value2']=$row2[1]->value_name;
            $data['value3']=$row2[2]->value_name;
            $data['value4']=$row2[3]->value_name;
            //$this->load->view('mission_statement/template_ms', $data);
        }
        else{
            $data['value1']="No value";
            $data['value2']="No value";
            $data['value3']="No value";
            $data['value4']="No value";
        }
                $data['rows2'] = $this->link_db_model->get_coa(); //change to get_goal in future
                if ($data['rows2'] == null) {
                    $data['rows'] = $this->link_db_model->get_motto();
                    $this->load->model('link_db_model');
                    $data['main_portfolio'] = 'portfolio/main_mp';
                    $data['nav_portfolio'] = 'portfolio/left_nav_mp';
                    $this->load->view('portfolio/template_mp', $data);
                } else {
                    $data['main_portfolio'] = 'portfolio/main_do_coa';
                    $data['nav_portfolio'] = 'portfolio/left_nav_mp';
                    $this->load->view('portfolio/template_mp', $data);
                }
            }
        } else {
            $this->load->view('portfolio/page_visitor');
        }
    }

    function portfolio_coa_motto() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (isset($is_logged_in) && ($is_logged_in == 'true')) {
            $this->load->model('link_db_model');
            $data['rows'] = $this->link_db_model->get_mission();

            $data['main_portfolio'] = 'portfolio/main_coa_info';
            $data['nav_portfolio'] = 'portfolio/left_nav_mp';
            $this->load->view('portfolio/template_mp', $data);
      } else {
            $this->load->view('portfolio/page_visitor');
        }
    }

    function portfolio_motto() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (isset($is_logged_in) && ($is_logged_in == 'true')) {
            $this->load->model('link_db_model');
            $data['rows'] = $this->link_db_model->get_motto();
            if ($data['rows']->num_rows() == 0) {
                $data['main_portfolio'] = 'portfolio/main_motto';
                $data['nav_portfolio'] = 'portfolio/left_nav_mp';
                $this->load->view('portfolio/template_mp', $data);
            } else {
                $this->load->model('link_db_model');
                $query = $this->link_db_model->get_motto();
                if ($query->num_rows() > 0) {
                    $row = $query->result();
                    $data['motto'] = $row[0]->motto;
                }
                $data['main_portfolio'] = 'portfolio/main_motto_set';
                $data['nav_portfolio'] = 'portfolio/left_nav_mp';
                $this->load->view('portfolio/template_mp', $data);
            }
        } else {
            $data['main_portfolio'] = 'portfolio/main_motto';
            $data['nav_portfolio'] = 'portfolio/left_nav_mp';
            $this->load->view('portfolio/template_mp', $data);
        }
    }

    function update_motto() {
        $this->load->model('link_db_model');
        $query = $this->link_db_model->get_motto();
        if ($query->num_rows() > 0) {
            $row = $query->result();
            $data['motto_set'] = $row[0]->motto;
            //$this->load->view('mission_statement/template_ms', $data);
        }

        $data['main_portfolio'] = 'portfolio/main_umotto';
        $data['nav_portfolio'] = 'portfolio/left_nav_mp';
        $this->load->view('portfolio/template_mp', $data);
    }

    function portfolio_mission() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (isset($is_logged_in) && ($is_logged_in == 'true')) {
            $this->load->model('link_db_model');
 /*           $query = $this->link_db_model->get_motto();
            if ($query->num_rows() > 0) {
                $row = $query->result();
                $data['motto_set'] = $row[0]->motto;
                //$this->load->view('mission_statement/template_ms', $data);
            } else {
                $data['motto_set'] = "You have not set any motto yet";
            }*/

            $query1 = $this->link_db_model->get_mission();
            if ($query1->num_rows() > 0) {
                $row1 = $query1->result();
                $data['mission_set'] = $row1[0]->mission_statement;
                //$this->load->view('mission_statement/template_ms', $data);
            } else {
                $data['mission_set'] = "You have not set any mission yet";
            }

            $query2 = $this->link_db_model->get_value();
            if ($query2->num_rows() > 0) {
                $row2 = $query2->result();
                $data['value1'] = $row2[0]->value_name;
                $data['value2'] = $row2[1]->value_name;
                $data['value3'] = $row2[2]->value_name;
                $data['value4'] = $row2[3]->value_name;
                //$this->load->view('mission_statement/template_ms', $data);
            } else {
                $data['value1'] = "No value";
                $data['value2'] = "No value";
                $data['value3'] = "No value";
                $data['value4'] = "No value";
            }
            $num_rows = $this->link_db_model->get_portfolio_goal_activity();
            if ($num_rows == null) {
                $data['rows'] = "";
            } else {
                $data['rows'] = $this->link_db_model->get_portfolio_goal_activity();
            }

            $data['main_portfolio'] = 'portfolio/main_portfolio';
            $data['nav_portfolio'] = 'portfolio/left_nav_mp';
            $this->load->view('portfolio/template_mp', $data);
        } else {
            $this->load->view('portfolio/page_visitor');
        }
    }

    function portfolio_goal() {
        $data['main_portfolio'] = 'subpage/see_goal';
        $data['nav_portfolio'] = 'portfolio/left_nav_mp';
        $this->load->view('portfolio/template_mp', $data);
    }

    function portfolio_activity() {
        $this->load->model('link_db_model');
        //$data['rows'] = $this->link_db_model->get_activity();

        $data['main_portfolio'] = 'set_activity/main_al';
        $data['nav_portfolio'] = 'portfolio/left_nav_mp';
        $this->load->view('portfolio/template_mp', $data);
    }

    function portfolio_tracking() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (isset($is_logged_in) && ($is_logged_in == 'true')) {
            parse_str($_SERVER['QUERY_STRING'], $_GET);
            $this->load->model('activity_tracking_model');
            $this->activity_tracking_model->update_activity_status();
            $data['main_portfolio'] = 'set_activity/activity_tracking';
            $data['nav_portfolio'] = 'portfolio/left_nav_mp';
            $this->load->view('portfolio/template_mp', $data);
        } else {
            $this->load->view('portfolio/page_visitor');
        }
    }

    function portfolio_value() {
        $data['main_portfolio'] = 'value/value_determination';
        $data['nav_portfolio'] = 'portfolio/left_nav_mp';
        $this->load->view('portfolio/template_mp', $data);
    }

    function portfolio_resilience() {
        $data['main_portfolio'] = 'portfolio/main_resilience';
        $data['nav_portfolio'] = 'portfolio/left_nav_mp';
        $this->load->view('portfolio/template_mp', $data);
    }

    //End of Robin --- Activity & Portfolio & Mission statement & Coat of Arms

    function portfolio_export_COA() {
        $this->load->model('link_db_model');

        $data = $this->link_db_model->get_value_symbol();
        if ($data != NULL) {
            $row = $data->result();
            $valueSymbol['Symbol1'] = base_url() . $row[0]->value_symbol;
            $valueSymbol['Symbol2'] = base_url() . $row[1]->value_symbol;
            $valueSymbol['Symbol3'] = base_url() . $row[2]->value_symbol;
            $valueSymbol['Symbol4'] = base_url() . $row[3]->value_symbol;

            $data2 = $this->link_db_model->get_coa2();
            $row2 = $data2->result();
            $valueSymbol['Shield1'] = base_url() . $row2[0]->shield;

            $valueSymbol['COAStatus'] = '';
        } else {
            $valueSymbol['COAStatus'] = 'Please choose your value first.<br/><a href="'.  base_url().'index.php/home/determineValue/">Go to Set Value Page</a>';
        }
        //echo    $valueSymbol['Shield1'];

        $this->load->view('portfolio/coa_drawCOA.php', $valueSymbol);
    }

    function portfolio_export_pdf() {
        $this->load->model('link_db_model');

        $query = $this->link_db_model->get_mission();
        if ($query->num_rows() > 0) {
            $row = $query->result();
            $data['mission_set'] = $row[0]->mission_statement;
        } else {
            $data['mission_set'] = "You have not set any mission yet";
        }



        $query2 = $this->link_db_model->get_value();
        if ($query2->num_rows() > 0) {
            $row2 = $query2->result();
            $data['value1'] = $row2[0]->value_name;
            $data['value2'] = $row2[1]->value_name;
            $data['value3'] = $row2[2]->value_name;
            $data['value4'] = $row2[3]->value_name;
        } else {
            $data['value1'] = "No value";
            $data['value2'] = "No value";
            $data['value3'] = "No value";
            $data['value4'] = "No value";
        }

        $achievementData = $this->link_db_model->get_portfolio_goal_activity();
        if ($achievementData == null) {
            $data['AchievementStatus'] = "No goal has been accomplished at this moment";
        } else {
            $data['AchievementStatus'] = '';

            $achieveData = array();
            $data['numberRowsForAchievement'] = $this->link_db_model->get_num_portfolio_goal_activity();

            for ($i = 0; $i < $data['numberRowsForAchievement']; $i++) {
                $achieveData[$i][1][1] = 'Goal Type: ';
                $achieveData[$i][1][2] = $achievementData[$i]->goal_category;
                $achieveData[$i][2][1] = 'Goal Description: ';
                $achieveData[$i][2][2] = $achievementData[$i]->goal_desc;
                $achieveData[$i][3][1] = 'Achievement Criteria: ';
                $achieveData[$i][3][2] = $achievementData[$i]->achievement_criteria;
                $achieveData[$i][4][1] = 'Goal Completion Date: ';
                $achieveData[$i][4][2] = $achievementData[$i]->actual_end_date;
            }

            $data['AchievementRows'] = $achieveData;
        }

        $is_logged_in = $this->session->userdata('is_logged_in');
        if (isset($is_logged_in) && ($is_logged_in == 'true')) {
            $seeker_id = $this->session->userdata('seeker_id');
            $errFound = false;
            $query3 = $this->db->query('SELECT * FROM test_result WHERE seeker_id=' . $seeker_id . ' ORDER BY result_id DESC LIMIT 0, 1');
            $rows3 = $query3->num_rows();
            if ($rows3 > 0) {
                $data3 = $query3->result();

                $PvBscore = $data3[0]->PvB_score;
                $PmBscore = $data3[0]->PmB_score;
                $PsBscore = $data3[0]->PsB_score;
                $PmGscore = $data3[0]->PmG_score;
                $PvGscore = $data3[0]->PvG_score;
                $PsGscore = $data3[0]->PsG_score;

                $Hope = $PvBscore + $PmBscore;
                $BadEvents = $PmBscore + $PvBscore + $PsBscore;
                $GoodEvents = $PmGscore + $PvGscore + $PsGscore;
                $Optimism = $GoodEvents - $BadEvents;



                if ($Hope <= 2) {
                    $h_descriptor1 = " extraordinarily hopeful about life";
                    $h_descriptor2 = "This is a very good sign that you can survive challenging times. You do not give up easily";
                    $h_descriptor3 = "We believe in your potential";
                } else if ($Hope <= 6) {
                    $h_descriptor1 = " moderately hopeful  about life";
                    $h_descriptor2 = "This is a good sign that you can survive challenging times. You do not give up easily";
                    $h_descriptor3 = "We believe in your potential";
                } else if ($Hope <= 8) {
                    $h_descriptor1 = " average in being hopeful about life";
                    $h_descriptor2 = " This is a sign that you can survive challenging times. You do not give up so easily";
                    $h_descriptor3 = "We want YOU to have these special abilities";
                } else if ($Hope <= 11) {
                    $h_descriptor1 = " not so hopeful about life";
                    $h_descriptor2 = "These are signs that you may feel more vulnerable than hopeful people around you when you are dealing with challenging issues. You tend to give up more readily. This is quite worrying";
                    $h_descriptor3 = "We want YOU to have these special abilities";
                } else if ($Hope <= 16) {
                    $h_descriptor1 = " really not hopeful";
                    $h_descriptor2 = "These are signs that you may feel a lot more vulnerable than hopeful people around you when you are dealing with challenging issues. You tend to give up readily. This is really worrying";
                    $h_descriptor3 = "We want YOU to have these special abilities";
                }
                if ($Optimism < 0) {
                    $op_descriptor = " very pessimistic in general.";
                } else if ($Optimism <= 2) {
                    $op_descriptor = " quite pessimistic in general.";
                } else if ($Optimism <= 5) {
                    $op_descriptor = " average in being optimistic in general.";
                } else if ($Optimism <= 8) {
                    $op_descriptor = " moderately optimistic in general.";
                } else {
                    $op_descriptor = " very optimistic in general.";
                }
                if ($GoodEvents <= 10) {
                    $g_descriptor = " is very optimistic";
                } else if ($GoodEvents <= 13) {
                    $g_descriptor = " is moderately optimistic";
                } else if ($GoodEvents <= 16) {
                    $g_descriptor = " average in optimism";
                } else if ($GoodEvents <= 19) {
                    $g_descriptor = " is quite pessimistic";
                } else {
                    $g_descriptor = " is very pessimistic";
                }
                if ($BadEvents <= 6) {
                    $b_descriptor = " marvellously optimistic";
                } else if ($BadEvents <= 9) {
                    $b_descriptor = " is moderately optimistic";
                } else if ($BadEvents <= 11) {
                    $b_descriptor = " is average in optimism";
                } else if ($BadEvents <= 14) {
                    $b_descriptor = " is quite pessimistic";
                } else {
                    $b_descriptor = " is very pessimistic";
                }

                $data['h_descriptor1'] = $h_descriptor1;
                $data['h_descriptor2'] = $h_descriptor2;
                $data['h_descriptor3'] = $h_descriptor3;
                $data['op_descriptor'] = $op_descriptor;
                $data['g_descriptor'] = $g_descriptor;
                $data['b_descriptor'] = $b_descriptor;
                $data['resillentScaleStatus'] = '';
            } else {
                $data['resillentScaleStatus'] = 'You have never completed resilience test yet.';
            }
        }
        $this->load->view('portfolio/main_portfolio_pdf.php', $data);
    }

    function get_session() {
        parse_str($_SERVER['QUERY_STRING'], $_GET);
        $colour = $_GET['colour'];
        $newdata = array(
            'colour' => $colour
        );

        $this->session->set_userdata($newdata);
        $this->load->view('includes/template');
    }

    function email() {

        $this->load->view('email_reminder/email_reminder');
    }

}

?>