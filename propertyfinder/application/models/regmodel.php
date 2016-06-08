<?php
class Regmodel extends CI_Model
{
	public function __construct()
	 {
	  	parent::__construct();
	 }

	public function adduser($email,$type)
	{
		$this -> db -> select('id');
	   	$this -> db -> from('users');
	   	$this -> db -> where('email',$email);

	   	$query = $this -> db -> get();
 
	   if($query -> num_rows() == 0)
	   {

	    	$data=array(
	    		'username'=>$this->input->post('Name'),
	    		'email'=>$this->input->post('Email'),
	    		'password'=>$this->input->post('Password'),
	    		'address'=>$this->input->post('Address'),
	    		'location'=>$this->input->post('Location'),
	    		'contact'=>$this->input->post('Mobile'),
	    		'usertype'=> $type
	    		);

	    	//var_dump($data);

	    	$this->db->insert('users',$data);
	    	//return true ;
	   }

	   else
	   {
	   		//already existing account with email
	   		echo "<script type='text/javascript'>alert('An account already exists with the email you provided. Try with other!')</script>"; 
	   }
	}
}