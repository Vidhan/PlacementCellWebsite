<?php
class LoginModel extends CI_Model {
    public function SignIn() {
        $this -> db -> where("studentid", $_POST['username']);
        $this -> db -> where("studentpassword", md5($_POST['password']));
        $queryData = $this -> db -> get("student");
        if ($queryData -> num_rows == 1) {
            $row = $queryData -> row();
            if ($row -> StudentIsActivated == 1) {
                $data = array("studentid" => $row -> StudentId, "roleid" => $row -> RoleId, "isLoggedIn" => TRUE, "studentname" => $row -> StudentFirstName . " " . $row -> StudentLastName);
                $this -> session -> set_userdata($data);
                return 1;
            } else {
                return "Email Not Verified.";
            }
        } else {
            return -1;
        }
    }

}
?>