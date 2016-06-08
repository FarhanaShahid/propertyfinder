<?php
class Publicrent extends CI_Controller{
	function __construct()
 	{
   		parent::__construct();
   		$this->load->helper('url');
   		$this->load->model('searchmodel');
   	}

   	public function residentialapartment()
   	{

	    	$category="rent"; $propertytype="Residential Apartment";
	    	$result=$this->searchmodel->search($category,$propertytype);

	    	//var_dump($result);
	    	if($result)
	      {
	        $data=array(
	          
	          'category' => "publicrent",
	          'propertytype' => "residentialapartment",
	          'result'=>$result
	          );
	        $this->load->view('public/publicsearchview',$data); 
	      }
	      else{
	    			echo "No result found!";
			    }

   	}

   	public function residentialapartmentfilter()
   	{
   		
	    	$category="rent"; $propertytype="Residential Apartment" ;

	    	$district=$_POST['District'];
	    	$area=$_POST['Area'];
	    	$price_range=$_POST['Price'];

	    	if($district==="base"&&$area==="Select"&&$price_range==="base")
	    	{
	    		echo "<script type='text/javascript'>alert('Enter the search fields. Try again!')</script>";
	    		redirect('publicrent/residentialapartment');
	    	}
	    	else{
	    		$result=$this->searchmodel->filtered_search($category,$propertytype,$district,$area,$price_range);
	    		if($result)
			    {
			        $data=array(
			          
			          'category' => "publicrent",
	          		  'propertytype' => "residentialapartment",
			          'result'=>$result
			          );
			        $this->load->view('public/publicsearchview',$data); 
			    }
			    else{
	    			echo "No result found!";
			    }
	    	}
	    

   	}

   	public function apartmentforoffice()
   	{

	    	$category="rent"; $propertytype="Apartment for Office";
	    	$result=$this->searchmodel->search($category,$propertytype);

	    	//var_dump($result);
	    	if($result)
	      {
	        $data=array(
	          
	          'category' => "publicrent",
	          'propertytype' => "apartmentforoffice",
	          'result'=>$result
	          );
	        $this->load->view('public/publicsearchview',$data); 
	      }
	      else{
	    			echo "No result found!";
			    }

   	}

   	public function apartmentforofficefilter()
   	{
   		
	    	$category="rent"; $propertytype="Apartment for Office" ;

	    	$district=$_POST['District'];
	    	$area=$_POST['Area'];
	    	$price_range=$_POST['Price'];

	    	if($district==="base"&&$area==="Select"&&$price_range==="base")
	    	{
	    		echo "<script type='text/javascript'>alert('Enter the search fields. Try again!')</script>";
	    		redirect('publicrent/apartmentforoffice');
	    	}
	    	else{
	    		$result=$this->searchmodel->filtered_search($category,$propertytype,$district,$area,$price_range);
	    		if($result)
			    {
			        $data=array(
			          
			          'category' => "publicrent",
	          		  'propertytype' => "apartmentforoffice",
			          'result'=>$result
			          );
			        $this->load->view('public/publicsearchview',$data); 
			    }
			    else{
	    			echo "No result found!";
			    }
	    	}
	    

   	}

   	public function commercialbuilding()
   	{

	    	$category="rent"; $propertytype="Commercial Building";
	    	$result=$this->searchmodel->search($category,$propertytype);

	    	//var_dump($result);
	    	if($result)
	      {
	        $data=array(
	          
	          'category' => "publicrent",
	          'propertytype' => "apartmentforoffice",
	          'result'=>$result
	          );
	        $this->load->view('public/publicsearchview',$data); 
	      }
	      else{
	    			echo "No result found!";
			    }

   	}

   	public function commercialbuildingfilter()
   	{
   		
	    	$category="rent"; $propertytype="Commercial Building" ;

	    	$district=$_POST['District'];
	    	$area=$_POST['Area'];
	    	$price_range=$_POST['Price'];

	    	if($district==="base"&&$area==="Select"&&$price_range==="base")
	    	{
	    		echo "<script type='text/javascript'>alert('Enter the search fields. Try again!')</script>";
	    		redirect('publicrent/commercialbuilding');
	    	}
	    	else{
	    		$result=$this->searchmodel->filtered_search($category,$propertytype,$district,$area,$price_range);
	    		if($result)
			    {
			        $data=array(
			          
			          'category' => "publicrent",
	          		  'propertytype' => "commercialbuilding",
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

	    	$category="rent"; $propertytype="Shop";
	    	$result=$this->searchmodel->search($category,$propertytype);

	    	//var_dump($result);
	    	if($result)
	      {
	        $data=array(
	          
	          'category' => "publicrent",
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
   		
	    	$category="rent"; $propertytype="Shop" ;

	    	$district=$_POST['District'];
	    	$area=$_POST['Area'];
	    	$price_range=$_POST['Price'];

	    	if($district==="base"&&$area==="Select"&&$price_range==="base")
	    	{
	    		echo "<script type='text/javascript'>alert('Enter the search fields. Try again!')</script>";
	    		redirect('publicrent/shop');
	    	}
	    	else{
	    		$result=$this->searchmodel->filtered_search($category,$propertytype,$district,$area,$price_range);
	    		if($result)
			    {
			        $data=array(
			          
			          'category' => "publicrent",
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

   	public function warehouse()
   	{

	    	$category="rent"; $propertytype="Warehouse";
	    	$result=$this->searchmodel->search($category,$propertytype);

	    	//var_dump($result);
	    	if($result)
	      {
	        $data=array(
	          
	          'category' => "publicrent",
	          'propertytype' => "warehouse",
	          'result'=>$result
	          );
	        $this->load->view('public/publicsearchview',$data); 
	      }
	      else{
	    			echo "No result found!";
			    }

   	}

   	public function warehousefilter()
   	{
   		
	    	$category="rent"; $propertytype="Warehouse" ;

	    	$district=$_POST['District'];
	    	$area=$_POST['Area'];
	    	$price_range=$_POST['Price'];

	    	if($district==="base"&&$area==="Select"&&$price_range==="base")
	    	{
	    		echo "<script type='text/javascript'>alert('Enter the search fields. Try again!')</script>";
	    		redirect('publicrent/warehouse');
	    	}
	    	else{
	    		$result=$this->searchmodel->filtered_search($category,$propertytype,$district,$area,$price_range);
	    		if($result)
			    {
			        $data=array(
			          
			          'category' => "publicrent",
	          		  'propertytype' => "warehouse",
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

	    	$category="rent"; $propertytype="Independent House";
	    	$result=$this->searchmodel->search($category,$propertytype);

	    	//var_dump($result);
	    	if($result)
	      {
	        $data=array(
	          
	          'category' => "publicrent",
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
   		
	    	$category="rent"; $propertytype="Independent House" ;

	    	$district=$_POST['District'];
	    	$area=$_POST['Area'];
	    	$price_range=$_POST['Price'];

	    	if($district==="base"&&$area==="Select"&&$price_range==="base")
	    	{
	    		echo "<script type='text/javascript'>alert('Enter the search fields. Try again!')</script>";
	    		redirect('publicrent/independenthouse');
	    	}
	    	else{
	    		$result=$this->searchmodel->filtered_search($category,$propertytype,$district,$area,$price_range);
	    		if($result)
			    {
			        $data=array(
			          
			          'category' => "publicrent",
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

   	public function subletwithfamily()
   	{

	    	$category="rent"; $propertytype="Sublet with Family";
	    	$result=$this->searchmodel->search($category,$propertytype);

	    	//var_dump($result);
	    	if($result)
	      {
	        $data=array(
	          
	          'category' => "publicrent",
	          'propertytype' => "subletwithfamily",
	          'result'=>$result
	          );
	        $this->load->view('public/publicsearchview',$data); 
	      }
	      else{
	    			echo "No result found!";
			    }

   	}

   	public function subletwithfamilyfilter()
   	{
   		
	    	$category="rent"; $propertytype="Sublet with Family" ;

	    	$district=$_POST['District'];
	    	$area=$_POST['Area'];
	    	$price_range=$_POST['Price'];

	    	if($district==="base"&&$area==="Select"&&$price_range==="base")
	    	{
	    		echo "<script type='text/javascript'>alert('Enter the search fields. Try again!')</script>";
	    		redirect('publicrent/subletwithfamily');
	    	}
	    	else{
	    		$result=$this->searchmodel->filtered_search($category,$propertytype,$district,$area,$price_range);
	    		if($result)
			    {
			        $data=array(
			          
			          'category' => "publicrent",
	          		  'propertytype' => "subletwithfamily",
			          'result'=>$result
			          );
			        $this->load->view('public/publicsearchview',$data); 
			    }
			    else{
	    			echo "No result found!";
			    }
	    	}
	    

   	}

   	public function roommate()
   	{

	    	$category="rent"; $propertytype="Roommate";
	    	$result=$this->searchmodel->search($category,$propertytype);

	    	//var_dump($result);
	    	if($result)
	      {
	        $data=array(
	          
	          'category' => "publicrent",
	          'propertytype' => "roommate",
	          'result'=>$result
	          );
	        $this->load->view('public/publicsearchview',$data); 
	      }
	      else{
	    			echo "No result found!";
			    }

   	}

   	public function roommatefilter()
   	{
   		
	    	$category="rent"; $propertytype="Roommate" ;

	    	$district=$_POST['District'];
	    	$area=$_POST['Area'];
	    	$price_range=$_POST['Price'];

	    	if($district==="base"&&$area==="Select"&&$price_range==="base")
	    	{
	    		echo "<script type='text/javascript'>alert('Enter the search fields. Try again!')</script>";
	    		redirect('publicrent/roommate');
	    	}
	    	else{
	    		$result=$this->searchmodel->filtered_search($category,$propertytype,$district,$area,$price_range);
	    		if($result)
			    {
			        $data=array(
			          
			          'category' => "publicrent",
	          		  'propertytype' => "roommate",
			          'result'=>$result
			          );
			        $this->load->view('public/publicsearchview',$data); 
			    }
			    else{
	    			echo "No result found!";
			    }
	    	}
	    

   	}

   	public function garage()
   	{

	    	$category="rent"; $propertytype="Garage";
	    	$result=$this->searchmodel->search($category,$propertytype);

	    	//var_dump($result);
	    	if($result)
	      {
	        $data=array(
	          
	          'category' => "publicrent",
	          'propertytype' => "garage",
	          'result'=>$result
	          );
	        $this->load->view('public/publicsearchview',$data); 
	      }
	      else{
	    			echo "No result found!";
			    }

   	}

   	public function garagefilter()
   	{
   		
	    	$category="rent"; $propertytype="Garage" ;

	    	$district=$_POST['District'];
	    	$area=$_POST['Area'];
	    	$price_range=$_POST['Price'];

	    	if($district==="base"&&$area==="Select"&&$price_range==="base")
	    	{
	    		echo "<script type='text/javascript'>alert('Enter the search fields. Try again!')</script>";
	    		redirect('publicrent/garage');
	    	}
	    	else{
	    		$result=$this->searchmodel->filtered_search($category,$propertytype,$district,$area,$price_range);
	    		if($result)
			    {
			        $data=array(
			          
			          'category' => "publicrent",
	          		  'propertytype' => "garage",
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