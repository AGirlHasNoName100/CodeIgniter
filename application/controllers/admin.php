<?php

class Administrator extends CI_Controller{

    public function login(){
        $data['title'] = 'Sign In';

        $this->load->view('templates/header');
        $this->load->view('admin/login',$data);
        $this->load->view('templates/footer');
    }
    //login admin

    public function loginadmin()
    {

        $data['title'] = 'Sign In';

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        // $this->form_validation->set_rules('name', 'Name', 'required' );
        if ($this->form_validation->run() === FALSE) {
               //set message
             //  echo 'blahblahblah';
            $this->load->view('templates/header');
            $this->load->view('admin/login', $data);
            $this->load->view('templates/footer');
        } else {
            //get email
            $email = $this->input->post('email');
            //get and encrypt password
            $password =md5($this->input->post('password')) ;

            //login admin
            $data['posts'] = $this->user_model->get_post();
            $posts = $this->user_model->login($email, $password);

             //create session

          if($posts == TRUE){

            $email = $this->input->post('email');
            $result = $this->user_model->index($email);
if ($result != false) {
$session_data = array(
'username' => $result[0]->username,
'email' => $result[0]->Email,
'about' => $result[0]->about,
'phone' => $result[0]->phone,
'qualifications' => $result[0]->qualifications,
'likes' => $result[0]->likes,
'views' => $result[0]->views,
'bookings' => $result[0]->bookings,
'image' => $result[0]->image,
'position' => $result[0]->position,
'amount' => $result[0]->amount,
'experience' => $result[0]->experience

);
// Add user data in session

$this->session->set_userdata('logged_in', $session_data);
//$this->load->view('templates/adminheader');
$this->load->view('admin/index');
//$this->load->view('templates/adminfooter');

}
        else{
     
            $this->session->set_flashdata('login_failed', 'Invalid credentials .');
            $this->load->view('templates/header');
            $this->load->view('admin/login', $data);
            $this->load->view('templates/footer');
        } 
        }
    }
    }
    public function logout(){
        //unset user data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('email');
    
        $this->session->set_flashdata('logged_out', 'You are logged out .');
    
        redirect('admin/login');
    }
    public function index()
    {

        $data['title'] = 'Dashboard';

       // $this->load->view('templates/adminheader', $data);
        $this->load->view('admin/index', $data);
      //  $this->load->view('templates/adminfooter', $data);
    }

}
?>