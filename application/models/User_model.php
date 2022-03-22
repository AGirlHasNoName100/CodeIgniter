<?php
class User_model extends CI_Model
{

    private $site_log = 'site_log';   //site log

    function __construct()
    {
    }
    function get_site_data_for_today()
    {
        $results = array();
        $query = $this->db->query('SELECT SUM(no_of_visits) as visits 
            FROM ' . $this->site_log . ' 
            WHERE CURDATE()=DATE(access_date)
            LIMIT 1');
        if ($query->num_rows() == 1) {
            $row = $query->row();
            $results['visits'] = $row->visits;
        }

        return $results;
    }

    function get_site_data_for_last_week()
    {
        $results = array();
        $query = $this->db->query('SELECT SUM(no_of_visits) as visits
            FROM ' . $this->site_log . '
            WHERE DATE(access_date) >= CURDATE() - INTERVAL DAYOFWEEK(CURDATE())+6 DAY
            AND DATE(access_date) < CURDATE() - INTERVAL DAYOFWEEK(CURDATE())-1 DAY 
            LIMIT 1');
        if ($query->num_rows() == 1) {
            $row = $query->row();
            $results['visits'] = $row->visits;

            return $results;
        }
    }

    function get_chart_data_for_today()
    {
        $query = $this->db->query('SELECT SUM(no_of_visits) as visits,
                DATE_FORMAT(access_date,"%h %p") AS hour
                FROM ' . $this->site_log . '
                WHERE CURDATE()=DATE(access_date)
                GROUP BY HOUR(access_date)');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return NULL;
    }

    function get_chart_data_for_month_year($month = 0, $year = 0)
    {
        if ($month == 0 && $year == 0) {
            $month = date('m');
            $year = date('Y');
            $query = $this->db->query('SELECT SUM(no_of_visits) as visits,
                DATE_FORMAT(access_date,"%d-%m-%Y") AS day 
                FROM ' . $this->site_log . '
                WHERE MONTH(access_date)=' . $month . '
                AND YEAR(access_date)=' . $year . '
                GROUP BY DATE(access_date)');
            if ($query->num_rows() > 0) {
                return $query->result();
            }
        }
        if ($month == 0 && $year > 0) {
            $query = $this->db->query('SELECT SUM(no_of_visits) as visits,
                DATE_FORMAT(timestamp,"%M") AS day
                FROM ' . $this->site_log . '
                WHERE YEAR(access_date)=' . $year . '
                GROUP BY MONTH(access_date)');
            if ($query->num_rows() > 0) {
                return $query->result();
            }
        }
        if ($year == 0 && $month > 0) {
            $year = date('Y');
            $query = $this->db->query('SELECT SUM(no_of_visits) as visits,
                DATE_FORMAT(access_date,"%d-%m-%Y") AS day
                FROM ' . $this->site_log . '
                WHERE MONTH(access_date)=' . $month . '
                AND YEAR(access_date)=' . $year . '
                GROUP BY DATE(access_date)');
            if ($query->num_rows() > 0) {
                return $query->result();
            }
        }

        if ($year > 0 && $month > 0) {
            $query = $this->db->query('SELECT SUM(no_of_visits) as visits,
                DATE_FORMAT(access_date,"%d-%m-%Y") AS day
                FROM ' . $this->site_log . '
                WHERE MONTH(access_date)=' . $month . '
                AND YEAR(access_date)=' . $year . '
                GROUP BY DATE(access_date)');
            if ($query->num_rows() > 0) {
                return $query->result();
            }
        }

        return NULL;
    }

    public function register($enc_password)
    {
        //user data array
        //count bookings in formdetails
        $id = $this->input->post('id');
        // $query = array();


        $data = array(
            'employeecode' => $this->input->post('id'),
            'Name' => $this->input->post('name'),
            'Email' => $this->input->post('email'),
            'Password' => $enc_password,
            'phone' => $this->input->post('phone'),
            'image' => $this->input->post('image'),
            'username' => $this->input->post('username'),
            'position' => $this->input->post('position'),
            'about' => $this->input->post('about'),
            'amount' => $this->input->post('salary'),
            'experience' => $this->input->post('experience'),
            'qualifications' => $this->input->post('qualification')


        );


        //insert user
        return $this->db->insert('registered_users', $data);
        //   $empcode =  $this->db->insert_id();

        // $employee_id = $this->db->insert_id();
    }

    public function profiles()
    {
        // $employee_id = "SELECT id from registered_users WHERE  email = '$email'";
        $data = array(

            'image' => $this->input->post('image'),
            'username' => $this->input->post('username'),
            'position' => $this->input->post('position'),
            'about' => $this->input->post('about'),
            'amount' => $this->input->post('salary'),
            'experience' => $this->input->post('experience'),
            'qualifications' => $this->input->post('qualification')
        );
        // return $this->db->query("INSERT INTO profilerecords")
        return $this->db->insert('registered_users', $data);
    }
    public function check_username_exists($username)
    {
        $query = $this->db->get_where('registered_users', array('username' => $username));
        if (empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    }
    public function check_mpesacode_exists($mcode)
    {
        $query = $this->db->get_where('mpesarecords', array('MpesaCode' => $mcode));
        if (empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    }
    public function check_empcode_exists($id)
    {
        $query = $this->db->get_where('employeedetails', array('employeecode' => $id));
        if (!empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    }
    //$role checks user/admin
    public function login($role, $email, $password)
    {
        //validate
        $this->db->where('role', $role);
        $this->db->where('email', $email);
        $this->db->where('password', $password);

        $result = $this->db->get('registered_users');

        if ($result->num_rows() == 1) {
            // print_r($result->row(0)->id);
            //  die();
            //   echo 'success';
            return $result->row(0)->id;
        } else {
            $this->session->set_flashdata('login_failed', 'Invalid credentials .');
            // echo 'fail';      
            // return false;
            redirect('users/login');
        }
    }

    public function check_email_exists($email)
    {
        $query = $this->db->get_where('registered_users', array('email' => $email));
        if (empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    }


    public function book($id,$code)
    {
        //insert data from form to db
        // $id = $this->uri->segment(3);
        // print_r($id);
        //die();
        $id = $this->input->post('code');
        $code = $this->input->post('id');
        $start = $this->input->post('start');
        $end = $this->input->post('end');
        $this->db
            ->select('startdate,enddate,employeeid_fk')
            ->from('formdetails')
            ->where('employeeid_fk', $code)
            ->where('startdate <=', $start)
            ->where('enddate >=', $start)
            ->or_where('employeeid_fk', $code)
            ->where('startdate <=', $end)
            ->where('enddate >= ', $end);
        $query = $this->db->get();
        //print_r($query->result());
        //die();
        if ($query->num_rows() > 0) {

            $this->session->set_flashdata('User_unavailable', 'This user is unavailable on selected dates.Please try another dates');

            redirect('users/book');
        } else {
            $this->session->set_flashdata('user_available', 'User Available, Go ahead and make payment');
            $data = array(

                'customercode' =>  $this->input->post('code'),
                'employeeid_fk' =>  $this->input->post('id'),
                'full_name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'phone' => $this->input->post('phone'),
                'position' => $this->input->post('position'),
                'salarypermonth' => $this->input->post('salary'),
                'startdate' => $this->input->post('start'),
                'enddate' => $this->input->post('end')
            );
            $this->db->insert('formdetails', $data);
            $formid_fk =  $this->db->insert_id();
    
            $data1 = array(
                'formid_fk' => $formid_fk,
                'full_name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'phone' => $this->input->post('phone'),
                'customercode' =>  $this->input->post('code')
            );
            $this->db->insert('customerdetails2', $data1);
            redirect('users/payment');
        }
        
    }
    public function count_bookings($id)
    {
        $this->db->set('bookings', 'bookings + 1', false);
        $this->db->where('employeecode', $id);
        $query =  $this->db->update('registered_users');
        // $query =    $this->db->query("UPDATE registered_users SET bookings = 'bookings + 1' WHERE employeecode = '$id'");

        if ($query != FALSE) {
            // echo "success";
            // print_r($query);
            // die();
            //  $result = $query->result();)

            return $query;
        } else {
            echo "failed";
            return false;
        }
    }

public function myinvoice(){

    $query =  $this->db->select('formdetails.full_name,formdetails.customercode, 
    formdetails.form_id, formdetails.employeeid_fk,formdetails.startdate,formdetails.enddate,
    formdetails.address,formdetails.phone,formdetails.email,paymentrecords.National_ID,
    paymentrecords.phonenumber,paymentrecords.MpesaCode')
        ->from('formdetails')
        ->join('paymentrecords', 'paymentrecords.customercode = formdetails.customercode')
       
        ->get();
    if ($query->num_rows() != 0) {
        //  echo "success";
       return $query->result();
        //print_r($query->result());
       //  die();
    } else {
     // echo "failed";
        return $query->result();
    }
}
    public function payment()
    {
//$id= $this->uri->segment(3);

        //insert data from form to db
        $data = array(
            'employeeid_fk' => $this->input->post('id'),
            'customercode' => $this->input->post('code'),
            'National_ID' => $this->input->post('natid'),
            'phonenumber' => $this->input->post('phone'),
            'MpesaCode' => $this->input->post('mpesacode'),
            'date' => $this->input->post('date')

        );

        $query =  $this->db->insert('paymentrecords', $data);
        if ($query != FALSE) {
$id=$this->input->post('id');
            //echo 'success';

            //set message
            $this->session->set_flashdata('paid', 'Payment Successful. Thank You for choosing MotherGoose');
           // return $query;
           //$this->load->view('users/invoice');
           redirect('users/myinvoice',$id);
         //  redirect('home');
            
         
        } else {
           // echo "failed";
           // return false;
             //set message
            return $this->session->set_flashdata('payment_failed', 'Payment Unsuccessful. Incorrect MPESA Code');
            redirect('home');
        }

    }
    public function add()
    {
        //insert employee detail from data table to db
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
        redirect('users/data');
    }


    // Function To Fetch Selected Student Record
    function show_emp_id($id)
    {
        //  if(null == ($_POST['submit'])){
        $id = $this->uri->segment(3);
        // $id= $this->input->post('id');
        $query = array();
        $this->db->select('*');
        $this->db->from('employeedetails');
        $this->db->where('employeecode', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {

            // print_r($query->result());
            // die();
            return $query->result();
        } else {
            echo "failed";
            return false;
        }
        $result = $query->result();


        // print_r($result);
        //   die();
        // return $result;
    }


    public function check_code_exists($code)
    {
        $query = $this->db->get_where('mpesarecords', array('MpesaCode' => $code));
        if (!empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    }
    public function availability($start, $end, $code)
    {
      //  $id = $this->input->post('code');
        $code = $this->input->post('id');
        $start = $this->input->post('start');
        $end = $this->input->post('end');
        $this->db
            ->select('startdate,enddate,employeeid_fk')
            ->from('formdetails')
            ->where('employeeid_fk', $code)
            ->where('startdate <=', $start)
            ->where('enddate >=', $start)
            ->or_where('employeeid_fk', $code)
            ->where('startdate <=', $end)
            ->where('enddate >= ', $end);
        $query = $this->db->get();
        //print_r($query->result());
        //die();
        if ($query->num_rows() > 0) {
            //set message
            $this->session->set_flashdata('User_unavailable', 'This user is unavailable on selected dates.Please try another dates');

            redirect('users/book');
        } else {
            $this->session->set_flashdata('user_available', 'User Available, Go ahead and make payment');
            $data = array(

                'customercode' =>  $this->input->post('customerid'),
                'employeeid_fk' =>  $this->input->post('id'),
                'full_name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'phone' => $this->input->post('phone'),
                'position' => $this->input->post('position'),
                'salarypermonth' => $this->input->post('salary'),
                'startdate' => $this->input->post('start'),
                'enddate' => $this->input->post('end')
            );
            $this->db->insert('formdetails', $data);
            $formid_fk =  $this->db->insert_id();
    
            $data1 = array(
                'formid_fk' => $formid_fk,
                'full_name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'phone' => $this->input->post('phone'),
                'customercode' =>  $this->input->post('customerid')
            );
            $this->db->insert('customerdetails2', $data1);
       //   redirect('users/payment');
       
      // redirect('users/payment');
        }
    }
    public function get_post($slug = FALSE)
    {
        if ($slug === FALSE) {
            $query = $this->db->get('registered_users');
            return $query->result_array();
        }
        $query = $this->db->get_where('registered_users', array('slug' => $slug));
        if ($query->num_rows() > 0) {
            echo 'success';
            // print_r($query->row_array());
            // die();
            return $query->result();
        } else {
            echo "failed";
            return false;
        }

        //  return $query->row_array();

    }
    //in data tables
    public function get_posts($slug = FALSE)
    {
        if ($slug === FALSE) {
            $query = $this->db->get('employeedetails');
            return $query->result_array();
        }
        $query = $this->db->get_where('employeedetails', array('slug' => $slug));
        return $query->row_array();
    }
    public function get_bookings()
    {


        $query =  $this->db->select('formdetails.full_name, formdetails.form_id, formdetails.employeeid_fk,formdetails.startdate,formdetails.enddate')
            ->from('formdetails')
            ->join('customerdetails2', 'customerdetails2.customercode = formdetails.customercode')
            ->get();
        if ($query->num_rows() != 0) {
            return $query->result();           
        } else {
        
            return $query->result();
        }
    }
    public function management()
    {
        $query =  $this->db->select('registered_users.employeecode,registered_users.username,registered_users.image , formdetails.position,formdetails.startdate,formdetails.enddate')
            ->from('formdetails')
            ->join('registered_users', 'formdetails.employeeid_fk = registered_users.employeecode')
            ->get();
        if ($query->num_rows() != 0) {
        
            return $query->result();
         
        } else {
          
            return $query->result();
        }
    }
    // Read data from database to show data in admin page
    public function index($role, $email)
    {

        $condition = "Email =" . "'" . $email . "' && role =" . "'" . $role . "'";
        $this->db->select('*');
        $this->db->from('registered_users');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
    function getAllData()
    {
        $query = $this->db->query('SELECT * FROM employeedetails');
        return $query->result();
    }


    function getData($id)
    {
        $id = $this->uri->segment(3);
        $query = $this->db->query('SELECT * FROM employeedetails WHERE `employeecode` =' . $id);
        return $query->row();
    }
    function edit($id)
    {
        $id = $this->uri->segment(3);
        $query = $this->db->select('*')
            ->from('employeedetails')
            ->where('employeecode', $id)
            ->get();
        // $query = $this->db->query("SELECT * FROM employeedetails WHERE employeecode = '$id' ");
        if ($query->num_rows() > 0) {
            //   echo $id;
            //  echo "success";
            return $query->result();
            //  print_r($query->result());
            //   die();
        } else {
            echo "failed";
            return false;
        }
    }
    function edit2($id)
    {
        $id = $this->uri->segment(3);
        $query = $this->db->select('*')
            ->from('registered_users')
            ->where('employeecode', $id)
            ->get();
        // $query = $this->db->query("SELECT * FROM employeedetails WHERE employeecode = '$id' ");
        if ($query->num_rows() > 0) {
            //   echo $id;
            // echo "success";
            return $query->result();
             // print_r($query->result());
             //  die();
        } else {
            echo "failed";
            return $query->result();
        }
    }

    function updateData($id)
    {
        $id = $this->uri->segment(3);
        $data = array(
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
        $query =  $this->db->update('employeedetails', $data);
        if ($query != FALSE) {

         //   echo 'success';
            return $query;
            redirect('users/data');
        } else {
           // echo "failed";
            return $query;
            redirect('users/data');
        }
    }

    function updateProfile($id)
    {
        $id = $this->uri->segment(3);
       
    $config['upload_path'] = './upload/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|jpe';
    $this->load->library('upload', $config);
    if ( ! $this->upload->do_upload('image'))
    {
        $error = array('error' => $this->upload->display_errors());
    }
    else
    {
        $file_data = $this->upload->data();
        $this->db->insert('registered_users', array(
            'image' => $file_data['file_name']
            ));
            $data['img'] = base_url().'/upload/'.$file_data['file_name'];
            echo'image set';
      //  $upload_data=$this->upload->data();
      //  $image_name=$upload_data['file_name'];
    }


        $data = array(
            'username' => $this->input->post('username'),
            'position' => $this->input->post('position'),
            'amount' => $this->input->post('amount'),
            'about' => $this->input->post('about'),
            'qualifications' => $this->input->post('qualifications'),
            'experience' => $this->input->post('experience')
             );
        $this->db->where('employeecode', $id);
        $query =  $this->db->update('registered_users', $data);
        if ($query != FALSE) {

           // echo 'success';
           // return $query;
            $this->session->set_flashdata('update_profile', 'Profile Updated Successfully');
          // redirect("users/admin");
           
        } else {
            echo "failed";
            return false;
        }
    }
    function deleteData($id)
    {
        $id = $this->uri->segment(3);
        $this->db->where('employeecode', $id);
        $this->db->delete('employeedetails');
    }

    function invoice()
    {
        $id  = $this->uri->segment(3);

        $query =  $this->db->select('formdetails.full_name,formdetails.customercode, 
        formdetails.form_id, formdetails.employeeid_fk,formdetails.startdate,formdetails.enddate,
        formdetails.address,formdetails.phone,formdetails.email,paymentrecords.National_ID,
        paymentrecords.phonenumber,paymentrecords.MpesaCode')
            ->from('formdetails')
            ->join('paymentrecords', 'paymentrecords.customercode = formdetails.customercode')
            ->where('paymentrecords.customercode',$id)
            ->get();
        if ($query->num_rows() != 0) {
            //  echo "success";
           return $query->result();
            //print_r($query->result());
           //  die();
        } else {
         // echo "failed";
            return $query->result();
        }
    }

    function index2($id)
    {
        $id = $this->uri->segment(3);
        $data = array(

            'image' =>  $this->input->post('image'),
            'username' => $this->input->post('username'),
            'position' => $this->input->post('position'),
            'amount' => $this->input->post('salary'),
            'about' => $this->input->post('about'),
            'qualifications' => $this->input->post('qualifications'),
            'experience' => $this->input->post('experience')
        );
        $this->db->where('employeecode', $id);
        $query =  $this->db->update('registered_users', $data);
        if ($query != FALSE) {

            echo 'success';
            return $query;
        } else {
            echo "failed";
            return $query;
        }
    }
    public function task($id)
    {

        $query =  $this->db->select('registered_users.username,registered_users.image , formdetails.position,formdetails.startdate,formdetails.enddate')
            ->from('formdetails')
            ->join('registered_users', 'formdetails.employeeid_fk = registered_users.employeecode')
            ->where('formdetails.employeeid_fk', $id)
            ->get();
        if ($query->num_rows() != 0) {
             // echo "success";
            return $query->result();
            // print_r($query->result());
            //die();
        } else {
                return $query->result();
              }
            
           // echo "<td> No Records found. <td>";
            //$this->session->set_flashdata('No_bookings', 'You have no tasks');
        }
    
    public function get_reviews($id)
    {

        $query =  $this->db->select('comments.Name, comments.comment,comments.date ,registered_users.username')
            ->from('formdetails')
            ->join('registered_users', 'registered_users.employeecode = formdetails.employeeid_fk')
            ->join('comments', 'comments.employeecode = formdetails.employeeid_fk')
            ->where('registered_users.employeecode', $id)
            ->get();
        if ($query->num_rows() > 0) {
        //echo "success";
            //echo $id;
             return $query->result();
           // print_r($query->result());
           // die();
        } else {
          //  return $query->result();
            //$this->session->set_flashdata('No_testimonials', 'You have no testimonials');
           // print_r($query->result());
           // die();
          // echo 'fail';
           return $query->result();

        }
    }
}
