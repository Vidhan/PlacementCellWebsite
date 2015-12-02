<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        $Error["Invalid"] = NULL;
        $this -> session -> sess_destroy();
        $this -> load -> view("login/login", $Error);
    }

    public function ForgotPassword() {
        $this -> load -> view("login/forgotpassword");
    }

    public function SignIn() {
        $Error["Invalid"] = NULL;
        $this -> load -> library("form_validation");
        $this -> form_validation -> set_rules("username", "Student ID", "required|trim|numeric|max_length[11]|xss_clean");
        $this -> form_validation -> set_rules("password", "Password", "required|trim|max_length[11]|xss_clean");
        if ($this -> form_validation -> run() == FALSE) {
            $this -> load -> view("login/login", $Error);
        } else {
            $this -> load -> model("loginModel");
            $res = $this -> loginModel -> SignIn();
            if ($res == 1) {
                if ($this -> session -> userdata('roleid') == 1) {
                    redirect(base_url() . "Student");
                } else if ($this -> session -> userdata('roleid') == 2) {
                    redirect(base_url() . "Admin");
                } else {
                    $this -> session -> sess_destroy();
                    redirect(base_url() . "Login");
                }
            } else if ($res == -1) {
                $Error["Invalid"] = "Incorrect Username or password";
                $this -> load -> view("login/login", $Error);
            } else {
                redirect(base_url() . "Register/ResendActivationCode/" . $_POST['username']);
            }
        }
    }

}
?>