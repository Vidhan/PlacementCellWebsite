<?php
class AdminModel extends CI_Model {
    public function search($data, $limit, $offset, $sortby, $sortorder) {
        $sortorder = $sortorder == 'desc' ? 'desc' : 'asc';
        $sortcolumn = array('StudentId', 'StudentName', 'StudentCPI', 'StudentIsApproved');
        $sortby = in_array($sortby, $sortcolumn) ? $sortby : 'StudentId';
        if ($data['ProgramID'] == 'All' && $data['CPI'] == NULL) {
            $this -> db -> where('StudentIsActivated', 1);
            $this -> db -> order_by($sortby, $sortorder);
            $this -> db -> limit($limit, $offset);
        } else if ($data['ProgramID'] == 'All' && $data['CPI'] != NULL) {
            $this -> db -> where('StudentIsActivated', 1);
            $temp = "StudentCPI " . $data['Comparision'];
            $this -> db -> where($temp, $data['CPI']);
            $this -> db -> order_by($sortby, $sortorder);
            $this -> db -> limit($limit, $offset);
        } else if ($data['ProgramID'] != 'All' && $data['CPI'] == NULL) {
            $this -> db -> where('student.ProgramID', $data['ProgramID']);
            $this -> db -> where('StudentIsActivated', 1);
            $this -> db -> order_by($sortby, $sortorder);
            $this -> db -> limit($limit, $offset);
        } else {
            $this -> db -> where('student.ProgramID', $data['ProgramID']);
            $this -> db -> where('StudentIsActivated', 1);
            $temp = "StudentCPI " . $data['Comparision'];
            $this -> db -> where($temp, $data['CPI']);
            $this -> db -> order_by($sortby, $sortorder);
            $this -> db -> limit($limit, $offset);
        }
        $this -> db -> where('StudentIsDeleted', 0);
        $filtereddata = $this -> db -> get('student');
        $data['rows'] = $filtereddata -> result();
        $this -> db -> from('program');
        $data['programs'] = $this -> db -> get() -> result();
        return $data;
    }

    public function defaultsearch($limit, $offset, $sortby, $sortorder) {
        $sortorder = $sortorder == 'desc' ? 'desc' : 'asc';
        $sortcolumn = array('StudentId', 'StudentName', 'StudentCPI', 'StudentIsApproved');
        $sortby = in_array($sortby, $sortcolumn) ? $sortby : 'StudentId';
        $this -> db -> from('student');
        $this -> db -> where('StudentIsDeleted', 0);
        $this -> db -> order_by($sortby, $sortorder);
        $this -> db -> limit($limit, $offset);
        $this -> db -> join('program', 'student.programid = program.programid');
        $filtereddata = $this -> db -> get();
        $data['rows'] = $filtereddata -> result();
        $this -> db -> from('program');
        $data['programs'] = $this -> db -> get() -> result();
        //$data['num_rows'] = $data['rows']->num_row;
        return $data;
    }

}
