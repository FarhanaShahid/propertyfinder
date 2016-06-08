<?php

class Notification extends CI_Controller{

	function __construct()
	{
   		parent::__construct();
   		$this->load->library('session');
   		$this->load->helper('form','url');
   		$this->load->model('notificationmodel');
   	}

   	public function setrequirement()
   	{
   		$prices=array(1000,3000,6000,10000,15000,20000,25000,50000,100000,300000,500000,1000000,2000000,4000000,7000000,10000000,30000000);

    	$category=$_POST['RentBuy'];
	    $propertytype=$_POST['PropertyType'];
	    $district=$_POST['District'];
	    $area=$_POST['Area'];
	    $price=$this->input->post('Price');

	    if($category==="base"||$propertytype==="Select")
	    {
	    	echo "<script type='text/javascript'>alert('Select the reuired information. Try again!')</script>";
      		redirect('home/requirement','refresh');
	    }
	    else{
	    	if($district==="base" && $area==="Select" && $price==="base")
	    	{
	    		echo "<script type='text/javascript'>alert('Select the reuired information. Try again!')</script>";
      			redirect('home/requirement','refresh');
	    	}
	    	else{
	    		if($this->session->userdata('logged_in'))
	    		{
	    			$session_data = $this->session->userdata('logged_in');
	    			$id=$session_data['id'];

		    		if($district==="base"&& $area==="Select" && $price!=="base")
		    		{
		    			$low_range=(int)$price ;
		    			$up_range=$low_range+1;

		    			$data=array('userId'=>$id,'category'=>$category,'propertyType'=>$propertytype,
		    				'district'=>"",'area'=>"",'lowPrice'=>$prices[$low_range],'upPrice'=>$prices[$up_range]);
		    		}

		    		else if($price==="base" && $district!=="base" && $area!=="Select")
		    		{
		    			$data=array('userId'=>$id,'category'=>$category,'propertyType'=>$propertytype,
		    				'district'=>$district,'area'=>$area,'lowPrice'=>0,'upPrice'=>0);
		    		}

		    		else if($price!=="base" && $district!=="base" && $area!=="Select")
		    		{
		    			$low_range=(int)$price ;
		    			$up_range=$low_range+1;

		    			$data=array('userId'=>$id,'category'=>$category,'propertyType'=>$propertytype,
		    				'district'=>$district,'area'=>$area,'lowPrice'=>$prices[$low_range],'upPrice'=>$prices[$up_range]);
		    		}

	    			$this->notificationmodel->setnotification($data);
	    			redirect('home/requirement','refresh');
	    		}
	    		else{
	    			redirect('login','refresh');
	    		}

	    	}
	    }
	    
   	}

   	public function deleterequirement()
   	{
   		if($this->session->userdata('logged_in'))
   		{
   			$session_data = $this->session->userdata('logged_in');

   			if(isset($_GET['pid']))
   			{
   				$pid=$_GET['pid'];

   				$this->notificationmodel->removenotification($pid);
   				redirect('home/requirement','refresh');
   			}
   		}
   		else{
   			redirect('login','refresh');
   		}
   	}

   	public function getnotification()
   	{
   		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$id=$session_data['id'];
			$count=$this->notificationmodel->newnotificationcount($session_data['id']);

			$result=$this->notificationmodel->getallnotification($id);

			$data=array('id'=>$id,'username'=>$session_data['username'],'result'=>$result,'count'=>$count);
			$this->load->view('private/notificationview',$data);
		}
		else{
			redirect('login','refresh');
		}
   	}
}