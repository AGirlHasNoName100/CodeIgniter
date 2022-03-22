<?php
class Crud extends CI_Controller
{
  public  function __construct(){
        parent::__construct();
        $this->load->model('crud_model');
       
    }
    public function data() {
        $data['result'] = $this->crud_model->getAllData();
		$this->load->view('crud/data', $data);
    }

    public function add()
    {

        $data['title'] = 'Add New Employee';
        


        $this->form_validation->set_rules('id', 'Employee ID', 'required');
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('position', 'Position', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');
        $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
       
        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('add_failed', 'Failed.');
         //   $this->load->view('templates/adminheader', $data);
            $this->load->view('crud/add', $data);
         //   $this->load->view('templates/adminfooter', $data);
        
        } else {
            
            $this->crud_model->add();

            //set message
            $this->session->set_flashdata('employee_added', 'Added Successfully.');

            redirect('crud/data');
        }

       
    }
    public function edit($id)
    {

        $data['title'] = 'Edit Employee Details';
       
         $id = $this->uri->segment(3);
         $data['row'] = $this->crud_model->getData($id);
         $this->load->view('crud/edit', $data);     

}

 public function update($id) {
        $this->crud_model->updateData($id);
        redirect("CrudController");
    }

    public function delete($id) {
        $this->crud_model->deleteData($id);
        redirect("CrudController");
    }
}
?>