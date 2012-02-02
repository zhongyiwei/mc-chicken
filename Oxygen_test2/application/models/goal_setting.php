<?php

class Goal_setting extends CI_Model {

    function display_goal($id) {
        $this->db->select('*');
        $this->db->from('goal');
        $this->db->where('seeker_goal_id', $id);
        $this->db->join('goal_category', 'goal_category.goal_cat_id=goal.goal_cat_id');
        $query = $this->db->get();

        if ($query->num_rows == 1) {
            $record = $query->result();
        } else {
            $record = null;
        }
        return $record;
    }

    function update_goal() {
        date_default_timezone_set('Asia/Singapore');
        $this->load->helper('date');
        $date = date('Y-m-d');

        if ($this->input->post('process') == 'Completed') {
            $this->db->select('*');
            $this->db->from('goal');
            $this->db->join('activity', 'activity.seeker_goal_id=goal.seeker_goal_id');
            $this->db->where('seeker_id',$this->session->userdata('seeker_id'));
            $this->db->where('goal_cat_id',$this->input->post('goal_cat_id'));
            $query1=  $this->db->get();

            $this->db->select('*');
            $this->db->from('goal');
            $this->db->join('activity', 'activity.seeker_goal_id=goal.seeker_goal_id');
            $this->db->where('seeker_id',$this->session->userdata('seeker_id'));
            $this->db->where('goal_cat_id',$this->input->post('goal_cat_id'));
            $this->db->where('activity_status', 'Completed');
            $query2=  $this->db->get();
            //$query1 = $this->db->get_where('activity', array('seeker_id' => $this->session->userdata('seeker_id'),'goal_cat_id'=>  $this->input->post('goal_cat_id')));
            //$query2 = $this->db->get_where('activity', array('seeker_id' => $this->session->userdata('seeker_id'), 'activity_status' => 'Completed','goal_cat_id'=>  $this->input->post('goal_cat_id')));

            if ($query1->num_rows() == $query2->num_rows()) {
                $data = array(
                    'goal_desc' => $this->input->post('goal_des'),
                    'achievement_criteria' => $this->input->post('achievement'),
                    'goal_completion_status' => $this->input->post('process'),
                    'actual_end_date'=>$date,
                    'target_end_date'=>  $this->input->post('target_end_date')
                );

                $this->db->where('seeker_goal_id', $this->input->post('goal_id'));
                $update_data = $this->db->update('goal', $data);
                return $update_data;
            } else{
                //$this->load->view('subpage/update_goal_error');
                $update_data=null;
                return $update_data;
            }
        }  else {
            $this->db->select('*');
            $this->db->from('goal');
            $this->db->where('seeker_id', $this->session->userdata('seeker_id'));
            $this->db->where('goal_cat_id', $this->input->post('goal_cat_id'));
            $this->db->where('goal_completion_status', 'Active');
            $query3 = $this->db->get();

            if ($query3->num_rows() <= 2) {
                $data = array(
                    'goal_desc' => $this->input->post('goal_des'),
                    'goal_set_date' => $date,
                    'achievement_criteria' => $this->input->post('achievement'),
                    'target_end_date'=>  $this->input->post('target_end_date'),
                    'goal_completion_status' => $this->input->post('process')
                );
                $this->db->where('seeker_goal_id', $this->input->post('goal_id'));
                $update_data = $this->db->update('goal', $data);
                return $update_data;
            }else{
                $this->load->view('subpage/add_goal_error');
            }
        }
    }

    function create_family_goal() {
        date_default_timezone_set('Asia/Singapore');
        $this->load->helper('date');
        $date = date('Y-m-d');

        $new = array(
            'seeker_id' => $this->session->userdata('seeker_id'),
            'goal_cat_id' => '1',
            'goal_desc' => $this->input->post('family'),
            'achievement_criteria' => $this->input->post('family_criteria'),
            'goal_set_date' => $date,
            'target_end_date'=>  $this->input->post('target_date1'),
            'goal_completion_status' => 'Active'
        );

        $insert = $this->db->insert('goal', $new);
        return $insert;
    }

    function create_career_goal() {
        date_default_timezone_set('Asia/Singapore');
        $this->load->helper('date');
        $date = date('Y-m-d');

        $new = array(
            'seeker_id' => $this->session->userdata('seeker_id'),
            'goal_cat_id' => '2',
            'goal_desc' => $this->input->post('career'),
            'achievement_criteria' => $this->input->post('career_criteria'),
            'goal_set_date' => $date,
            'target_end_date'=>  $this->input->post('target_date2'),
            'goal_completion_status' => 'Active'
        );

        $insert = $this->db->insert('goal', $new);
        return $insert;
    }

    function create_education_goal() {
        date_default_timezone_set('Asia/Singapore');
        $this->load->helper('date');
        $date = date('Y-m-d');

        $new = array(
            'seeker_id' => $this->session->userdata('seeker_id'),
            'goal_cat_id' => '3',
            'goal_desc' => $this->input->post('education'),
            'achievement_criteria' => $this->input->post('education_criteria'),
            'goal_set_date' => $date,
            'target_end_date'=>  $this->input->post('target_date3'),
            'goal_completion_status' => 'Active'
        );

        $insert = $this->db->insert('goal', $new);
        return $insert;
    }

    function create_spiritual_goal() {
        date_default_timezone_set('Asia/Singapore');
        $this->load->helper('date');
        $date = date('Y-m-d');

        $new = array(
            'seeker_id' => $this->session->userdata('seeker_id'),
            'goal_cat_id' => '4',
            'goal_desc' => $this->input->post('spiritual'),
            'achievement_criteria' => $this->input->post('spiritual_criteria'),
            'goal_set_date' => $date,
            'target_end_date'=>  $this->input->post('target_date4'),
            'goal_completion_status' => 'Active'
        );

        $insert = $this->db->insert('goal', $new);
        return $insert;
    }

    function create_financial_goal() {
        date_default_timezone_set('Asia/Singapore');
        $this->load->helper('date');
        $date = date('Y-m-d');

        $new = array(
            'seeker_id' => $this->session->userdata('seeker_id'),
            'goal_cat_id' => '5',
            'goal_desc' => $this->input->post('financial'),
            'achievement_criteria' => $this->input->post('financial_criteria'),
            'goal_set_date' => $date,
            'target_end_date'=>  $this->input->post('target_date5'),
            'goal_completion_status' => 'Active'
        );

        $insert = $this->db->insert('goal', $new);
        return $insert;
    }

    function create_social_goal() {
        date_default_timezone_set('Asia/Singapore');
        $this->load->helper('date');
        $date = date('Y-m-d');

        $new = array(
            'seeker_id' => $this->session->userdata('seeker_id'),
            'goal_cat_id' => '6',
            'goal_desc' => $this->input->post('social'),
            'achievement_criteria' => $this->input->post('social_criteria'),
            'goal_set_date' => $date,
            'target_end_date'=>  $this->input->post('target_date6'),
            'goal_completion_status' => 'Active'
        );

        $insert = $this->db->insert('goal', $new);
        return $insert;
    }

    function create_physical_goal() {
        date_default_timezone_set('Asia/Singapore');
        $this->load->helper('date');
        $date = date('Y-m-d');

        $new = array(
            'seeker_id' => $this->session->userdata('seeker_id'),
            'goal_cat_id' => '7',
            'goal_desc' => $this->input->post('physical'),
            'achievement_criteria' => $this->input->post('physical_criteria'),
            'goal_set_date' => $date,
            'target_end_date'=>  $this->input->post('target_date7'),
            'goal_completion_status' => 'Active'
        );

        $insert = $this->db->insert('goal', $new);
        return $insert;
    }

}

?>
