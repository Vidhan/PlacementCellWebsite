<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class CompanyRegister extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $Error["Message"] = NULL;
        $this -> load -> view('companyRegister', $Error);
    }

    public function Registration() {
        $Error["Message"] = NULL;
        $this -> load -> library("form_validation");
        $this -> form_validation -> set_rules("companyName", "Company Name", "required|trim|xss_clean");
        $this -> form_validation -> set_rules("HRName", "HR Name", "required|trim|xss_clean");
        $this -> form_validation -> set_rules("ContactNumber", "Contact Number", "required|trim|xss_clean|is_natural");
        $this -> form_validation -> set_rules("Email", "Email Address", "required|trim|xss_clean|valid_email");
        $this -> form_validation -> set_rules("CTC", "CTC", "required|trim|xss_clean|is_natural");
        $this -> form_validation -> set_rules("Eligibility", "Eligibility", "xss_clean");
        $this -> form_validation -> set_rules("PostalAddress", "PostalAddress", "xss_clean");
        $this -> form_validation -> set_rules("Website", "Website", "xss_clean");
        if ($this -> form_validation -> run() == FALSE) {
            $this -> load -> view("companyregister", $Error);
        } else {
            $this -> load -> model('CompanyRegisterModel');
            $getStatus = $this -> CompanyRegisterModel -> register();
            if ($getStatus) {
                $this -> Success();
            } else {
                $Error['Message'] = "Registration Failed.";
                $this -> load -> view("companyregister", $Error);
            }
        }
    }

    public function Success() {
        if ($this -> session -> userdata('Success') == TRUE) {
            $this -> session -> sess_destroy();
            $this -> load -> view('comapanyregistersuccess');
        } else {
            redirect(base_url());
        }
    }

}
