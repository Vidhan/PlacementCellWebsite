<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class StudentResumes extends CI_Controller {

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
    public function index($offset = 0) {
        $limit = 20;
        $this -> load -> model('StudentModel');
        $getData = $this -> StudentModel -> getAllStudentData($limit, $offset);
        $data['users'] = $getData['rows'];
        /*$limit = 1;
         $this->load->library('pagination');
         $config = array();
         $config["base_url"] = base_url() . "StudentResumes/index";
         $config["total_rows"] = $getData['num_rows'];
         $config["per_page"] = $limit;
         $config["uri_segment"] = 3;
         $config["full_tag_open"] = "<div class=\"pagination\"><ul>";
         $config['full_tag_close'] = "</ul></div>";
         $config['prev_link'] = '&lt;&lt;';
         $config['prev_tag_open'] = "<li>";
         $config['prev_tag_close'] = "</li>";
         $config['cur_tag_open'] = "<li class=\"active\">";
         $config['cur_tag_close'] = "</li>";
         $config['num_tag_open'] = "<li>";
         $config['num_tag_close'] = "</li>";
         $config['next_link'] = '&gt;&gt;';
         $config['next_tag_open'] = "<li>";
         $config['next_tag_close'] = "</li>";
         $this->pagination->initialize($config);
         */
        $data['programs'] = $this -> StudentModel -> getAllProgramData();
        //$data['pagination'] = $this->pagination->create_links();
        $this -> load -> view('studentresumes', $data);
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

}
