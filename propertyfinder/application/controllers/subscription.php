<?php

class Subscription extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('subscriptionmodel');
	}

	function addsubscription()
	{
		 if($this->session->userdata('logged_in'))
	   {
	     $session_data = $this->session->userdata('logged_in');
	     $uid=$session_data['id'];
	     if(isset($_GET['did']) )
		{
			$did=$_GET['did'];

			//print_r($uid); print_r($did);

			$this->subscriptionmodel->subscribe($uid,$did);
			redirect('home/developer');
		}
	   }
	   else{
	    redirect('login','refresh');
	   }
		
	}

	function removesubscription()
	{
		if($this->session->userdata('logged_in'))
	   {
	     $session_data = $this->session->userdata('logged_in');
	     $uid=$session_data['id'];
	     if(isset($_GET['did']) )
		{
			$did=$_GET['did'];

			//print_r($uid); print_r($did);

			$this->subscriptionmodel->unsubscribe($uid,$did);
			redirect('home/developer');
		}
	   }
	   else{
	    redirect('login','refresh');
	   }
	}
}