<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Student extends CI_Controller {
    public function index() {
        if ($this -> session -> userdata('isLoggedIn') && $this -> session -> userdata('roleid') == 1) {
            $this -> load -> model("StudentModel");
            $profiledata = $this -> StudentModel -> ProfileData();
            $this -> load -> view("login/student/profileHome", $profiledata);
        } else {
            redirect(base_url() . "login");
        }
    }

    public function Logout() {
        $this -> session -> sess_destroy();
        redirect(base_url());
    }

    public function ProfileEdit() {
        $this -> load -> model('StudentModel');
        $profiledata = $this -> StudentModel -> ProfileData();
        $tempDomain = $profiledata['Domain'];
        $Domain = explode(",", $tempDomain);
        $profiledata['Domain'] = $Domain;
        $this -> load -> view('login/student/profileEdit', $profiledata);
    }

    public function UpdateProfile() {
        $this -> load -> model('StudentModel');
        $profiledata = $this -> StudentModel -> ProfileData($this -> session -> userdata('studentid'));
        $tempDomain = $profiledata['Domain'];
        $Domain = explode(",", $tempDomain);
        $profiledata['Domain'] = $Domain;
        $this -> load -> library("form_validation");
        $this -> form_validation -> set_rules("firstName", "First Name", "required|trim|xss_clean|max_length[25]");
        $this -> form_validation -> set_rules("middleName", "Middle Name", "trim|max_length[25]|xss_clean");
        $this -> form_validation -> set_rules("lastName", "Last Name", "required|trim|max_length[25]|xss_clean");
        $this -> form_validation -> set_rules("CPI", "CPI", "required|less_than[10]|greater_than[0]|numeric");
        $this -> form_validation -> set_rules("TotalBackLogs", "Number of To", "xss_clean|numeric|greater_than[0]|less_than[10]|is_natural");
        $this -> form_validation -> set_rules("DOB", "DOB", "required|trim|xss_clean|callback_checkingDate");
        $this -> form_validation -> set_rules("10th", "10th Percentage", "required|trim|numeric|greater_than[0]|less_than[100]|xss_clean");
        $this -> form_validation -> set_rules("12th", "12th Percentage", "required|trim|numeric|greater_than[0]|less_than[100]|xss_clean");
        $this -> form_validation -> set_rules("Graduation", "Graduation Percentage", "required|trim|numeric|greater_than[0]|less_than[100]|xss_clean");
        $this -> form_validation -> set_rules("CurrentBackLogs", "Current Backlogs", "required|trim|numeric|xss_clean|is_natural");
        $this -> form_validation -> set_rules("TotalBackLogs", "Total Backlogs", "required|trim|numeric|xss_clean|is_natural");
        $this -> form_validation -> set_rules("TechnicalElectives", "Technical Electives", "trim|xss_clean|numreric");
        $this -> form_validation -> set_rules("MobileNumber", "Mobile Number", "required|trim|numeric|xss_clean|exact_length[10]|is_natural|is_natural");
        $this -> form_validation -> set_rules("AlternateMobileNumber1", "Alternate Mobile", "trim|xss_clean|numeric|exact_length[10]|is_natural");
        $this -> form_validation -> set_rules("AddressLine1", "Address", "required|trim|xss_clean");
        $this -> form_validation -> set_rules("AddressLine2", "Address", "trim|xss_clean");
        $this -> form_validation -> set_rules("City", "City", "trim|xss_clean|required");
        $this -> form_validation -> set_rules("State", "State", "trim|xss_clean|required");
        $this -> form_validation -> set_rules("PostalCode", "Postal Code", "trim|xss_clean|required|is_natural|exact_length[6]|is_natural");
        $this -> form_validation -> set_rules("GuardianName", "Guardian Name", "trim|xss_clean|required|max_length[25]");
        $this -> form_validation -> set_rules("GuardianMobileNumber", "Guardian Mobile Number", "trim|numeric|xss_clean|required|exact_length[10]|is_natural");
        $this -> form_validation -> set_rules("Domain[]", "Domain", "required");
        if ($this -> form_validation -> run() == FALSE) {
            $this -> load -> view("Login/Student/ProfileEdit", $profiledata);
        } else {
            $this -> load -> model('StudentModel');
            $getStatus = $this -> StudentModel -> ProfileUpdate($this -> session -> userdata('studentid'));
            if ($getStatus == 1) {
                redirect(base_url() . "Student");
            } else if ($getStatus == -1) {
                $profiledata["Message"] = "Updation Failed.";
                $this -> load -> view("Login/Student/ProfileEdit", $profiledata);
            } else {
                if (isset($getStatus['upload'])) {
                    $profiledata['upload'] = $getStatus['upload'];
                }
                $this -> load -> view("Login/Student/ProfileEdit", $profiledata);
            }
        }
    }

    public function checkingDate($date) {
        $test_date = explode('-', $date);
        if (count($test_date) == 3) {
            if (is_numeric($test_date[0]) && is_numeric($test_date[1]) && is_numeric($test_date[2])) {
                if (!checkdate($test_date[1], $test_date[0], $test_date[2])) {
                    $this -> form_validation -> set_message('checkingDate', 'The given date is invalid');
                    return false;
                } else {
                    return true;
                }
            } else {
                $this -> form_validation -> set_message('checkingDate', 'The given date is invalid');
                return false;
            }
        } else {
            $this -> form_validation -> set_message('checkingDate', 'The given date is invalid');
            return false;
        }
    }

}
