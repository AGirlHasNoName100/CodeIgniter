<?php
class Profile_model extends CI_Model{
    public function index(){
        $data = array(
            //'id' => query("SELECT id FROM "),
            'image' => $this->input->post('image'),
            'username' => $this->input->post('username'),
            'position' => $this->input->post('position'),
            'about' => $this->input->post('about'),
            'amount' => $this->input->post('salary'),
            'experience' => $this->input->post('experience'),
            'qualifications' => $this->input->post('qualification')
        );
       // return $this->db->query("INSERT INTO profilerecords")
        return $this->db->insert('profilerecords', $data);
    } 

    //check userexists
    public function check_username_exists($username){
        $query = $this->db->get_where('profilerecords', array('username' => $username));
        if(empty($query->row_array())){
            return true;
        }
        else{
            return false;
        }
    }
    
    }

?>