<?php
class ViewProfile extends CI_Controller{
    public function index() {
       
       $data['title'] = 'Employee Profiles';

       $data['posts'] = $this->post_model->get_profiles();

       $this->load->view('templates/header');
       $this->load->view('viewprofile/index', $data);
       $this->load->view('templates/footer');

        }
}
?>