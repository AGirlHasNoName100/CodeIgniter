<?php
class Pages_model extends CI_Model
{
    function pages()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email'),
            'comment' => $this->input->post('comment')
          
        );
       return $this->db->insert('bookings', $data); 
       echo 'blah blah';
       $this->session->set_flashdata('feedback_sent', 'Thank you for your Feedback! .');  
    }
}