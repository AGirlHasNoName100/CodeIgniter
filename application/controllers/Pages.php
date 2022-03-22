<?php
class Pages extends CI_Controller{
    public function view($pages = 'home'){
       if(!file_exists(APPPATH.'views/pages/'.$pages.'.php'))   {
           show_404();
       }
       $data['title'] = ucfirst($pages);
       $this->load->view('templates/header');
       $this->load->view('pages/'.$pages, $data);
       $this->load->view('templates/footer');
       
        }
    public function home($pages = 'view'){
        if(!file_exists(APPPATH.'views/pages/'.$pages.''))   {
            show_404();
           // echo'failed';
        }
        $data['title'] = ucfirst($pages);
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('phone', 'phone', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('comment', 'comment', 'required');
        if ($this->form_validation->run() === FALSE) {
            echo 'blaah';
            $this->load->view('templates/header');
            $this->load->view('pages/view',$data);
            $this->load->view('templates/footer');
        }
        else{ 
           $this->pages_model->pages();     
         
           //redirect('default_controller');
        }
       
        
    }
}
?>