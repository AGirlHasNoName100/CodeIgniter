<?php
class Posts extends CI_Controller
{

    public function index()
    {

        $data['title'] = 'Employee Profile';

        $data['posts'] = $this->post_model->get_posts();


        $this->load->view('templates/header');
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer');
    }
    function show_emp_id()
    {
        $id = $this->uri->segment(3);
        $data['single_emp'] = $this->post_model->show_emp_id($id);

        $this->load->view('users/edit', $data);
    }

    public function viewprofile()
    {
        $data['title'] = 'Employee Profile';
        $id = $this->uri->segment(3);
        $data['single_emp'] = $this->post_model->show_emp_id($id);

        $data['viewers'] = $this->post_model->get_reviews($id);
        $this->add_count($id);

        // $this->count_likes($id);
        //  $likes = $this->post_model->get_likes();

        $this->form_validation->set_rules('id', 'employeecode', 'required');
        $this->form_validation->set_rules('code', 'Customer Code', 'required|callback_check_customer_exists');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('posts/viewprofile', $data);
            $this->load->view('templates/footer');
        } else {

            $this->post_model->viewprofile();
            $this->session->set_flashdata('comment_sent', 'Comment/Review sent. Thank You for choosing MotherGoose');

            redirect('posts');
        }
    }
    function count_likes($id)
    {
        $id = $this->uri->segment(3);
        // load cookie helper
        $this->load->helper('cookie');
        // this line will return the cookie which has slug name
        $check_visitor = $this->input->cookie(urldecode($id), FALSE);
        // this line will return the visitor ip address
        $ip = $this->input->ip_address();
        //  echo $id;
        // if the visitor visit this article for first time then //
        //set new cookie and update article_views column  ..
        //you might be notice we used slug for cookie name and ip 
        //address for value to distinguish between articles  views
        if ($check_visitor == false) {
            $cookie = array(
                "name"   => urldecode($id),
                "value"  => "$ip",
                "expire" =>  time() + 7200,
                "secure" => false
            );
            $this->input->set_cookie($cookie);
            $this->post_model->update_likecounter($id);
            echo 'yes';
        } else {
            echo 'no';
        }
    }


    function add_count($id)
    {
        $id = $this->uri->segment(3);
        // load cookie helper
        $this->load->helper('cookie');
        // this line will return the cookie which has slug name
        $check_visitor = $this->input->cookie(urldecode($id), FALSE);
        // this line will return the visitor ip address
        $ip = $this->input->ip_address();
        //  echo $id;
        // if the visitor visit this article for first time then //
        //set new cookie and update article_views column  ..
        //you might be notice we used slug for cookie name and ip 
        //address for value to distinguish between articles  views
        if ($check_visitor == false) {
            $cookie = array(
                "name"   => urldecode($id),
                "value"  => "$ip",
                "expire" =>  time() + 7200,
                "secure" => false
            );
            $this->input->set_cookie($cookie);
            $this->post_model->update_counter(urldecode($id));
            //   echo 'yes';
        } else {
            //   echo 'no';
        }
    }
    function check_customer_exists($code)
    {
        $this->form_validation->set_message('check_customer_exists', 'Customer code not found. Please make sure you have booked customer before/input correct code.');
        if ($this->post_model->check_customer_exists($code)) {
            //$this->form_validation->set_message('check_code_exists', 'MPESA code not found. Please make transaction/input correct code.');
            return true;
        } else {
            $this->session->set_flashdata('comment_failed', 'Comment not sent.Please make sure you have booked customer before/input correct customercode.');
            redirect('posts');
        }
    }

    public function trial($rowno = 0)
    {


        // Search text
        $search_text = "";
        if ($this->input->post('submit') != NULL) {
            $search_text = $this->input->post('search');
            $this->session->set_userdata(array("search" => $search_text));
        } else {
            if ($this->session->userdata('search') != NULL) {
                $search_text = $this->session->userdata('search');
            }
        }

        // Row per page
        $rowperpage = 4;

        // Row position
        if ($rowno != 0) {
            $rowno = ($rowno - 1) * $rowperpage;
        }

        // All records count
        $allcount = $this->post_model->getrecordCount($search_text);

        // Get records
        $users_record = $this->post_model->getData($rowno, $rowperpage, $search_text);

        // Pagination Configuration
        $config['base_url'] = base_url() . 'posts/trial';
        $config['use_page_numbers'] = TRUE;
        $config['total_rows'] = $allcount;
        $config['per_page'] = $rowperpage;

        // Initialize
        $this->pagination->initialize($config);

        $data['pagination'] = $this->pagination->create_links();
        $data['result'] = $users_record;
        $data['row'] = $rowno;
        $data['search'] = $search_text;


        // Load view
        $this->load->view('templates/header', $data);
        $this->load->view('posts/trial', $data);
        $this->load->view('templates/footer', $data);
    }
    //login admin
    public function loginadmin()
    {

        $data['title'] = 'Admin Sign In';

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            //set message

            $this->load->view('users/loginadmin', $data);
        } else {
            //get email
            $email = $this->input->post('email');
            //get and encrypt password
            $password = md5($this->input->post('password'));

            //login user

            $data['posts'] = $this->user_model->get_post();
            $posts = $this->post_model->loginadmin('admin', $email, $password);

            //create session

            if ($posts == TRUE) {

                $role = 'admin';
                $email = $this->input->post('email');
                $result = $this->user_model->index($role, $email);
                if ($result != false) {
                    $session_data = array(
                        'employeecode' => $result[0]->employeecode,
                        'username' => $result[0]->username,
                        'email' => $result[0]->Email,
                        'about' => $result[0]->about,
                        'phone' => $result[0]->phone,
                        'qualifications' => $result[0]->qualifications,
                        'views' => $result[0]->views,
                        'bookings' => $result[0]->bookings,
                        'image' => $result[0]->image,
                        'position' => $result[0]->position,
                        'amount' => $result[0]->amount,
                        'experience' => $result[0]->experience

                    );
                    // Add user data in session
                    $this->session->set_userdata('logged_in', $session_data);
                    //get bookings
                    $data['viewers'] = $this->user_model->get_bookings();
                    //get invoices
                    $data['invoices'] = $this->user_model->invoice();
                    //no of bookings
                    $query = $this->db->query("SELECT COUNT(*) as count FROM formdetails");
                    $result = $query->result();
                    $data['books'] = $result;
                    //no of registeredusers
                    $query2 = $this->db->query("SELECT COUNT(*) as count FROM registered_users");
                    $result2 = $query2->result();
                    $data['users'] = $result2;
                    //performance
                    $query3 = $this->db->query("SELECT * FROM registered_users ORDER BY bookings DESC, views DESC");
                    $result3 = $query3->result();
                    $data['performers'] = $result3;
                    //no of visitors
                    $query4 = $this->db->query("SELECT COUNT(*) as count FROM site_log");
                    $result4 = $query4->result();
                    $data['visitors'] = $result4;


                    $this->load->view('users/index', $data);
                } else {

                    $this->session->set_flashdata('login_failed', 'Invalid credentials .');
                    $this->load->view('users/loginadmin', $data);
                }
            }
        }
    }
}
