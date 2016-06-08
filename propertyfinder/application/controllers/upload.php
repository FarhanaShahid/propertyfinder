<?php
class Upload extends CI_Controller{

	function __construct()
	{
	   parent::__construct();

	   $this->load->database();
	   $this->load->library('session');
	   $this->load->model('uploadmodel');
	}

	public function do_upload(){

		$this->load->library('form_validation');
		//echo "string";

		$this->form_validation->set_rules('Price','Price','trim|required|numeric');
		$this->form_validation->set_rules('Size','Size','trim|required|numeric');

		if($this->form_validation->run() == FALSE)
	    {	       
	      echo "<script type='text/javascript'>alert('Invalid info. Try again!')</script>";
	      redirect('home/postad','refresh');
	    }
	    else
	    {
		    $type=$_POST['RentSell'];
		    $propertytype=$_POST['PropertyType'];
		    $district=$_POST['District'];
		    $area=$_POST['Area'];
		    $size=$_POST['SizeIn'];

		    if($type==="base"||$propertytype==="Select"||$district==="base"||$area==="Select"||$size==="base")
		    {
		    	echo "<script type='text/javascript'>alert('Select the reuired information. Try again!')</script>";
	      		redirect('home/postad','refresh');
		    }
		    else
		    {
		    	if($this->session->userdata('logged_in'))
		       {
		          $session_data = $this->session->userdata('logged_in');
		          $id = $session_data['id'] ;
		          //print_r($id);

		          $config['upload_path'] = './assets/uploads/';
				  $config['allowed_types'] = 'gif|jpg|jpeg|png';
				  $config['max_size']	= '4000';

				  $this->load->library('upload', $config);
				  $path ;
					if($this->upload->do_upload())
					{
						$data = array('upload_data' => $this->upload->data());
						$upload_data=$data['upload_data'];
						$path=$upload_data['file_name'];

					}
					else{
						// 
						$path="propertyfinder.png";
					}

					$data=array(
						'ownerId'=>$id,
						'category'=>$type,
						'propertyType'=>$propertytype,
						'district'=>$district,
						'area'=>$area,
						'price'=>$this->input->post('Price'),
						'sizeIn'=>$size,
						'size'=>$this->input->post('Size'),
						'description'=>$this->input->post('Description'),
						'image'=>$path);

					$this->uploadmodel->uploadpost($data);
		          	echo "<script type='text/javascript'>alert('Your Post has been saved!')</script>";
		          	redirect('home/yourPosts','refresh');
		        }
		        else{
		        	redirect('login','refresh');
		        }

		    }
		}

	}
}