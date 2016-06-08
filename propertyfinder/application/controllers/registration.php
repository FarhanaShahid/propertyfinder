<?php
class Registration extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('regmodel');
	}

	public function index()
	{

	}

	public function reg()
	{

		$this->load->view('public/register');
	}

	public function register()
	{
		
		$this->load->library('form_validation');

		$this->form_validation->set_rules('Name','Name','trim|required|min_length[4]|max_length[80]');
		$this->form_validation->set_rules('Email','Email','trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('Address','Address','trim');
		$this->form_validation->set_rules('Location','Location','trim');
		$this->form_validation->set_rules('Mobile','Mobile','trim|required|min_length[8]|max_length[10]');
		$this->form_validation->set_rules('Password','Password','trim|required|min_length[6]|max_length[15]');
		$this->form_validation->set_rules('ConfirmPassword','ConfirmPassword','trim|required|matches[Password]');

		if($this->form_validation->run() == FALSE)
		{
		   $this->reg();
		   echo "<script type='text/javascript'>alert('Invalid info, try again!')</script>";
		}

		else
		{
			if(!isset($_POST['Individual']) && !isset($_POST['Company'])){
				$this->load->view('public/register');
			}

			if(isset($_POST['Individual']) )
			{
				//echo "indi";
				$email=$this->input->post('Email');
				$type="Individual";
				$this->regmodel->adduser($email,$type);
				echo "<script type='text/javascript'>alert('Successfully signed up!')</script>";
				$this->load->view('public/loginview');
			}
			else if(isset($_POST['Company']))
			{
				//echo "company" ;
				$email=$this->input->post('Email');
				$type="Company";
				$this->regmodel->adduser($email,$type);
				echo "<script type='text/javascript'>alert('Successfully signed up!')</script>";
				$this->load->view('public/loginview');
			}

		}
	}
}