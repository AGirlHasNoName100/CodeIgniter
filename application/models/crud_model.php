<?php
class Crud_model extends CI_Model{
public function add(){
    //insert data from form to db
    $data = array(
    
        'role' =>  $this->input->post('role'),      
        'employeecode' => $this->input->post('id'),
        'FirstName' => $this->input->post('fname'),
        'LastName' => $this->input->post('lname'),
        'phone' => $this->input->post('phone'),
        'Address' => $this->input->post('address'),
        'dateofbirth' => $this->input->post('dob'),
        'email' => $this->input->post('email'),
        'position' => $this->input->post('position')
    );
   return $this->db->insert('employeedetails', $data);                  
    }

    function getAllData() {
        $query = $this->db->query('SELECT * FROM employeedetails');
        return $query->result();
    }

    function getData($id) {
        $id = $this->uri->segment(3);
        $query = $this->db->query('SELECT * FROM employeedetails WHERE `employeecode` =' .$id);
        return $query->row();
    }

    function updateData($id) {
        $id = $this->uri->segment(3);
        $data = array (
            'role' =>  $this->input->post('role'),      
            'FirstName' => $this->input->post('fname'),
            'LastName' => $this->input->post('lname'),
            'phone' => $this->input->post('phone'),
            'Address' => $this->input->post('address'),
            'dateofbirth' => $this->input->post('dob'),
            'email' => $this->input->post('email'),
            'position' => $this->input->post('position')
        );
        $this->db->where('employeecode', $id);
        $this->db->update('employeedetails', $data);
    }
    function deleteData($id) {
        $id = $this->uri->segment(3); 
        $this->db->where('employeecode', $id);
        $this->db->delete('employeedetails');
    }
   
}
?>