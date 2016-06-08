<?php

class Buy extends CI_Controller{

	function __construct()
 	{
   		parent::__construct();
   		$this->load->library('session');
   		$this->load->helper('url');
   		$this->load->model('searchmodel');
   		$this->load->model('notificationmodel');
   	}
	public function apartment()
	{
		if($this->session->userdata('logged_in'))
	   	{
	    	$session_data = $this->session->userdata('logged_in');

	    	$category="sell"; $propertytype="Apartment";
	    	$result=$this->searchmodel->search($category,$propertytype);
	    	 $count=$this->notificationmodel->newnotificationcount($session_data['id']);

	    	//var_dump($result);
	    	if($result)
	      {
	        $data=array(
	          'username'=>$session_data['username'],
	          'category' => "buy",
	          'propertytype' => "apartment",
	          'result'=>$result,
	          'count'=>$count
	          );
	        $this->load->view('private/searchview',$data); 
	      }
	      else{
	    			echo "No result found!";
			    }

	    }
	    else{
	    	redirect('login','refresh');
	    }
	}

	public function apartmentfilter()
	{
		if($this->session->userdata('logged_in'))
	   	{
	    	$session_data = $this->session->userdata('logged_in');
	    	$category="sell"; $propertytype="Apartment" ;
	    	 $count=$this->notificationmodel->newnotificationcount($session_data['id']);

	    	$district=$_POST['District'];
	    	$area=$_POST['Area'];
	    	$price_range=$_POST['Price'];

	    	if($district==="base"&&$area==="Select"&&$price_range==="base")
	    	{
	    		echo "<script type='text/javascript'>alert('Enter the search fields. Try again!')</script>";
	    		redirect('buy/apartment');
	    	}
	    	else{
	    		$result=$this->searchmodel->filtered_search($category,$propertytype,$district,$area,$price_range);
	    		if($result)
			    {
			        $data=array(
			          'username'=>$session_data['username'],
			          'category' => "buy",
	          		  'propertytype' => "apartment",
			          'result'=>$result,
			          'count'=>$count
			          );
			        $this->load->view('private/searchview',$data); 
			    }
			    else{
	    			echo "No result found!";
			    }
	    	}
	    }
	    else{
	    	redirect('login','refresh');
	    }
	}

	public function commercialspace()
	{
		if($this->session->userdata('logged_in'))
	   	{
	    	$session_data = $this->session->userdata('logged_in');

	    	$category="sell"; $propertytype="Commercial Space";
	    	$result=$this->searchmodel->search($category,$propertytype);
	    	 $count=$this->notificationmodel->newnotificationcount($session_data['id']);

	    	//var_dump($result);
	    	if($result)
	      {
	        $data=array(
	          'username'=>$session_data['username'],
	          'category' => "buy",
	          'propertytype' => "commercialspace",
	          'result'=>$result,
	          'count'=>$count
	          );
	        $this->load->view('private/searchview',$data); 
	      }
	      else{
	    			echo "No result found!";
			    }

	    }
	    else{
	    	redirect('login','refresh');
	    }
	}

	public function commercialspacefilter()
	{
		if($this->session->userdata('logged_in'))
	   	{
	    	$session_data = $this->session->userdata('logged_in');
	    	$category="sell"; $propertytype="Commercial Space" ;
	    	 $count=$this->notificationmodel->newnotificationcount($session_data['id']);

	    	$district=$_POST['District'];
	    	$area=$_POST['Area'];
	    	$price_range=$_POST['Price'];

	    	if($district==="base"&&$area==="Select"&&$price_range==="base")
	    	{
	    		echo "<script type='text/javascript'>alert('Enter the search fields. Try again!')</script>";
	    		redirect('buy/commercialspace');
	    	}
	    	else{
	    		$result=$this->searchmodel->filtered_search($category,$propertytype,$district,$area,$price_range);
	    		if($result)
			    {
			        $data=array(
			          'username'=>$session_data['username'],
			          'category' => "buy",
	          		  'propertytype' => "commercialspace",
			          'result'=>$result,
			          'count'=>$count
			          );
			        $this->load->view('private/searchview',$data); 
			    }
			    else{
	    			echo "No result found!";
			    }
	    	}
	    }
	    else{
	    	redirect('login','refresh');
	    }
	}

	public function landplot()
	{
		if($this->session->userdata('logged_in'))
	   	{
	    	$session_data = $this->session->userdata('logged_in');

	    	$category="sell"; $propertytype="Land/Plot";
	    	$result=$this->searchmodel->search($category,$propertytype);
	    	 $count=$this->notificationmodel->newnotificationcount($session_data['id']);

	    	//var_dump($result);
	    	if($result)
	      {
	        $data=array(
	          'username'=>$session_data['username'],
	          'category' => "buy",
	          'propertytype' => "landplot",
	          'result'=>$result,
	          'count'=>$count
	          );
	        $this->load->view('private/searchview',$data); 
	      }
	      else{
	    			echo "No result found!";
			    }

	    }
	    else{
	    	redirect('login','refresh');
	    }
	}

	public function landplotfilter()
	{
		if($this->session->userdata('logged_in'))
	   	{
	    	$session_data = $this->session->userdata('logged_in');
	    	$category="sell"; $propertytype="Land/Plot" ;
	    	 $count=$this->notificationmodel->newnotificationcount($session_data['id']);

	    	$district=$_POST['District'];
	    	$area=$_POST['Area'];
	    	$price_range=$_POST['Price'];

	    	if($district==="base"&&$area==="Select"&&$price_range==="base")
	    	{
	    		echo "<script type='text/javascript'>alert('Enter the search fields. Try again!')</script>";
	    		redirect('buy/landplot');
	    	}
	    	else{
	    		$result=$this->searchmodel->filtered_search($category,$propertytype,$district,$area,$price_range);
	    		if($result)
			    {
			        $data=array(
			          'username'=>$session_data['username'],
			          'category' => "buy",
	          	      'propertytype' => "landplot",
			          'result'=>$result,
			          'count'=>$count
			          );
			        $this->load->view('private/searchview',$data); 
			    }
			    else{
	    			echo "No result found!";
			    }
	    	}
	    }
	    else{
	    	redirect('login','refresh');
	    }
	}

	public function shop()
	{
		if($this->session->userdata('logged_in'))
	   	{
	    	$session_data = $this->session->userdata('logged_in');

	    	$category="sell"; $propertytype="Shop";
	    	$result=$this->searchmodel->search($category,$propertytype);
	    	 $count=$this->notificationmodel->newnotificationcount($session_data['id']);

	    	//var_dump($result);
	    	if($result)
	      {
	        $data=array(
	          'username'=>$session_data['username'],
	          'category' => "buy",
	          'propertytype' => "shop",
	          'result'=>$result,
	          'count'=>$count
	          );
	        $this->load->view('private/searchview',$data); 
	      }
	      else{
	    			echo "No result found!";
			    }
	    }
	    else{
	    	redirect('login','refresh');
	    }
	}

	public function shopfilter()
	{
		if($this->session->userdata('logged_in'))
	   	{
	    	$session_data = $this->session->userdata('logged_in');
	    	$category="sell"; $propertytype="Shop" ;
	    	 $count=$this->notificationmodel->newnotificationcount($session_data['id']);

	    	$district=$_POST['District'];
	    	$area=$_POST['Area'];
	    	$price_range=$_POST['Price'];

	    	if($district==="base"&&$area==="Select"&&$price_range==="base")
	    	{
	    		echo "<script type='text/javascript'>alert('Enter the search fields. Try again!')</script>";
	    		redirect('buy/shop');
	    	}
	    	else{
	    		$result=$this->searchmodel->filtered_search($category,$propertytype,$district,$area,$price_range);
	    		if($result)
			    {
			        $data=array(
			          'username'=>$session_data['username'],
			          'category' => "buy",
	          		  'propertytype' => "shop",
			          'result'=>$result,
			          'count'=>$count
			          );
			        $this->load->view('private/searchview',$data); 
			    }
			    else{
	    			echo "No result found!";
			    }
	    	}
	    }
	    else{
	    	redirect('login','refresh');
	    }
	}

	public function independenthouse()
	{
		if($this->session->userdata('logged_in'))
	   	{
	    	$session_data = $this->session->userdata('logged_in');

	    	$category="sell"; $propertytype="Independent House";
	    	$result=$this->searchmodel->search($category,$propertytype);
	    	 $count=$this->notificationmodel->newnotificationcount($session_data['id']);

	    	//var_dump($result);
	    	if($result)
	      {
	        $data=array(
	          'username'=>$session_data['username'],
	          'category' => "buy",
	          'propertytype' => "independenthouse",
	          'result'=>$result,
	          'count'=>$count
	          );
	        $this->load->view('private/searchview',$data); 
	      }
	      else{
	    			echo "No result found!";
			    }

	    }
	    else{
	    	redirect('login','refresh');
	    }
	}

	public function independenthousefilter()
	{
		if($this->session->userdata('logged_in'))
	   	{
	    	$session_data = $this->session->userdata('logged_in');
	    	$category="sell"; $propertytype="Independent House" ;
	    	 $count=$this->notificationmodel->newnotificationcount($session_data['id']);

	    	$district=$_POST['District'];
	    	$area=$_POST['Area'];
	    	$price_range=$_POST['Price'];

	    	if($district==="base"&&$area==="Select"&&$price_range==="base")
	    	{
	    		echo "<script type='text/javascript'>alert('Enter the search fields. Try again!')</script>";
	    		redirect('buy/independenthouse');
	    	}
	    	else{
	    		$result=$this->searchmodel->filtered_search($category,$propertytype,$district,$area,$price_range);
	    		if($result)
			    {
			        $data=array(
			          'username'=>$session_data['username'],
			          'category' => "buy",
	          		  'propertytype' => "independenthouse",
			          'result'=>$result,
			          'count'=>$count
			          );
			        $this->load->view('private/searchview',$data); 
			    }
			    else{
	    			echo "No result found!";
			    }
	    	}
	    }
	    else{
	    	redirect('login','refresh');
	    }
	}
}