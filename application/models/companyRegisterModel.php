<?php
class CompanyRegisterModel extends CI_Model {

    public function register() {
        $insertData = Array("CompanyName" => $_POST['companyName'], "HRName" => $_POST['HRName'], "ContactNumber" => $_POST['ContactNumber'], "PostalAddress" => $_POST['PostalAddress'], "EMailAddress" => $_POST['Email'], "WebAddress" => $_POST['Website'], "EligibilityCriteria" => $_POST['Eligibility'], "CTC" => $_POST['CTC'], "Domain" => $_POST['Domain']);
        $emailConfig = Array('mailtype' => 'html');
        $this -> load -> library('email', $emailConfig);
        $this -> email -> from('sharadrsoni@gmail.com', 'Placement website - Comany Registration');
        $this -> email -> to('201212019@daiict.ac.in');
        $this -> email -> subject("Company Registration Details");
        $this -> email -> message('<b>Company Name: </b> ' . $insertData['CompanyName'] . '<br />' . '<b>HR Name: </b>' . $insertData['HRName'] . '<br />' . '<b>Conatct Number: </b>' . $insertData['ContactNumber'] . '<br />' . '<b>Postal Address: </b>' . $insertData['PostalAddress'] . '<br />' . '<b>Email Address: </b>' . $insertData['EMailAddress'] . '<br />' . '<b>Web Address: </b>' . $insertData['WebAddress'] . '<br />' . '<b>Eligibility Criteria: </b>' . $insertData['EligibilityCriteria'] . '<br />' . '<b>CTC: </b>' . $insertData['CTC'] . '<br />' . '<b>Domain: </b>' . $insertData['Domain'] . '<br />');
        if ($this -> email -> send() && $this -> db -> insert('companyregistration', $insertData)) {
            $data = array('Success' => TRUE);
            $this -> session -> set_userdata($data);
            return true;
        } else {
            return false;
        }
    }

}
?>