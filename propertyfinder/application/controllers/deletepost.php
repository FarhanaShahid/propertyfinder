<?php
class Deletepost extends CI_Controller{

	function __construct()
 	{
   		parent::__construct();
   		$this->load->library('session');
   		$this->load->helper('url');
   		$this->load->model('deletepostmodel');
   	}
	public function deletemypost(){
		if($this->session->userdata('logged_in'))
   		{
     		$session_data = $this->session->userdata('logged_in');

     		if ( isset($_GET['pid']) ) {
	    		$pid = $_GET['pid'];
	    		
	    		$this->deletepostmodel->postdelete($pid);
	    		redirect('home/yourposts');
     		}
     	}
     	else{
     		redirect('login','refresh');
     	}
     }
	
}