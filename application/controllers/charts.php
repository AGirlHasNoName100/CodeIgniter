<?php
class Charts extends CI_Controller
{
    public function chart()
    {
        $query = $this->db->query("SELECT SUM(amount) as count FROM mpesarecords 
            GROUP BY MONTH(transactiondate) ORDER BY transactiondate"); 
        $data['click'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
     //   $query = $this->db->query("SELECT SUM(numberofview) as count FROM demo_viewer 
    //        GROUP BY YEAR(created_at) ORDER BY created_at"); 
     //   $data['viewer'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $this->load->view('users/chart', $data);
    }

}
?>