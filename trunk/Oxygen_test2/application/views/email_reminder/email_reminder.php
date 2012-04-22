<?php

date_default_timezone_set('Asia/Singapore');
function firstOfMonth() {
    return date("Y-m-d", strtotime(date('m').'/01/'.date('Y').' 00:00:00'));
}

function lastOfMonth() {
    return date("Y-m-d", strtotime('-1 second',strtotime('+1 month',strtotime(date('m').'/01/'.date('Y').' 00:00:00'))));
}

$user_query = $this->db->query('SELECT DISTINCT s.seeker_id, s.name, s.email, r.reminder_frequency from activity a, goal g, goal_category c, seeker s, reminder r
WHERE g.goal_cat_id = c.goal_cat_id
AND r.seeker_id = s.seeker_id
AND s.seeker_id = g.seeker_id
AND g.seeker_goal_id = a.seeker_goal_id
AND r.reminder_email = 1
AND r.reminder_frequency != "NULL"
AND a.activity_status != "Completed"
ORDER BY c.goal_category');


$time = date('h:i A');
foreach ($user_query->result() as $row) {

    $id = $row->seeker_id;
    $name = $row->name;
    $to = $row->email;
    $reminder = $row->reminder_frequency;
    $subject = "Oxygen - Reminder";
    $from = "reminder@oxygen.com";
    $headers = "From: $from";
  

    //Daily reminder
  
    if ($reminder=="daily") {
                
            $date = date("Y-m-d");
            $query = $this->db->query('SELECT DISTINCT s.seeker_id, g.goal_completion_status, a.activity_id, a.end_date, a.activity_name, a.activity_status
                                       FROM goal g, goal_category c, seeker s, activity a
                                       WHERE g.goal_cat_id = c.goal_cat_id
                                       AND s.seeker_id = g.seeker_id
                                       AND a.seeker_goal_id = g.seeker_goal_id
                                       AND g.goal_completion_status != "Completed"
                                       AND a.activity_status != "Completed"
                                       AND s.seeker_id = ' . $id . '
                                       ORDER BY c.goal_category');

            if ($query->num_rows != 0) {
                if ($time == "5:24 PM" OR $time == "5:25 PM" OR $time == "5:26 PM" OR $time == "5:27 PM" OR $time == "5:28 PM") {
                    echo $time;
                    $msg = "Hi ".$name.",";
                    $msg .= "\n\nFollowing are the activities that you haven't completed yet: ";
                    foreach ($query->result() as $arr) {
                        //$goal_set_date = $arr->goal_set_date;
                        $msg .= "\n\nActivity Name: ".$arr->activity_name;
                        $msg .= "\n";
                        $msg .= "Status: " . $arr->activity_status;
                        $msg .= "\n";
                        $msg .= "Target End Date: " . $arr->end_date;
                    }

                    $msg .= "\n\nTo update your progress, just click on the link below :";
                    $msg .= "\nhttp://homes.soi.rp.edu.sg/oxygen/index.php/home";
                    $msg .= "\n\n";
                    $msg .= "Oxygen Team";
                    mail($to,$subject,$msg,$headers);

                } //if ($time == "00:00") {
            } //if ($query->num_rows != 0) {

    } //if ($reminder=="daily") {
    // END daily reminder

    //Weekly reminder
    
    else if ($reminder=="weekly") {
           
        if (date('l') == "Monday") {
          
            $date = date("Y-m-d");
            $newdate = strtotime ( '+7 day' , strtotime ( $date ) ) ;
            $newdate = date ( 'Y-m-d' , $newdate );

            $query = $this->db->query('SELECT DISTINCT s.seeker_id, g.goal_completion_status, a.activity_id, a.end_date, a.activity_name, a.activity_status
                                       FROM goal g, goal_category c, seeker s, activity a
                                       WHERE g.goal_cat_id = c.goal_cat_id
                                       AND s.seeker_id = g.seeker_id
                                       AND a.seeker_goal_id = g.seeker_goal_id
                                       AND g.goal_completion_status != "Completed"
                                       AND a.activity_status != "Completed"
                                       AND s.seeker_id = ' . $id . '
                                       ORDER BY c.goal_category');
          
            if ($query->num_rows != 0) {
                if ($time == "01:00 AM") {
                    $msg = "Hi ".$name.",";
                    $msg .= "\n\nFollowing are the activities that you haven't completed yet:";
                    foreach ($query->result() as $arr) {
                        //$goal_set_date = $arr->goal_set_date;
                        $msg .= "\n\nActivity Name: ".$arr->activity_name;
                        $msg .= "\n";
                        $msg .= "Status: " . $arr->activity_status;
                        $msg .= "\n";
                        $msg .= "Target End Date: " . $arr->end_date;
                    }

                    $msg .= "\n\nTo update your progress, just click on the link below :";
                    $msg .= "\nhttp://homes.soi.rp.edu.sg/oxygen/index.php/home";
                    $msg .= "\n\n";
                    $msg .= "Oxygen Team";
                    mail($to,$subject,$msg,$headers);
                    echo "Success";
                } //if ($time == "00:00") {
            } //if ($query->num_rows != 0) {

        } //if (date('l') == "Sunday") {
    } //if ($reminder=="weekly") {
    // END weekly reminder


    //Monthly reminder
    else if ($reminder=="monthly") {
        $date = date("Y-m-d");
        if ($date == firstOfMonth()) {
            
            //$newdate = strtotime ( '+7 day' , strtotime ( $date ) ) ;
            $newdate = lastOfMonth();

            $query = $this->db->query('SELECT DISTINCT s.seeker_id, a.activity_id, a.end_date, a.activity_name, a.activity_status
                                       FROM goal g, goal_category c, seeker s, activity a
                                       WHERE g.goal_cat_id = c.goal_cat_id
                                       AND s.seeker_id = g.seeker_id
                                       AND a.seeker_goal_id = g.seeker_goal_id
                                       AND g.goal_completion_status != "Completed"
                                       AND a.activity_status != "Completed"
                                       AND s.seeker_id = ' . $id . '
                                       ORDER BY c.goal_category');

            if ($query->num_rows != 0) {
                if ($time == "01:00 AM") {
                    
                    $msg = "Hi ".$name.",";
                    $msg .= "\n\nFollowing are the activities that you haven't completed yet: ";
                    foreach ($query->result() as $arr) {
                        //$goal_set_date = $arr->goal_set_date;
                        $msg .= "\n\nActivity Name: ".$arr->activity_name;
                        $msg .= "\n";
                        $msg .= "Status: " . $arr->activity_status;
                        $msg .= "\n";
                        $msg .= "Target End Date: " . $arr->end_date;
                    }

                    $msg .= "\n\nTo update your progress, just click on the link below :";
                    $msg .= "\nhttp://homes.soi.rp.edu.sg/oxygen/index.php/home";
                    $msg .= "\n\n";
                    $msg .= "Oxygen Team";
                    mail($to,$subject,$msg,$headers);
                    
                } //if ($time == "00:00") {
            } //if ($query->num_rows != 0) {

        } //if ($date == firstOfMonth()) {
    } //if ($reminder=="monthly") {
    //END monthly reminder



} //foreach ($user_query->result() as $row) {





?>
