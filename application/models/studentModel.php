<?php
class StudentModel extends CI_Model {
    public function ProfileData($StudentID = NULL) {
        if ($StudentID == NULL) {
            $this -> db -> where("studentid", $this -> session -> userdata('studentid'));
        } else {
            $this -> db -> where("studentid", $StudentID);
        }
        $queryData = $this -> db -> get("student");
        if ($queryData -> num_rows == 1) {
            $row = $queryData -> row();
            $rawpath = explode('/', $row -> StudentResumePath);
            $path = end($rawpath);
            $domain = explode(',', $row -> StudentDomainChoice);
            $data = array("firstname" => $row -> StudentFirstName, "middlename" => $row -> StudentMiddleName, "lastname" => $row -> StudentLastName, "cpi" => $row -> StudentCPI, "DOB" => $row -> StudentDOB, "Gender" => $row -> StudentSex == 1 ? "Male" : "Female", "SSC" => $row -> StudentSSCPercentage, "HSC" => $row -> StudentHSCPercentage, "Graduation" => $row -> StudentGraduationPercentage, "CurrentBackLogs" => $row -> StudentCurrentBacklogs, "TotalBackLogs" => $row -> StudentTotalBacklogs, "TechnicalElectives" => $row -> StudentTechnicalElectives, "Domain" => $row -> StudentDomainChoice, "MobileNumber" => $row -> StudentMobileNumber, "AlternateMobileNumber" => $row -> StudentAlternateMobileNumber, "AddressLine1" => $row -> StudentAddressLine1, "AddressLine2" => $row -> StudentAddressLine2, "City" => $row -> StudentCity, "State" => $row -> StudentState, "PostalCode" => $row -> StudentPostalCode, "GuardianName" => $row -> StudentGuardianName, "GuardianMobileNumber" => $row -> StudentGuardianMobileNumber, "username" => $row -> StudentId, "IsInterested" => $row -> StudentIsInterested == 1 ? "Yes" : "No", "resumepath" => $path);
            return $data;
        }
    }

    public function GetResumePath($StudentId = NULL) {
        $this -> db -> where('StudentId', $StudentId);
        $query = $this -> db -> get('student');
        $path = $query -> row();
        return $path -> StudentResumePath;
    }

    public function DeleteStudent($StudentId = NULL) {
        if ($StudentId == NULL) {
            return false;
        } else {
            $this -> db -> where('StudentId', $StudentId);
            $data = array('StudentIsDeleted' => 1);
            return $this -> db -> update('student', $data);
        }
    }

    public function getAllStudentData($limit, $offset) {
        $data = array();
        $data['rows'] = $this -> db -> order_by('StudentId', 'ASC') -> get('student') -> result();
        //$data['rows'] = $this->db->order_by('StudentId','ASC')->limit($limit, $offset)->get('student')->result();
        $data['num_rows'] = $this -> db -> count_all_results('student');
        ;
        return $data;
    }

    public function getAllProgramData() {
        $this -> db -> from('program');
        return $this -> db -> get() -> result();
    }

    public function ProfileUpdate($StudentId = NULL) {
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
        $now = date("Y-m-d H:i:s");
        $config = array('allowed_types' => 'pdf', 'max_size' => 2048);
        if ($StudentId == NULL) {
            $this -> db -> select('StudentResumePath') -> where('StudentId', $this -> session -> userdata['studentid']);
            $config['upload_path'] = $_SERVER['DOCUMENT_ROOT'] . "SPC/resumes/" . $this -> session -> userdata['studentid'];
        } else {
            $this -> db -> select('StudentResumePath') -> where('StudentId', $StudentId);
            $config['upload_path'] = $_SERVER['DOCUMENT_ROOT'] . "SPC/resumes/" . $StudentId;
        }
        $hasResume = FALSE;
        if (!empty($_FILES['userfile']['name'])) {
            $hasResume = TRUE;
            $this -> load -> library('upload', $config);
        }
        $insertdata = array('StudentFirstName' => $_POST['firstName'], 'StudentMiddleName' => $_POST['middleName'], 'StudentLastName' => $_POST['lastName'], 'StudentEditedDateAndTime' => $now, 'StudentEditorId' => $this -> session -> userdata('studentid'), 'StudentCPI' => $_POST['CPI'], 'StudentDOB' => date("Y-m-d", strtotime($_POST['DOB'])), 'StudentSex' => $_POST['Gender'], 'StudentSSCPercentage' => $_POST['10th'], 'StudentHSCPercentage' => $_POST['12th'], 'StudentGraduationPercentage' => $_POST['Graduation'], 'StudentCurrentBacklogs' => $_POST['CurrentBackLogs'], 'StudentTotalBacklogs' => $_POST['TotalBackLogs'], 'StudentTechnicalElectives' => $_POST['TechnicalElectives'], 'StudentDomainChoice' => $Domain, 'StudentMobileNumber' => $_POST['MobileNumber'], 'StudentAlternateMobileNumber' => $_POST['AlternateMobileNumber1'], 'StudentAddressLine1' => $_POST['AddressLine1'], 'StudentAddressLine2' => $_POST['AddressLine2'], 'StudentCity' => $_POST['City'], 'StudentState' => $_POST['State'], 'StudentPostalCode' => $_POST['PostalCode'], 'StudentIsInterested' => $_POST['IsInterested'], 'StudentGuardianName' => $_POST['GuardianName'], 'StudentGuardianMobileNumber' => $_POST['GuardianMobileNumber']);
        if (!is_dir($_SERVER['DOCUMENT_ROOT'] . "SPC/resumes/" . $this -> session -> userdata['studentid'])) {
            mkdir($_SERVER['DOCUMENT_ROOT'] . "SPC/resumes/" . $this -> session -> userdata['studentid'], 0, true);
        }
        if ($hasResume) {
            if ($StudentId == NULL) {
                $this -> db -> select('StudentResumePath') -> where('StudentID', $this -> session -> userdata['studentid']);
            } else {
                $this -> db -> select('StudentResumePath') -> where('StudentID', $StudentId);
            }
            $data = $this -> db -> get('Student');
            $rows = $data -> row();
            if ($this -> upload -> do_upload()) {
                $data = $this -> upload -> data();
                $insertdata['StudentResumePath'] = $_SERVER['DOCUMENT_ROOT'] . "SPC/resumes/" . $this -> session -> userdata('studentid') . '/' . $data['raw_name'] . $data['file_ext'];

                unlink($rows -> StudentResumePath);

                if ($StudentId == NULL) {
                    $this -> db -> where('StudentId', $this -> session -> userdata['studentid']);
                } else {
                    $this -> db -> where('StudentId', $StudentId);
                }
                if ($this -> db -> update('student', $insertdata)) {
                    return 1;
                } else {
                    return -1;
                }
            } else {
                $Error = array("upload" => $this -> upload -> display_errors());
                return $Error;
            }
        } else {
            if ($StudentId == NULL) {
                $this -> db -> where('StudentId', $this -> session -> userdata['studentid']);
            } else {
                $this -> db -> where('StudentId', $StudentId);
            }
            if ($this -> db -> update('student', $insertdata)) {
                $data = array('RegistrationProcess' => TRUE);
                $this -> session -> set_userdata($data);
                return 1;
            } else {
                return -1;
            }
        }
    }

}
?>