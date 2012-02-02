<?php

class Membership_model extends CI_Model {

    function validate() {
        $this->db->where('email', $this->input->post('email'));
        $this->db->where('password', sha1($this->input->post('password')));

        $query = $this->db->get('seeker');

        if ($query->num_rows == 1) {
            $record = $query->result();
        } else {
            $record = null;
        }
        return $record;
    }

    function create_member() {
        $this->db->select('email');
        $this->db->from('seeker');
        $this->db->where('email', $this->input->post('email'));
        $query = $this->db->get();

        if ($query->num_rows == 0) {
            $new = array(
                'email' => $this->input->post('email'),
                'name' => $this->input->post('name'),
                'gender' => $this->input->post('gender'),
                'date_of_birth' => $this->input->post('date_of_birth'),
                'nationality' => $this->input->post('nationality'),
                'password' => sha1($this->input->post('password')),
                'mobile_number' => $this->input->post('mobile_number'),
                'role' => 'member',
                'referee_name'=>  $this->input->post('referee_name'),
                'referee_email'=>  $this->input->post('referee_email')
            );

            $insert = $this->db->insert('seeker', $new);
        } else {
            $insert = null;
        }
        return $insert;
    }

    function update_member() {
        $this->db->select('email');
        $this->db->from('seeker');
        $this->db->where('email', $this->session->userdata('email'));
        $this->db->where_not_in('seeker_id',$this->session->userdata('seeker_id'));
        
        $query = $this->db->get();

        if ($query->num_rows == 0) {
            $data = array(
                'name' => $this->session->userdata('name'),
                'nationality' => $this->session->userdata('nation'),
                'mobile_number' => $this->session->userdata('mobile'),
                'referee_name'=>$this->session->userdata('referee_name'),
                'referee_email'=>$this->session->userdata('referee_email')
            );
            $this->db->where('seeker_id', $this->session->userdata('seeker_id'));
            $update_info = $this->db->update('seeker', $data);
        }else{
            $update_info=null;
        }
        return $update_info;
    }

    function select_info() {
        $this->db->select('*');
        $this->db->from('seeker');
        $this->db->where('seeker_id', $this->session->userdata('seeker_id'));
        $query = $this->db->get();

        if ($query->num_rows == 1) {
            $record = $query->result();
        } else {
            $record = null;
        }
        return $record;
    }

    function update_password() {
        $this->db->select('password');
        $this->db->from('seeker');
        $this->db->where('seeker_id', $this->session->userdata('seeker_id'));
        $this->db->where('password', sha1($this->input->post('password')));
        $password = $this->db->get();

        if ($password->num_rows == 1) {
            if ($this->input->post('password_new') == $this->input->post('password_new123')) {
                $new = array(
                    'password' => sha1($this->input->post('password_new'))
                );

                $this->db->where('seeker_id', $this->session->userdata('seeker_id'));
                $update_pass = $this->db->update('seeker', $new);
            } else {
                $update_pass = null;
            }
        } else {
            $update_pass = null;
        }
        return $update_pass;
    }

    function reset_password() {

        function createRandomPassword() {
            $chars = "ABCDEFGHJKLMNOPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz023456789";
            $i = 0;
            $pass = '';

            while ($i <= 8) {
                $num = mt_rand(0, 58);
                $tmp = substr($chars, $num, 1);
                $pass = $pass . $tmp;
                $i++;
            }
            return $pass;
        }

        $email = $this->input->post('email');
        $sql = $this->db->query("SELECT name FROM seeker WHERE email = '$email'");
        $data['sql'] = $sql;
        $row = $sql->result();
        if ($sql->num_rows != 0) {
            $password = createRandomPassword();
            $reset_pw = array(
                'password' => sha1($password)
            );
            $this->db->where('email', $email);
            $reset_pass = $this->db->update('seeker', $reset_pw);
            $data['name'] = $row[0]->name;
            $data['password'] = $password;
            $data['result'] = $reset_pass;
            return $data;
        } else {
            return $data;
        }
    }

}

?>
