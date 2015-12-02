<?php
class RegisterModel extends CI_Model {
    public function signup() {
        $count = 1;
        $Domain = "";
        $temp = $this -> input -> post('Domain');
        if (isset($temp)) {
            foreach ($this->input->post('Domain') as $key => $value) {
                if ($count == 1) {
                    $Domain .= $value;
                } else {
                    $Domain .= ", " . $value;
                }
                $count++;
            }
        }
        $Error = NULL;
        $this -> load -> helper('date');
        $now = time();
        $RegistrationKey = md5(uniqid());
        $emailid = $_POST['username'] . '@daiict.ac.in';
        $this -> load -> helper('text');
        $startyearandprogrameid = floor($_POST['username'] / 1000);
        $startyear = floor($startyearandprogrameid / 100);
        $programid = $startyearandprogrameid % 100;
        $this -> db -> where('programId', $programid);
        $programdata = $this -> db -> get('program');
        $config = array('allowed_types' => 'pdf', 'max_size' => 2048, 'upload_path' => $_SERVER['DOCUMENT_ROOT'] . "SPC/resumes/" . $_POST['username']);
        $this -> load -> library('upload', $config);
        if ($programdata -> num_rows == 1) {
            $insertdata = array('StudentFirstName' => $_POST['firstName'], 'StudentMiddleName' => $_POST['middleName'], 'StudentLastName' => $_POST['lastName'], 'StudentId' => $_POST['username'], 'StudentPassword' => md5($_POST['password']), 'StudentEmailAddress' => $emailid, 'StudentIsActivated' => 0, 'RoleId' => 1, 'StudentEditedDateAndTime' => unix_to_human($now), 'StudentEditorId' => $_POST['username'], 'StudentRegistrationKey' => $RegistrationKey, 'ProgramStartYear' => $startyear, 'ProgramId' => $programid, 'StudentCPI' => $_POST['CPI'], 'StudentDOB' => date("Y-m-d", strtotime($_POST['DOB'])), 'StudentSex' => $_POST['Gender'], 'StudentSSCPercentage' => $_POST['10th'], 'StudentHSCPercentage' => $_POST['12th'], 'StudentGraduationPercentage' => $_POST['Graduation'], 'StudentCurrentBacklogs' => $_POST['CurrentBackLogs'], 'StudentTotalBacklogs' => $_POST['TotalBackLogs'], 'StudentTechnicalElectives' => $_POST['TechnicalElectives'], 'StudentDomainChoice' => $Domain, 'StudentMobileNumber' => $_POST['MobileNumber'], 'StudentAlternateMobileNumber' => $_POST['AlternateMobileNumber1'], 'StudentAddressLine1' => $_POST['AddressLine1'], 'StudentAddressLine2' => $_POST['AddressLine2'], 'StudentCity' => $_POST['City'], 'StudentState' => $_POST['State'], 'StudentPostalCode' => $_POST['PostalCode'], 'StudentGuardianName' => $_POST['GuardianName'], 'StudentGuardianMobileNumber' => $_POST['GuardianMobileNumber'], 'StudentIsInterested' => $_POST['IsInterested']
            //'StudentResumePath' => $_SERVER['DOCUMENT_ROOT']."resumes/".$_POST['username']. '/'.$_FILES['userfile']['name']
            );
            if (!is_dir($_SERVER['DOCUMENT_ROOT'] . "SPC/resumes/" . $_POST['username'])) {
                mkdir($_SERVER['DOCUMENT_ROOT'] . "SPC/resumes/" . $_POST['username'], 0, true);
            }

            if ($this -> upload -> do_upload()) {
                $data = $this -> upload -> data();
                $insertdata['StudentResumePath'] = $_SERVER['DOCUMENT_ROOT'] . "resumes/" . $_POST['username'] . '/' . $data['raw_name'] . $data['file_ext'];
                $emailConfig = Array('mailtype' => 'html');
                $this -> load -> library('email', $emailConfig);
                $this -> email -> from('sharadrsoni@gmail.com', 'Student Placement Cell');
                $this -> email -> to($emailid);
                $this -> email -> subject("Thanks for Registration.");
                $this -> email -> message("Please click on the below link to activate the account.<br /><a href = '" . base_url() . "register/activate/{$RegistrationKey}'>Activate Account.</a>");
                if ($this -> email -> send() && $this -> db -> insert('student', $insertdata)) {
                    $data = array('RegistrationProcess' => TRUE);
                    $this -> session -> set_userdata($data);
                    return 1;
                } else {
                    return -1;
                }
            } else {
                $Error = array("upload" => $this -> upload -> display_errors());
                return $Error;
            }
        } else {
            $Error = array("studentid" => "Invalid Student ID.");
            return $Error;
        }
    }

    public function activateAccount($RegistrationKey) {
        $this -> db -> where('StudentRegistrationKey', $RegistrationKey);
        $getResult = $this -> db -> get('student');
        if ($getResult -> num_rows == 1) {
            $row = $getResult -> row();
            $row -> StudentIsActivated = 1;
            $this -> db -> where('StudentRegistrationKey', $row -> StudentRegistrationKey);
            if ($this -> db -> update('student', $row)) {
                $data = array('ActivationProcess' => TRUE);
                $this -> session -> set_userdata($data);
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    public function CheckIsActivated($studentid) {
        $this -> db -> where('StudentId', $studentid);
        $queryData = $this -> db -> get("student");
        if ($queryData -> num_rows == 1) {
            $row = $queryData -> row();
            if ($row -> StudentIsActivated == 1) {
                return 1;
            } else {
                return -1;
            }
        } else {
            return -2;
        }
    }

    public function resendregistrationkey($EmailId) {
        $this -> load -> library('email', array('mailtype' => 'html'));
        $this -> email -> from('whizvids@gmail.com', 'Student Placement Cell');
        $this -> email -> to($EmailId . '@daiict.ac.in');
        $this -> email -> subject("Thanks for Registration.");
        $this -> db -> where('studentid', $EmailId);
        $getData = $this -> db -> get('student');
        $RegistrationKey = NULL;
        if ($getData -> num_rows == 1) {
            $row = $getData -> row();
            $RegistrationKey = $row -> StudentRegistrationKey;
        }
        $this -> email -> message("Please click on the below link to activate the account.<br /><a href = '" . base_url() . "register/activate/{$RegistrationKey}'>Activate Account.</a>");
        if ($this -> email -> send()) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
?>