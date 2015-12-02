<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register extends CI_Controller {

    public function index() {
        $Error["Message"] = NULL;
        $this -> session -> sess_destroy();
        $this -> load -> view("register/register", $Error);
    }

    public function RegisterUser() {
        $Error["Message"] = NULL;
        $this -> load -> library("form_validation");
        $this -> form_validation -> set_rules("firstName", "First Name", "required|trim|xss_clean|max_length[25]");
        $this -> form_validation -> set_rules("middleName", "Middle Name", "trim|max_length[25]|xss_clean");
        $this -> form_validation -> set_rules("lastName", "Last Name", "required|trim|max_length[25]|xss_clean");
        $this -> form_validation -> set_rules("username", "Username", "required|trim|numeric|min_length[9]|max_length[9]|xss_clean|is_unique[student.StudentId]");
        $this -> form_validation -> set_rules("password", "Password", "required|trim|min_length[6]|max_length[11]|xss_clean");
        $this -> form_validation -> set_rules("repeatpassword", "Confirm Password", "required|trim|min_length[6]|max_length[11]|xss_clean|matches[password]");
        $this -> form_validation -> set_rules("CPI", "CPI", "required|trim|Current Backlogs", "required|trim|numeric|xss_clean|is_natural");
        $this -> form_validation -> set_rules("TotalBackLogs", "Total Backlogs", "xss_clean|numeric| greater_than[0]|less_than[10]|is_natural");
        $this -> form_validation -> set_rules("DOB", "Date of Birth", "required|trim|xss_clean|callback_checkingDate");
        $this -> form_validation -> set_rules("10th", "10th Percentage", "required|trim|numeric|greater_than[0]|less_than[100]|xss_clean");
        $this -> form_validation -> set_rules("12th", "12th Percentage", "required|trim|numeric|greater_than[0]|less_than[100]|xss_clean");
        $this -> form_validation -> set_rules("Graduation", "Graduation Percentage", "trim|numeric|greater_than[0]|less_than[100]|xss_clean");
        $this -> form_validation -> set_rules("CurrentBackLogs", "Current Backlogs", "required|trim|numeric|xss_clean|is_natural");
        $this -> form_validation -> set_rules("TotalBackLogs", "Total Backlogs", "required|trim|numeric|xss_clean|is_natural");
        $this -> form_validation -> set_rules("TechnicalElectives", "Technical Electives", "trim|xss_clean|numreric");
        $this -> form_validation -> set_rules("MobileNumber", "Mobile Number", "required|trim|numeric|xss_clean|exact_length[10]|is_natural|is_natural");
        $this -> form_validation -> set_rules("AlternateMobileNumber1", "Alternate Mobile", "trim|xss_clean|numeric|exact_length[10]|is_natural");
        $this -> form_validation -> set_rules("AddressLine1", "Address Line 1", "required|trim|xss_clean");
        $this -> form_validation -> set_rules("AddressLine2", "Address Line 2", "trim|xss_clean");
        $this -> form_validation -> set_rules("City", "City", "trim|xss_clean|required");
        $this -> form_validation -> set_rules("State", "State", "trim|xss_clean|required");
        $this -> form_validation -> set_rules("PostalCode", "Postal Code", "trim|xss_clean|required|is_natural|exact_length[6]|is_natural");
        $this -> form_validation -> set_rules("GuardianName", "Guardian Name", "trim|xss_clean|required|max_length[25]");
        $this -> form_validation -> set_rules("GuardianMobileNumber", "Guardian Mobile Number", "trim|numeric|xss_clean|required|exact_length[10]|is_natural");
        $this -> form_validation -> set_rules("Domain[]", "Domain", "required");

        if ($this -> form_validation -> run() == FALSE) {
            $this -> load -> view("register/register", $Error);
        } else {
            $this -> load -> model('registerModel');
            $getStatus = $this -> registerModel -> signup();
            if ($getStatus == 1) {
                $this -> activatemessage();
            } else if ($getStatus == -1) {
                $Error["Message"] = "Registration Unsucessfull.";
                $this -> load -> view("register/register", $Error);
            } else {
                if (isset($getStatus['upload'])) {
                    $Error['upload'] = $getStatus['upload'];
                } else {
                    $Error['studentid'] = $getStatus['studentid'];
                }
                $this -> load -> view("register/register", $Error);
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

    public function Activate($RegistrationKey = -1) {
        $this -> load -> model('registerModel');
        if ($this -> registerModel -> activateAccount($RegistrationKey)) {
            $this -> congratulation();
        } else {
            $data = array('InvalidKeyProcess' => TRUE);
            $this -> session -> set_userdata($data);
            $this -> invalid();
        }
    }

    public function ResendActivationCode($EmailId) {
        $this -> load -> model('registerModel');
        $getResult = $this -> registerModel -> CheckIsActivated($EmailId);
        if ($getResult == 1) {
            $this -> Congratulation();
        } else if ($getResult == -1) {
            $data['EmailId'] = $EmailId;
            $this -> load -> view('register/resendemail', $data);
        } else if ($getResult == -2) {
            redirect(base_url() . "Login");
        }
    }

    public function ResendEmail($EmailId) {
        $this -> load -> model('registerModel');
        $getResult = $this -> registerModel -> CheckIsActivated($EmailId);
        if ($getResult == 1) {
            $this -> Congratulation();
        } else if ($getResult == -1) {
            $this -> load -> model("registerModel");
            if ($this -> registerModel -> resendregistrationkey($EmailId)) {
                $this -> activatemessage();
            } else {
                $this -> session -> sess_destroy();
                redirect(base_url() . "login");
            }
        } else if ($getResult == -2) {
            redirect(base_url() . "Login");
        }
    }

    public function ActivateMessage() {
        if ($this -> session -> userdata('RegistrationProcess') == TRUE) {
            $this -> session -> sess_destroy();
            $this -> load -> view('register/activate');

        } else {
            redirect(base_url() . "Login");
        }
    }

    public function Congratulation() {
        if ($this -> session -> userdata('ActivationProcess') == TRUE) {
            $this -> session -> sess_destroy();
            $this -> load -> view('register/congratulation');
        } else {
            redirect(base_url() . "Login");
        }

    }

    public function Invalid() {
        if ($this -> session -> userdata('InvalidKeyProcess') == TRUE) {
            $this -> session -> sess_destroy();
            $this -> load -> view('register/invalidkey');

        } else {
            redirect(base_url() . "Login");
        }
    }

}
?>