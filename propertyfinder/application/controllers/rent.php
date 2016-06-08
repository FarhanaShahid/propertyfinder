<?php
class Rent extends CI_Controller{

	function __construct()
 	{
   		parent::__construct();
   		$this->load->library('session');
   		$this->load->helper('url');
   		$this->load->model('searchmodel');
   		$this->load->model('notificationmodel');
   	}

   	public function residentialapartment()
   	{
   		if($this->session->userdata('logged_in'))
	   	{
	    	$session_data = $this->session->userdata('logged_in');

	    	$category="rent"; $propertytype="Residential Apartment";
	    	$result=$this->searchmodel->search($category,$propertytype);
	    	 $count=$this->notificationmodel->newnotificationcount($session_data['id']);

	    	//var_dump($result);
	    	if($result)
	      {
	        $data=array(
	          'username'=>$session_data['username'],
	          'category' => "rent",
	          'propertytype' => "residentialapartment",
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

   	public function residentialapartmentfilter()
   	{
   		if($this->session->userdata('logged_in'))
	   	{
	    	$session_data = $this->session->userdata('logged_in');
	    	$category="rent"; $propertytype="Residential Apartment" ;
	    	 $count=$this->notificationmodel->newnotificationcount($session_data['id']);

	    	$district=$_POST['District'];
	    	$area=$_POST['Area'];
	    	$price_range=$_POST['Price'];

	    	if($district==="base"&&$area==="Select"&&$price_range==="base")
	    	{
	    		echo "<script type='text/javascript'>alert('Enter the search fields. Try again!')</script>";
	    		redirect('rent/residentialapartment');
	    	}
	    	else{
	    		$result=$this->searchmodel->filtered_search($category,$propertytype,$district,$area,$price_range);
	    		if($result)
			    {
			        $data=array(
			          'username'=>$session_data['username'],
			          'category' => "rent",
	          		  'propertytype' => "residentialapartment",
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

   	public function apartmentforoffice()
   	{
   		if($this->session->userdata('logged_in'))
	   	{
	    	$session_data = $this->session->userdata('logged_in');

	    	$category="rent"; $propertytype="Apartment for Office";
	    	$result=$this->searchmodel->search($category,$propertytype);
	    	 $count=$this->notificationmodel->newnotificationcount($session_data['id']);

	    	//var_dump($result);
	    	if($result)
	      {
	        $data=array(
	          'username'=>$session_data['username'],
	          'category' => "rent",
	          'propertytype' => "apartmentforoffice",
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

   	public function apartmentforofficefilter()
   	{
   		if($this->session->userdata('logged_in'))
	   	{
	    	$session_data = $this->session->userdata('logged_in');
	    	$category="rent"; $propertytype="Apartment for Office" ;
	    	 $count=$this->notificationmodel->newnotificationcount($session_data['id']);

	    	$district=$_POST['District'];
	    	$area=$_POST['Area'];
	    	$price_range=$_POST['Price'];

	    	if($district==="base"&&$area==="Select"&&$price_range==="base")
	    	{
	    		echo "<script type='text/javascript'>alert('Enter the search fields. Try again!')</script>";
	    		redirect('rent/apartmentforoffice');
	    	}
	    	else{
	    		$result=$this->searchmodel->filtered_search($category,$propertytype,$district,$area,$price_range);
	    		if($result)
			    {
			        $data=array(
			          'username'=>$session_data['username'],
			          'category' => "rent",
	          		  'propertytype' => "apartmentforoffice",
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

   	public function commercialbuilding()
   	{
   		if($this->session->userdata('logged_in'))
	   	{
	    	$session_data = $this->session->userdata('logged_in');

	    	$category="rent"; $propertytype="Commercial Building";
	    	$result=$this->searchmodel->search($category,$propertytype);
	    	 $count=$this->notificationmodel->newnotificationcount($session_data['id']);

	    	//var_dump($result);
	    	if($result)
	      {
	        $data=array(
	          'username'=>$session_data['username'],
	          'category' => "rent",
	          'propertytype' => "commercialbuilding",
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

   	public function commercialbuildingfilter()
   	{
   		if($this->session->userdata('logged_in'))
	   	{
	    	$session_data = $this->session->userdata('logged_in');
	    	$category="rent"; $propertytype="Commercial Building" ;
	    	 $count=$this->notificationmodel->newnotificationcount($session_data['id']);

	    	$district=$_POST['District'];
	    	$area=$_POST['Area'];
	    	$price_range=$_POST['Price'];

	    	if($district==="base"&&$area==="Select"&&$price_range==="base")
	    	{
	    		echo "<script type='text/javascript'>alert('Enter the search fields. Try again!')</script>";
	    		redirect('rent/commercialbuilding');
	    	}
	    	else{
	    		$result=$this->searchmodel->filtered_search($category,$propertytype,$district,$area,$price_range);
	    		if($result)
			    {
			        $data=array(
			          'username'=>$session_data['username'],
			          'category' => "rent",
	          		  'propertytype' => "commercialbuilding",
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

	    	$category="rent"; $propertytype="Shop";
	    	$result=$this->searchmodel->search($category,$propertytype);
	    	 $count=$this->notificationmodel->newnotificationcount($session_data['id']);

	    	//var_dump($result);
	    	if($result)
	      {
	        $data=array(
	          'username'=>$session_data['username'],
	          'category' => "rent",
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
	    	$category="rent"; $propertytype="Shop" ;
	    	 $count=$this->notificationmodel->newnotificationcount($session_data['id']);

	    	$district=$_POST['District'];
	    	$area=$_POST['Area'];
	    	$price_range=$_POST['Price'];

	    	if($district==="base"&&$area==="Select"&&$price_range==="base")
	    	{
	    		echo "<script type='text/javascript'>alert('Enter the search fields. Try again!')</script>";
	    		redirect('rent/shop');
	    	}
	    	else{
	    		$result=$this->searchmodel->filtered_search($category,$propertytype,$district,$area,$price_range);
	    		if($result)
			    {
			        $data=array(
			          'username'=>$session_data['username'],
			          'category' => "rent",
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

   	public function warehouse()
   	{
   		if($this->session->userdata('logged_in'))
	   	{
	    	$session_data = $this->session->userdata('logged_in');

	    	$category="rent"; $propertytype="Warehouse";
	    	$result=$this->searchmodel->search($category,$propertytype);
	    	 $count=$this->notificationmodel->newnotificationcount($session_data['id']);

	    	//var_dump($result);
	    	if($result)
	      {
	        $data=array(
	          'username'=>$session_data['username'],
	          'category' => "rent",
	          'propertytype' => "warehouse",
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

   	public function warehousefilter()
   	{
   		if($this->session->userdata('logged_in'))
	   	{
	    	$session_data = $this->session->userdata('logged_in');
	    	$category="rent"; $propertytype="Warehouse" ;
	    	 $count=$this->notificationmodel->newnotificationcount($session_data['id']);

	    	$district=$_POST['District'];
	    	$area=$_POST['Area'];
	    	$price_range=$_POST['Price'];

	    	if($district==="base"&&$area==="Select"&&$price_range==="base")
	    	{
	    		echo "<script type='text/javascript'>alert('Enter the search fields. Try again!')</script>";
	    		redirect('rent/warehouse');
	    	}
	    	else{
	    		$result=$this->searchmodel->filtered_search($category,$propertytype,$district,$area,$price_range);
	    		if($result)
			    {
			        $data=array(
			          'username'=>$session_data['username'],
			          'category' => "rent",
	          		  'propertytype' => "warehouse",
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

	    	$category="rent"; $propertytype="Independent House";
	    	$result=$this->searchmodel->search($category,$propertytype);
	    	 $count=$this->notificationmodel->newnotificationcount($session_data['id']);

	    	//var_dump($result);
	    	if($result)
	      {
	        $data=array(
	          'username'=>$session_data['username'],
	          'category' => "rent",
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
	    	$category="rent"; $propertytype="Independent House" ;
	    	 $count=$this->notificationmodel->newnotificationcount($session_data['id']);

	    	$district=$_POST['District'];
	    	$area=$_POST['Area'];
	    	$price_range=$_POST['Price'];

	    	if($district==="base"&&$area==="Select"&&$price_range==="base")
	    	{
	    		echo "<script type='text/javascript'>alert('Enter the search fields. Try again!')</script>";
	    		redirect('rent/independenthouse');
	    	}
	    	else{
	    		$result=$this->searchmodel->filtered_search($category,$propertytype,$district,$area,$price_range);
	    		if($result)
			    {
			        $data=array(
			          'username'=>$session_data['username'],
			          'category' => "rent",
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

   	public function subletwithfamily()
   	{
   		if($this->session->userdata('logged_in'))
	   	{
	    	$session_data = $this->session->userdata('logged_in');

	    	$category="rent"; $propertytype="Sublet with Family";
	    	$result=$this->searchmodel->search($category,$propertytype);
	    	 $count=$this->notificationmodel->newnotificationcount($session_data['id']);

	    	//var_dump($result);
	    	if($result)
	      {
	        $data=array(
	          'username'=>$session_data['username'],
	          'category' => "rent",
	          'propertytype' => "subletwithfamily",
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

   	public function subletwithfamilyfilter()
   	{
   		if($this->session->userdata('logged_in'))
	   	{
	    	$session_data = $this->session->userdata('logged_in');
	    	$category="rent"; $propertytype="Sublet with Family" ;
	    	 $count=$this->notificationmodel->newnotificationcount($session_data['id']);

	    	$district=$_POST['District'];
	    	$area=$_POST['Area'];
	    	$price_range=$_POST['Price'];

	    	if($district==="base"&&$area==="Select"&&$price_range==="base")
	    	{
	    		echo "<script type='text/javascript'>alert('Enter the search fields. Try again!')</script>";
	    		redirect('rent/subletwithfamily');
	    	}
	    	else{
	    		$result=$this->searchmodel->filtered_search($category,$propertytype,$district,$area,$price_range);
	    		if($result)
			    {
			        $data=array(
			          'username'=>$session_data['username'],
			          'category' => "rent",
	          		  'propertytype' => "subletwithfamily",
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

   	public function roommate()
   	{
   		if($this->session->userdata('logged_in'))
	   	{
	    	$session_data = $this->session->userdata('logged_in');

	    	$category="rent"; $propertytype="Roommate";
	    	$result=$this->searchmodel->search($category,$propertytype);
	    	 $count=$this->notificationmodel->newnotificationcount($session_data['id']);

	    	//var_dump($result);
	    	if($result)
	      {
	        $data=array(
	          'username'=>$session_data['username'],
	          'category' => "rent",
	          'propertytype' => "roommate",
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

   	public function roommatefilter()
   	{
   		if($this->session->userdata('logged_in'))
	   	{
	    	$session_data = $this->session->userdata('logged_in');
	    	$category="rent"; $propertytype="Roommate" ;
	    	 $count=$this->notificationmodel->newnotificationcount($session_data['id']);

	    	$district=$_POST['District'];
	    	$area=$_POST['Area'];
	    	$price_range=$_POST['Price'];

	    	if($district==="base"&&$area==="Select"&&$price_range==="base")
	    	{
	    		echo "<script type='text/javascript'>alert('Enter the search fields. Try again!')</script>";
	    		redirect('rent/roommate');
	    	}
	    	else{
	    		$result=$this->searchmodel->filtered_search($category,$propertytype,$district,$area,$price_range);
	    		if($result)
			    {
			        $data=array(
			          'username'=>$session_data['username'],
			          'category' => "rent",
	          		  'propertytype' => "roommate",
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

   	public function garage()
   	{
   		if($this->session->userdata('logged_in'))
	   	{
	    	$session_data = $this->session->userdata('logged_in');

	    	$category="rent"; $propertytype="Garage";
	    	$result=$this->searchmodel->search($category,$propertytype);
	    	 $count=$this->notificationmodel->newnotificationcount($session_data['id']);

	    	//var_dump($result);
	    	if($result)
	      {
	        $data=array(
	          'username'=>$session_data['username'],
	          'category' => "rent",
	          'propertytype' => "garage",
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

   	public function garagefilter()
   	{
   		if($this->session->userdata('logged_in'))
	   	{
	    	$session_data = $this->session->userdata('logged_in');
	    	$category="rent"; $propertytype="Roommate" ;

	    	$district=$_POST['District'];
	    	$area=$_POST['Area'];
	    	$price_range=$_POST['Price'];
	    	 $count=$this->notificationmodel->newnotificationcount($session_data['id']);

	    	if($district==="base"&&$area==="Select"&&$price_range==="base")
	    	{
	    		echo "<script type='text/javascript'>alert('Enter the search fields. Try again!')</script>";
	    		redirect('rent/garage');
	    	}
	    	else{
	    		$result=$this->searchmodel->filtered_search($category,$propertytype,$district,$area,$price_range);
	    		if($result)
			    {
			        $data=array(
			          'username'=>$session_data['username'],
			          'category' => "rent",
	          		  'propertytype' => "garage",
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