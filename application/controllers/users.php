<?php
class Users extends CI_Controller

{
    function __construct()
    {
        parent::__construct();
        //   $this->load->library('form_validation');
        //   $this->load->model('visitormodel', 'user_model');
    }

    public function chart()
    {
        $query = $this->db->query("SELECT SUM(amount) as count FROM mpesarecords 
            GROUP BY MONTH(transactiondate) ORDER BY transactiondate");
        $data['click'] = json_encode(array_column($query->result(), 'count'), JSON_NUMERIC_CHECK);
        $query2 = $this->db->query("SELECT COUNT(*) as count FROM formdetails  WHERE position = 'aupair'
        GROUP BY MONTH(startdate) ORDER BY startdate");
        $data['clicks'] = json_encode(array_column($query2->result(), 'count'), JSON_NUMERIC_CHECK);

        $query1 = $this->db->query("SELECT COUNT(*) as count FROM formdetails  WHERE position = 'Full-Time'
        GROUP BY MONTH(startdate) ORDER BY startdate");
        $data['view'] = json_encode(array_column($query1->result(), 'count'), JSON_NUMERIC_CHECK);
       
        $query3 = $this->db->query("SELECT COUNT(*) as count FROM formdetails  WHERE position = 'Full-Time'");
        $data['fulltimes'] = json_encode(array_column($query3->result(), 'count'), JSON_NUMERIC_CHECK);

        
        $query4 = $this->db->query("SELECT COUNT(*) as count FROM formdetails  WHERE position = 'Aupair'");
        $data['aupairs'] = json_encode(array_column($query4->result(), 'count'), JSON_NUMERIC_CHECK);
        //   $query = $this->db->query("SELECT SUM(numberofview) as count FROM demo_viewer 
        //        GROUP BY YEAR(created_at) ORDER BY created_at"); 
        //   $data['viewer'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        // $this->load->view('templates/adminheader');
        $this->load->view('users/chart', $data);
        //  $this->load->view('templates/adminfooter');
    }


    public function report()
    {
        $query = $this->db->query("SELECT COUNT(*) as count FROM formdetails  WHERE position = 'aupair'
            GROUP BY MONTH(startdate) ORDER BY startdate");
        $data['clicks'] = json_encode(array_column($query->result(), 'count'), JSON_NUMERIC_CHECK);

        $query1 = $this->db->query("SELECT COUNT(*) as count FROM formdetails  WHERE position = 'Full-Time'
        GROUP BY MONTH(startdate) ORDER BY startdate");
        $data['view'] = json_encode(array_column($query1->result(), 'count'), JSON_NUMERIC_CHECK);
        //   $query = $this->db->query("SELECT SUM(numberofview) as count FROM demo_viewer 
        //        GROUP BY YEAR(created_at) ORDER BY created_at"); 
        //   $data['viewer'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        // $this->load->view('templates/adminheader');
        $this->load->view('users/report', $data);
        //  $this->load->view('templates/adminfooter');
    }

    public function profiles()
    {
        $data['title'] = 'Create Profile';

        $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
        $this->form_validation->set_rules('position', 'Position', 'required');
        $this->form_validation->set_rules('about', 'About Yourself', 'required');
        $this->form_validation->set_rules('salary', 'Salary Per Month', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('users/profiles', $data);
            $this->load->view('templates/footer');
        } else {
            $this->user_model->profiles();

            //set message
            $this->session->set_flashdata('profile_created', 'Profile Created successfully');

            redirect('users/login');
        }
    }
    public function register()
    {

        $data['title'] = 'Sign Up';

        $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
        $this->form_validation->set_rules('position', 'Position', 'required');
        $this->form_validation->set_rules('about', 'About Yourself', 'required');
        $this->form_validation->set_rules('salary', 'Salary Per Month', 'required');
        $this->form_validation->set_rules('id', 'MGK ID', 'required|callback_check_empcode_exists');
        $this->form_validation->set_rules('name', 'Full Name', 'required');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirmpass', 'Confirm Password', 'matches[password]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('users/register', $data);
            $this->load->view('templates/footer');
        } else {
            //encrypt password
            $enc_password = md5($this->input->post('password'));

            $this->user_model->register($enc_password);

            //set message
            $this->session->set_flashdata('user_registered', 'Registered and Profile Looks Great. login!');

            redirect('users/login');
        }
    }
    
    //login user
    public function login()
    {

        $data['title'] = 'Employee Sign In';

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        // $this->form_validation->set_rules('name', 'Name', 'required' );
        if ($this->form_validation->run() === FALSE) {
            //set message

            $this->load->view('users/login', $data);
        } else {
            //get email
            $email = $this->input->post('email');
            //get and encrypt password
            $password = md5($this->input->post('password'));

            //login user

            $data['posts'] = $this->user_model->get_post();
            $posts = $this->user_model->login('user', $email, $password);

            //create session

            if ($posts == TRUE) {
                $role = 'user';
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
                    $id = $result[0]->employeecode;
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
                   
                    //no of visitors
                    $query4 = $this->db->query("SELECT COUNT(*) as count FROM site_log");
                    $result4 = $query4->result();
                    $data['visitors'] = $result4;

                    
                    $data['tasks'] = $this->user_model->task($id);


                    $this->load->view('users/index2', $data);
                } else {

                    $this->session->set_flashdata('login_failed', 'Invalid credentials .');

                    $this->load->view('users/login', $data);
                }
            }
        }
    }

function myinvoice(){
      
    $data['invoices'] = $this->user_model->myinvoice();
    $this->load->view('users/myinvoice', $data);
}
    function show_emp_id()
    {
        $id = $this->uri->segment(3);
        $data['single_emp'] = $this->user_model->show_emp_id($id);

        $this->load->view('users/edit', $data);
    }

    public function admin()
    {

        $data['title'] = 'Dashboard';

        // $this->load->view('templates/adminheader', $data);
        $id = $this->uri->segment(3);
        $data['tasks'] = $this->user_model->task($id);
        $data['viewers'] = $this->user_model->get_reviews($id);
       // $this->user_model->index2($id);
        $this->load->view('users/admin', $data);
        // $this->load->view('templates/adminfooter', $data);
    }

    public function index()
    {

        $data['title'] = 'Dashboard';
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
    }
    public function availability()
    {

        $data['title'] = 'Check Availability';

        $this->form_validation->set_rules('id', 'employeecode', 'required');
        $this->form_validation->set_rules('start', 'Start Date', 'required');
        $this->form_validation->set_rules('end', 'End Date', 'required');

        // $this->form_validation->set_rules('name', 'Name', 'required' );
        if ($this->form_validation->run() === FALSE) {
            //echo 'false';
           // $this->load->view('templates/header', $data);
            $this->load->view('users/availability', $data);
          //  $this->load->view('templates/footer', $data);
        } else {
            // echo 'true';
            $code = $this->input->post('id');
            $start = $this->input->post('start');
            $end = $this->input->post('end');
            $store =  $this->user_model->availability($start, $end, $code);
            echo json_encode($store);
        }
    }
    public function index2()
    {

        $data['title'] = 'My Account';
        $id = $this->uri->segment(3);
        
       $data['tasks'] = $this->user_model->task($id);

        $this->load->view('users/index2', $data);
    }

    public function calendar()
    {

        $data['title'] = 'My Account';


        $this->load->view('users/calendar', $data);
    }
    public function calendar2()
    {

        $data['title'] = 'My Account';


        $this->load->view('users/calendar2', $data);
    }

    public function invoice()
    {


        $id = $this->uri->segment(3);
        
        $data['invoices'] = $this->user_model->invoice();
          $this->load->view('users/invoice', $data);
        }

      //  $data['invoices'] = $result;

        // $this->load->library('pdf');
        //  $html = $this->load->view('users/invoice', [], true);
       
        //   $this->pdf->createPDF($html, 'mypdf', false);
    
    public function book()
    {

        $data['title'] = 'Book';

        $this->form_validation->set_rules('customerid', 'Customer ID', 'required');
        $this->form_validation->set_rules('name', 'Full Name', 'required');
        $this->form_validation->set_rules('email', 'Email Address', 'required');
        $this->form_validation->set_rules('address', 'Home Address', 'required');
        $this->form_validation->set_rules('position', 'Position', 'required');
        $this->form_validation->set_rules('salary', 'Salary Per Month', 'required');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('start', 'Start Date', 'required');
        $this->form_validation->set_rules('end', 'End Date', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('users/book', $data);
            $this->load->view('templates/footer');
        } 
        else {
                     
                     
//check availability
//$id = $this->input->post('code');
$code = $this->input->post('id');
$start = $this->input->post('start');
$end = $this->input->post('end');
$this->user_model->availability($start, $end, $code);

           // $this->user_model->book();
         $id = $this->input->post('id');
            $code2 = $this->input->post('customerid');
            $this->user_model->count_bookings($id);
    
       
       $data['user_details'][] = (object) array(
           "emp_id" => $id,
           "customer_id" => $code2
       );

      // $this->payment($id,$code2);
      $this->load->view('templates/header');
         $this->load->view('users/payment', $data);
         $this->load->view('templates/footer');
        }
    }
    function payment()
    {

        $this->form_validation->set_rules('code', 'Mpesa Code', 'required|callback_check_mpesacode_exists');
         
            $this->user_model->payment();

           // redirect('home');
        
    }
     //check customercode exists
     function check_mpesacode_exists($mcode)
     {
         $this->form_validation->set_message('check_mpesa_exists', 'MPESA code doesnt Exist,please enter valid MPESAcode');
         if ($this->user_model->check_mpesacode_exists($mcode)) {
             return true;
         } else {
             return false;
         }
     }
    public function data()
    {

        $data['title'] = 'Data Tables';
        $data['result'] = $this->user_model->getAllData();
        $data['viewers'] = $this->user_model->get_bookings();
        $data['invoices'] = $this->user_model->myinvoice();
 //progress
 $data['progress'] = $this->user_model->management();
        $this->load->view('users/data', $data);
    }
    public function viewuser()
    {

        $data['title'] = 'User Profile';
        
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
       
        

        $id = $this->uri->segment(3);
        $data['tasks'] = $this->user_model->task($id);
        $this->load->view('users/viewuser', $data);
    }
    public function logout()
    {
        //unset user data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('email');

        $this->session->set_flashdata('logged_out', 'You are logged out .');

        redirect('users/login');
    }
    function check_username_exists($username)
    {
        $this->form_validation->set_message('check_username_exists', 'Username Unavailable');
        if ($this->user_model->check_username_exists($username)) {
            return true;
        } else {
            return false;
        }
    }
    //check email exists
    function check_email_exists($email)
    {
        $this->form_validation->set_message('check_email_exists', 'Email already used,please use another');
        if ($this->user_model->check_email_exists($email)) {
            return true;
        } else {
            return false;
        }
    }
    //check email exists
    function check_empcode_exists($id)
    {
        $this->form_validation->set_message('check_empcode_exists', 'Please input a correct Employee ID to register.');
        if ($this->user_model->check_empcode_exists($id)) {
            return true;
        } else {
            $this->session->set_flashdata('registration_failed', 'Registration Failed. Invalid MGK ID');
        }
    }

   
    function check_code_exists($code)
    {
        $this->form_validation->set_message('check_code_exists', 'MPESA code not found. Please make transaction/input correct code.');
        if ($this->user_model->check_code_exists($code)) {
            //$this->form_validation->set_message('check_code_exists', 'MPESA code not found. Please make transaction/input correct code.');
            return true;
        } else {
            $this->session->set_flashdata('payment_failed', 'Payment Failed. Please input Correct MPESA Code');
        }
    }
    public function add()
    {

        $data['title'] = 'Add New Employee';



        $this->form_validation->set_rules('id', 'Employee ID', 'required');
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('position', 'Position', 'required');
     $this->form_validation->set_rules('role', 'Role', 'required');
        $this->form_validation->set_rules('dob', 'Date of Birth', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('add_failed', 'Failed.');
            //   $this->load->view('templates/adminheader', $data);
            $this->load->view('users/data', $data);
            //   $this->load->view('templates/adminfooter', $data);

        } else {

            $this->user_model->add();

            //set message
            $this->session->set_flashdata('employee_added', 'Added Successfully.');

            redirect('users/data');
        }
    }
    public function edit($id)
    {

        $data['title'] = 'Edit Employee Details';
        $id = $this->uri->segment(3);
        $data['posts'] =  $this->user_model->edit($id);
        $this->load->view('users/edit', $data);
        
    }

    public function update($id)
    {
       
        $data['posts'] =  $this->user_model->updateData($id);
        redirect("users/data", $data);
    }

    public function editprofile($id)
    {
        $data['title'] = 'Edit Profile Details';
        $id = $this->uri->segment(3);
        $data['posts'] = $this->user_model->edit2($id);
        $this->load->view('users/editprofile', $data);
    }
    public function update2($id){
        $id = $this->uri->segment(3);
        $data['tasks'] = $this->user_model->task($id);
        $data['viewers'] = $this->user_model->get_reviews($id);
        $this->user_model->updateProfile($id);
        $this->load->view('users/admin', $data);
    }
    public function update3($id){
        $id = $this->uri->segment(3);
        $data['viewers'] = $this->user_model->get_reviews($id);
        $this->user_model->updateProfile($id);
        $this->load->view('users/profile', $data);
    }
    public function editprofile2($id)
    {
        $data['title'] = 'Edit Profile Details';
        $id = $this->uri->segment(3);
        $data['posts'] = $this->user_model->edit2($id);
        $this->load->view('users/editprofile2', $data);
    }
    public function delete($id)
    {
        $this->user_model->deleteData($id);
        redirect("users/data");
    }
    public function visitor()
    {
        $site_statics_today = $this->user_model->get_site_data_for_today();
        $site_statics_last_week = $this->user_model->get_site_data_for_last_week();
        $data['visits_today'] = isset($site_statics_today['visits']) ? $site_statics_today['visits'] : 0;
        $data['visits_last_week'] = isset($site_statics_last_week['visits']) ? $site_statics_last_week['visits'] : 0;
        $data['chart_data_today'] = $this->user_model->get_chart_data_for_today();
        $data['chart_data_curr_month'] = $this->user_model->get_chart_data_for_month_year();
        $this->load->view('users/visitor', $data);
    }
    function get_chart_data()
    {
        if (isset($_POST)) {
            if (isset($_POST['month']) && strlen($_POST['month']) && isset($_POST['year']) && strlen($_POST['year'])) {
                $month = $_POST['month'];
                $year = $_POST['year'];
                $data = $this->user_model->get_chart_data_for_month_year($month, $year);
                if ($data !== NULL) {
                    foreach ($data as $value) {
                        echo $value->day . "t" . $value->visits . "n";
                    }
                } else {
                    $timestamp = mktime(0, 0, 0, $month);
                    $label = date("F", $timestamp);
                    echo '<div style="width:600px;position:relative;font-weight:bold;top:100px;margin-left:auto;margin-left:auto;color:red;">No data found for the "' . $label . '-' . $year . '"</div>';
                }
            } else if (isset($_POST['month']) && strlen($_POST['month'])) {
                $month = $_POST['month'];
                $data = $this->user_model->get_chart_data_for_month_year($month);
                if ($data !== NULL) {
                    foreach ($data as $value) {
                        echo $value->day . "t" . $value->visits . "n";
                    }
                } else {
                    $timestamp = mktime(0, 0, 0, $month);
                    $label = date("F", $timestamp);
                    echo '<div style="width:600px;position:relative;font-weight:bold;top:100px;margin-left:auto;margin-left:auto;color:red;">No data found for the "' . $label . '"</div>';
                }
            } else if (isset($_POST['year']) && strlen($_POST['year'])) {
                $year = $_POST['year'];
                $data = $this->user_model->get_chart_data_for_month_year(0, $year);
                if ($data !== NULL) {
                    foreach ($data as $value) {
                        echo $value->day . "t" . $value->visits . "n";
                    }
                } else {
                    echo '<div style="width:600px;position:relative;font-weight:bold;top:100px;margin-left:auto;margin-left:auto;color:red;">No data found for the "' . $year . '"</div>';
                }
            } else {
                $data = $this->user_model->get_chart_data_for_month_year();
                if ($data !== NULL) {
                    foreach ($data as $value) {
                        echo $value->day . "t" . $value->visits . "n";
                    }
                } else {
                    echo '<div style="width:600px;position:relative;font-weight:bold;top:100px;margin-left:auto;margin-left:auto;color:red;">No data found!</div>';
                }
            }
        }
    }
    public function management()
    {

        //no of booked
        $query = $this->db->query("SELECT COUNT(DISTINCT employeeid_fk) as count FROM formdetails");
        $result = $query->result();
        $data['books'] = $result;
        //no of not booked
        $query1 = $this->db->query("SELECT COUNT(DISTINCT employeecode) as count FROM registered_users WHERE NOT EXISTS (SELECT (employeeid_fk) FROM formdetails
                WHERE formdetails.employeeid_fk = registered_users.employeecode)");
        $result1 = $query1->result();
        $data['available'] = $result1;
        //fulltime employee
        $query2 = $this->db->query("SELECT COUNT(*) as count FROM registered_users WHERE position = 'Full-Time'");
        $result2 = $query2->result();
        $data['fulltime'] = $result2;
        //aupair employees
        $query3 = $this->db->query("SELECT COUNT(*) as count FROM registered_users WHERE position = 'Aupair'");
        $result3 = $query3->result();
        $data['aupair'] = $result3;
         //performance
         $query4 = $this->db->query("SELECT * FROM registered_users ORDER BY bookings DESC, views DESC");
         $result4 = $query4->result();
         $data['performers'] = $result4;
        //progress
        $data['progress'] = $this->user_model->management();

        $this->load->view('users/management', $data);
    }
    public function profile()
    {

        $data['title'] = 'My Account';
        $id = $this->uri->segment(3);
        
        $data['viewers'] = $this->user_model->get_reviews($id);

        
        //$data = $this->user_model->index2($id);
        $this->load->view('users/profile', $data);
    }
    public function activity()
    {

        $data['title'] = 'My Account';
        $id = $this->uri->segment(3);
        $data['tasks'] = $this->user_model->task($id);
        $this->load->view('users/activity', $data);
    }


}
