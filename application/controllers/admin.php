<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index($sortby = 'StudentId', $sortorder = 'Asc', $offset = 0) {
        if ($this -> session -> userdata('isLoggedIn') && $this -> session -> userdata('roleid') == 2) {
            if ($this -> session -> userdata('isLoggedIn') && $this -> session -> userdata('roleid') == 2) {
                $limit = 20;
                $this -> load -> model('AdminModel');
                if (!isset($_POST['submit'])) {
                    $getData = $this -> AdminModel -> defaultsearch($limit, $offset, $sortby, $sortorder);
                } else {
                    $this -> load -> library('form_validation');
                    $this -> form_validation -> set_rules("CPI", "CPI", "trim|numeric");
                    if ($this -> form_validation -> run() == FALSE) {
                        $this -> load -> view("Login/Admin/index");
                    } else {
                        $data = array('ProgramID' => $_POST['Program'], 'Comparision' => $_POST['Comparision'], 'CPI' => $_POST['CPI']);
                        $getData = $this -> AdminModel -> search($data, $limit, $offset, $sortby, $sortorder);
                    }
                }
                $data['users'] = $getData['rows'];
                $data['programs'] = $getData['programs'];
                $data['sortby'] = $sortby;
                $data['sortorder'] = $sortorder;
                /*$this->load->library('pagination');
                 $config = array();
                 $config['base_url'] = site_url('admin/userlist');
                 $config['total_rows'] =
                 $data['pagination'] = $this->pagination->create_links();*/
                $this -> load -> view("Login/Admin/index", $data);
            } else {
                $this -> session -> sess_destroy();
                redirect(base_url() . "Login");
            }
        } else {
            $this -> session -> sess_destroy();
            redirect(base_url() . "Login");
        }
    }

    public function UserList($sortby = 'StudentId', $sortorder = 'Asc', $offset = 0) {
        if ($this -> session -> userdata('isLoggedIn') && $this -> session -> userdata('roleid') == 2) {
            $limit = 20;
            $this -> load -> model('AdminModel');
            if (!isset($_POST['submit'])) {
                $getData = $this -> AdminModel -> defaultsearch($limit, $offset, $sortby, $sortorder);
            } else {
                $this -> load -> library('form_validation');
                $this -> form_validation -> set_rules("CPI", "CPI", "trim|numeric");
                if ($this -> form_validation -> run() == FALSE) {
                    $this -> load -> view("login/admin/userlist");
                } else {
                    $data = array('ProgramID' => $_POST['Program'], 'Comparision' => $_POST['Comparision'], 'CPI' => $_POST['CPI']);
                    $getData = $this -> AdminModel -> search($data, $limit, $offset, $sortby, $sortorder);
                }
            }
            $data['users'] = $getData['rows'];
            $data['programs'] = $getData['programs'];
            $data['sortby'] = $sortby;
            $data['sortorder'] = $sortorder;
            /*$this->load->library('pagination');
             $config = array();
             $config['base_url'] = site_url('admin/userlist');
             $config['total_rows'] =
             $data['pagination'] = $this->pagination->create_links();*/
            $this -> load -> view("login/admin/userlist", $data);
        } else {
            $this -> session -> sess_destroy();
            redirect(base_url() . "Login");
        }
    }

    public function ResumeDownload($StudentId = NULL) {
        $this -> load -> model('StudentModel');
        $ResumePath = $this -> StudentModel -> getResumePath($StudentId);
        $getFile = explode("/", $ResumePath);
        $name = end($getFile);
        $this -> load -> helper('download');
        $data = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "SPC/resumes/" . $StudentId . "/" . $name);
        // Read the file's contents
        force_download($name, $data);
    }

    public function DeleteStudent($StudentId = NULL) {
        $this -> load -> model('StudentModel');
        if (!$this -> StudentModel -> DeleteStudent($StudentId)) {
            $this -> session -> set_flashdata("Delete", "Delete Unsuccessful");
        }
        redirect(base_url() . "Admin");
    }

    public function View($StudentId = NULL) {
        $this -> load -> model('StudentModel');
        $profiledata = $this -> StudentModel -> ProfileData($StudentId);
        $profiledata['SID'] = $StudentId;
        $this -> load -> view("Login/Admin/StudentView", $profiledata);
    }

    public function EditStudent($StudentId = NULL) {
        $this -> load -> model('StudentModel');
        $profiledata = $this -> StudentModel -> ProfileData($StudentId);
        $profiledata['SID'] = $StudentId;
        $this -> load -> view("Login/Admin/StudentEdit", $profiledata);
    }

    public function UpdateStudent($StudentId = NULL) {
        $this -> load -> model('StudentModel');
        $profiledata = $this -> StudentModel -> ProfileData($StudentId);
        $tempDomain = $profiledata['Domain'];
        $Domain = explode(",", $tempDomain);
        $profiledata['Domain'] = $Domain;
        $profiledata['SID'] = $StudentId;
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
            $this -> load -> view("Login/Admin/StudentEdit", $profiledata);
        } else {
            $this -> load -> model('StudentModel');
            $getStatus = $this -> StudentModel -> ProfileUpdate($StudentId);
            if ($getStatus == 1) {
                redirect(base_url() . "Admin");
            } else if ($getStatus == -1) {
                $profiledata["Message"] = "Updation Failed.";
                $this -> load -> view("Login/Admin/StudentEdit", $profiledata);
            } else {
                if (isset($getStatus['upload'])) {
                    $profiledata['upload'] = $getStatus['upload'];
                }
                $this -> load -> view("Login/Admin/StudentEdit", $profiledata);
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

    public function Logout() {
        $this -> session -> sess_destroy();
        redirect(base_url());
    }

}
