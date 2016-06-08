<?php

class Publicbuy extends CI_Controller{
	function __construct()
 	{
   		parent::__construct();
   		$this->load->helper('url');
   		$this->load->model('searchmodel');
   	}
	public function apartment()
	{
		
	    	$category="sell"; $propertytype="Apartment";
	    	$result=$this->searchmodel->search($category,$propertytype);

	    	//var_dump($result);
	    	if($result)
		      {
		        $data=array(
		          'category' => "publicbuy",
		          'propertytype' => "apartment",
		          'result'=>$result
		          );
		        $this->load->view('public/publicsearchview',$data); 
		      }
	      else{
	    			echo "No result found!";
			   }
	    
	}

	public function apartmentfilter()
	{
	    	$category="sell"; $propertytype="Apartment" ;

	    	$district=$_POST['District'];
	    	$area=$_POST['Area'];
	    	$price_range=$_POST['Price'];

	    	if($district==="base"&&$area==="Select"&&$price_range==="base")
	    	{
	    		echo "<script type='text/javascript'>alert('Enter the search fields. Try again!')</script>";
	    		redirect('publicbuy/apartment');
	    	}
	    	else{
	    		$result=$this->searchmodel->filtered_search($category,$propertytype,$district,$area,$price_range);
	    		if($result)
			    {
			        $data=array(
			 
			          'category' => "publicbuy",
	          		  'propertytype' => "apartment",
			          'result'=>$result
			          );
			        $this->load->view('public/publicsearchview',$data); 
			    }
			    else{
	    			echo "No result found!";
			    }
	    	}
	   
	}

	public function commercialspace()
	{
		

	    	$category="sell"; $propertytype="Commercial Space";
	    	$result=$this->searchmodel->search($category,$propertytype);

	    	//var_dump($result);
	    	if($result)
	      {
	        $data=array(
	          
	          'category' => "publicpublicbuy",
	          'propertytype' => "commercialspace",
	          'result'=>$result
	          );
	        $this->load->view('public/publicsearchview',$data); 
	      }
	      else{
	    			echo "No result found!";
			    }

	}

	public function commercialspacefilter()
	{
		
	    	$category="sell"; $propertytype="Commercial Space" ;

	    	$district=$_POST['District'];
	    	$area=$_POST['Area'];
	    	$price_range=$_POST['Price'];

	    	if($district==="base"&&$area==="Select"&&$price_range==="base")
	    	{
	    		echo "<script type='text/javascript'>alert('Enter the search fields. Try again!')</script>";
	    		redirect('publicbuy/commercialspace');
	    	}
	    	else{
	    		$result=$this->searchmodel->filtered_search($category,$propertytype,$district,$area,$price_range);
	    		if($result)
			    {
			        $data=array(
			          
			          'category' => "publicbuy",
	          		  'propertytype' => "commercialspace",
			          'result'=>$result
			          );
			        $this->load->view('public/publicsearchview',$data); 
			    }
			    else{
	    			echo "No result found!";
			    }
	    	}
	}

	public function landplot()
	{
		

	    	$category="sell"; $propertytype="Land/Plot";
	    	$result=$this->searchmodel->search($category,$propertytype);

	    	//var_dump($result);
	    	if($result)
	      {
	        $data=array(
	          
	          'category' => "publicbuy",
	          'propertytype' => "landplot",
	          'result'=>$result
	          );
	        $this->load->view('public/publicsearchview',$data); 
	      }
	      else{
	    			echo "No result found!";
			    }

	    
	}

	public function landplotfilter()
	{
		
	    	$category="sell"; $propertytype="Land/Plot" ;

	    	$district=$_POST['District'];
	    	$area=$_POST['Area'];
	    	$price_range=$_POST['Price'];

	    	if($district==="base"&&$area==="Select"&&$price_range==="base")
	    	{
	    		echo "<script type='text/javascript'>alert('Enter the search fields. Try again!')</script>";
	    		redirect('publicbuy/landplot');
	    	}
	    	else{
	    		$result=$this->searchmodel->filtered_search($category,$propertytype,$district,$area,$price_range);
	    		if($result)
			    {
			        $data=array(
			          
			          'category' => "publicbuy",
	          	      'propertytype' => "landplot",
			          'result'=>$result
			          );
			        $this->load->view('public/publicsearchview',$data); 
			    }
			    else{
	    			echo "No result found!";
			    }
	    	}
	    
	}

	public function shop()
	{
		

	    	$category="sell"; $propertytype="Shop";
	    	$result=$this->searchmodel->search($category,$propertytype);

	    	//var_dump($result);
	    	if($result)
	      {
	        $data=array(
	          
	          'category' => "publicbuy",
	          'propertytype' => "shop",
	          'result'=>$result
	          );
	        $this->load->view('public/publicsearchview',$data); 
	      }
	      else{
	    			echo "No result found!";
			    }
	    
	}

	public function shopfilter()
	{
		
	    	$category="sell"; $propertytype="Shop" ;

	    	$district=$_POST['District'];
	    	$area=$_POST['Area'];
	    	$price_range=$_POST['Price'];

	    	if($district==="base"&&$area==="Select"&&$price_range==="base")
	    	{
	    		echo "<script type='text/javascript'>alert('Enter the search fields. Try again!')</script>";
	    		redirect('publicbuy/shop');
	    	}
	    	else{
	    		$result=$this->searchmodel->filtered_search($category,$propertytype,$district,$area,$price_range);
	    		if($result)
			    {
			        $data=array(
			          
			          'category' => "publicbuy",
	          		  'propertytype' => "shop",
			          'result'=>$result
			          );
			        $this->load->view('public/publicsearchview',$data); 
			    }
			    else{
	    			echo "No result found!";
			    }
	    	}
	    
	}

	public function independenthouse()
	{
		

	    	$category="sell"; $propertytype="Independent House";
	    	$result=$this->searchmodel->search($category,$propertytype);

	    	//var_dump($result);
	    	if($result)
	      {
	        $data=array(
	          
	          'category' => "publicbuy",
	          'propertytype' => "independenthouse",
	          'result'=>$result
	          );
	        $this->load->view('public/publicsearchview',$data); 
	      }
	      else{
	    			echo "No result found!";
			    }

	  
	}

	public function independenthousefilter()
	{
		
	    	$category="sell"; $propertytype="Independent House" ;

	    	$district=$_POST['District'];
	    	$area=$_POST['Area'];
	    	$price_range=$_POST['Price'];

	    	if($district==="base"&&$area==="Select"&&$price_range==="base")
	    	{
	    		echo "<script type='text/javascript'>alert('Enter the search fields. Try again!')</script>";
	    		redirect('publicbuy/independenthouse');
	    	}
	    	else{
	    		$result=$this->searchmodel->filtered_search($category,$propertytype,$district,$area,$price_range);
	    		if($result)
			    {
			        $data=array(
			          
			          'category' => "publicbuy",
	          		  'propertytype' => "independenthouse",
			          'result'=>$result
			          );
			        $this->load->view('public/publicsearchview',$data); 
			    }
			    else{
	    			echo "No result found!";
			    }
	    	}
	    
	}
}