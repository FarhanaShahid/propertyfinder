<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verifylogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->helper('url');
   $this->load->model('loginmodel','',TRUE);
   $this->load->library('unit_test') ;
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');
   $this->load->library('session');

   $this->form_validation->set_rules('Email', 'Email', 'trim|required');
   $this->form_validation->set_rules('Password', 'Password', 'trim|required');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->load->view('public/loginview');
     echo "<script type='text/javascript'>alert('Wrong email or password. Try again !')</script>";
   }
   else
   {
     //Go to private area
      $email = $this->input->post('Email');
      $password =$this->input->post('Password') ;
     $result=$this->check_database($email,$password) ;
     if($result)
     {
        redirect('home','refresh');
     }
     else
     {
      echo "<script type='text/javascript'>alert('Wrong info. Try again!')</script>";
      redirect('login', 'refresh');
     }
   }

 }

 function check_database($email,$password)
 {
   //Field validation succeeded.  Validate against database
   
   //query the database
   $result = $this->loginmodel->login($email, $password);

   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->id,
         'username' => $row->username,
         'usertype' => $row->usertype
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     return FALSE;
   }
 }

 function unit_testing()
 {
  $email=array("farhana@gmail.com","fara@gmail.com","farhana@gmail.com","abcdmail","abcdmail","farhana@gmail.com","faria@gmail.com");
  $password=array("1205113/","1205113/","123456","12s","1205113/","ahdg","123456");
  $expected_result=array("is_true","is_false","is_false","is_false","is_false","is_false","is_true");

  for($i=0;$i<count($email); $i++)
  {
    $expt_result=$this->check_database($email[$i],$password[$i]);
    $this->unit->run($expt_result,$expected_result[$i]);

  }
  $this->load->view('public/unit_testing_result');

 }
}
?>