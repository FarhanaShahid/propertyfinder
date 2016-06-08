<?php
class Publichome extends CI_Controller{

	function index()
	{
		$this->load->view('public/publichomeview');
		
	}

	public function developerlist()
	{
		$this->load->model('developermodel');
		$result=$this->developermodel->getalldeveloper();

		if($result)
		{
			$data=array('names'=>$result);
			$this->load->view('public/publicdeveloperlist',$data);
		}

	}

  public function aboutus()
  {
    $this->load->view('public/aboutus');

  }

  public function contactus()
    {
      $this->load->view('public/contactus');
    }

	public function developerinfo()
	{
		$this->load->model('editmodel');
		if (isset($_GET['did']))
     {
      $did=$_GET['did'];
      
      $result1=$this->editmodel->loadinfo($did);
       $result2=$this->editmodel->loadCompanyInfo($did);

       if($result1 && $result2)
       {
          $user_info1=array();
          $user_info2=array();
         foreach ($result1 as $row) {
           
           $user_info1=array(
              'id'=> $did ,
               'username' => $row->username ,
               'email'=>$row->email,
               'address'=> $row->address,
               'location'=>$row->location ,
               'contact'=>$row->contact ,
               'password'=>$row->password
            );
         }
         foreach ($result2 as $row) {
           $user_info2=array(
            'phone'=>$row->phone,
            'fax'=>$row->fax,
            'web'=>$row->web
            );
         }

         $user_info=array(
          'id'=>$did, 'username'=>$user_info1['username'],'email'=>$user_info1['email'],'address'=>$user_info1['address'],'location'=>$user_info1['location'],
          'contact'=>$user_info1['contact'],'password'=>$user_info1['password'],'phone'=>$user_info2['phone'],
          'fax'=>$user_info2['fax'],'web'=>$user_info2['web']
          );

         $this->load->view('public/publicdeveloperpage',$user_info);
       }
       else if($result1 && !$result2)
       {
        $user_info=array();
         foreach ($result1 as $row) {
           
           $user_info=array(
              'id'=> $did ,
               'username' => $row->username ,
               'email'=>$row->email,
               'address'=> $row->address,
               'location'=>$row->location ,
               'contact'=>$row->contact ,
               'password'=>$row->password,
               'phone'=>"",
               'fax'=>"",
               'web'=>""
            );
         }
         //var_dump($user_info);
         $this->load->view('public/publicdeveloperpage', $user_info);
       }

     }
	}
}