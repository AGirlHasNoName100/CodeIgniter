<?php
class Post_model extends CI_Model{
    public function __construct(){
        $this->load->database();

    }
    public function get_posts($slug = FALSE){
        if($slug === FALSE){
            $query = $this->db->get('registered_users');
            return $query->result_array();
        }
        $query = $this->db->get_where('registered_users', array('slug' => $slug ));
        return $query->row_array();
    }

      // Function To Fetch Selected employee Record
function show_emp_id($id){
    //if(null == ($_POST['submit'])){
      $id = $this->uri->segment(3);
   // $id= $this->input->post('id');
         $query = array();
         $this->db->select('*');
         $this->db->from('registered_users');
         $this->db->where('employeecode', $id);
         $query = $this->db->get();
         if($query->num_rows() > 0)
         {
           //  echo "success";
            // print_r($query->result());
            // die();
           return $query->result();
         }
         else
         {
           //  echo "failed";
             return false;
         }
         $result = $query->result();
    }
  
   // print_r($result);
  //   die();
   // return $result;

   function get_likes($id){
  
    $id = $this->uri->segment(3);
    $query = array('likes'=>'likes + 1');
    $this->db->set('likes','likes',false);
    $this->db->where('employeecode', $id);
    $query = $this->db->update('registered_users',$query);

    if($query->num_rows() > 0)
    {
    //  echo "success";
     //   print_r($query->result());
     //   die();
      return $query->result();
    }
    else
    {
        echo "failed";
        return false;
    }
    $result = $query->result();
   
}
function viewprofile(){
    
    $data = array(
        'rating' => $this->input->post('rate'),
        'employeecode' => $this->input->post('id'),
        'Name' => $this->input->post('name'),
        'customercode' => $this->input->post('code'),
        'comment' => $this->input->post('comment')
      
    );
   return $this->db->insert('comments', $data);                  
    }
    public function check_customer_exists($code){
        $query = $this->db->get_where('formdetails', array('customercode' => $code));
        if(!empty($query->row_array())){
            return true;
        }
        else{
            return false;
        }
    }
    public function get_reviews($id){
  
        
        $query =  $this->db->select('comments.Name, comments.comment,comments.date ,registered_users.username')
          ->from('formdetails')
          ->join('registered_users', 'registered_users.employeecode = formdetails.employeeid_fk')
          ->join('comments', 'comments.employeecode = formdetails.employeeid_fk')
          ->where('comments.employeecode',$id)
          ->get();
          if($query->num_rows() != 0)
          {
           // echo "success";
             return $query->result();
           // print_r($query->result());
           //  die();
          }
          else
          {
            //  echo "failed";
            //  print_r($query->result());
             // die();
              return $query->result();
          }
     
    
  }
            function update_likecounter($id){
            // return current article likes 
            $this->db->where('employeecode', $id);
            $this->db->select('likes');
            $count = $this->db->get('registered_users')->row();
            // then increase by one 
            $this->db->where('employeecode', $id);
            $this->db->set('likes', ($count->likes + 1));
            $query =   $this->db->update('registered_users');
            if($query !== FALSE )
            {
                echo "success";
            // print_r($query->result());
            // die();
                //return $query->result();
            }
            else
            {
                echo "failed";
                return false;
            }

            }
  function update_counter($id) {
    // return current article views 
        $this->db->where('employeecode', urldecode($id));
        $this->db->select('views');
        $count = $this->db->get('registered_users')->row();
    // then increase by one 
        $this->db->where('employeecode', urldecode($id));
        $this->db->set('views', ($count->views + 1));
     $query =   $this->db->update('registered_users');
        if($query !== FALSE )
        {
            echo "success";
           // print_r($query->result());
       // die();
            //return $query->result();
        }
        else
        {
            echo "failed";
            return false;
        }
    }

    public function getData($rowno,$rowperpage,$search="") {
 
        $this->db->select('*');
        $this->db->from('registered_users');
    
        if($search != ''){
          $this->db->like('username', $search);
          $this->db->or_like('Email', $search);
          $this->db->or_like('qualifications', $search);
          $this->db->or_like('experience', $search);
          $this->db->or_like('position', $search);
          
        }
    
        $this->db->limit($rowperpage, $rowno); 
        $query = $this->db->get();
     
        return $query->result_array();
      }
    
      // Select total records
      public function getrecordCount($search = '') {
    
        $this->db->select('count(*) as allcount');
        $this->db->from('registered_users');
     
        if($search != ''){
          $this->db->like('username', $search);
          $this->db->or_like('Email', $search);
          $this->db->or_like('qualifications', $search);
          $this->db->or_like('experience', $search);
          $this->db->or_like('position', $search);
        }
    
        $query = $this->db->get();
        $result = $query->result_array();
     
        return $result[0]['allcount'];
      }
     //$role checks user/admin
     public function loginadmin($role,$email, $password){
        //validate
        $this->db->where('role', $role);
        $this->db->where('email', $email);
        $this->db->where('password', $password);

        $result = $this->db->get('registered_users');

        if($result->num_rows() == 1){
           // print_r($result->result());
           // die();
          //echo 'success';
           return $result->result();
           
        }
        else{
     $this->session->set_flashdata('login_failed', 'Invalid credentials .');
         echo 'fail';
   // return false;
   redirect('posts/loginadmin');
        }
    }

}

       
 
    

?>