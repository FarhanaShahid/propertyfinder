<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->library('session');
   $this->load->helper('url','form');
   $this->load->database();
   $this->load->model('editmodel');
   $this->load->model('postmodel');
   $this->load->model('developermodel');
   $this->load->model('notificationmodel');
 }

 public function index()
 {
    
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     //$data['username'] = $session_data['username'];
     //$data['type']=$session_data['usertype'];
     $result=$this->notificationmodel->newnotificationcount($session_data['id']);
     $data=array('username'=>$session_data['username'],'id'=>$session_data['id'],'count'=>$result);

     $this->load->view('private/homeview',$data);
   }
   else
   {
     //If no session, redirect to login page
     $this->load->view('public/loginview');
   }
 }

 public function aboutus()
 {
  if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $result=$this->notificationmodel->newnotificationcount($session_data['id']);
     $data=array('username'=>$session_data['username'],'id'=>$session_data['id'],'count'=>$result);

     $this->load->view('private/aboutus',$data);
   }
   else{
    redirect('login','refresh');
   }
 }

 public function contactus()
 {
  if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $result=$this->notificationmodel->newnotificationcount($session_data['id']);
     $data=array('username'=>$session_data['username'],'id'=>$session_data['id'],'count'=>$result);

     $this->load->view('private/contactus',$data);
   }
   else{
    redirect('login','refresh');
   }
 }

 public function developer()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $id = $session_data['id'] ;
     $username=$session_data['username'];
     $result=$this->notificationmodel->newnotificationcount($session_data['id']);

     $result1=$this->developermodel->subscriptionlist($id);
     //var_dump($result1);
     //print_r(count($result1));

     $result2=$this->developermodel->nonsubscriptionlist($id);
     //var_dump($result2);


         $data=array(
        'id'=>$id,
        'username'=>$username,
        'subscribed'=>$result1,
        'nonsubscribed'=>$result2,
        'count'=>$result);

         $this->load->view('private/developerlist',$data);
     
      
   }
   else{
    redirect('login','refresh');
   }
 }

 public function developerinfo()
 {
  if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $result=$this->notificationmodel->newnotificationcount($session_data['id']);

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
          'fax'=>$user_info2['fax'],'web'=>$user_info2['web'],'count'=>$result
          );

         $this->load->view('private/developerpage',$user_info);
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
               'web'=>"",
               'count'=>$result
            );
         }
         //var_dump($user_info);
         $this->load->view('private/developerpage', $user_info);
       }

     }
   }
   else{
    redirect('login','refresh');
   }
 }

 public function getnewsfeed()
 {
  if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $id=$session_data['id'];
     $name=$session_data['username'];
      $count=$this->notificationmodel->newnotificationcount($session_data['id']);

     $result=$this->developermodel->getnewsfeedpost($id);

     if($result)
     {
      $data=array('username'=>$name,'result'=>$result,'count'=>$count);
      $this->load->view('private/newsfeedview',$data);
     }
     else{
      echo "No posts yet.";
     }


   }
   else{
    redirect('login','refresh');
   }
 }

 public function requirement()
 {
    if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $username=$session_data['username'];
     $id=$session_data['id'];
      $count=$this->notificationmodel->newnotificationcount($session_data['id']);

     $result=$this->notificationmodel->getallrequirement($id);
     $data=array('id'=>$id, 'username'=>$username, 'result'=>$result,'count'=>$count);

     $this->load->view('private/requirementview',$data);

   }
   else{
    redirect('login','refresh');
   }
 }

 public function postad()
 {
  $this->load->library('session');
  if($this->session->userdata('logged_in'))
  {
    $session_data = $this->session->userdata('logged_in');
     $count=$this->notificationmodel->newnotificationcount($session_data['id']);
    
    $data['username'] = $session_data['username'];
    $data['count']=$count;
    $this->load->view('private/postview', $data);

  }
  else
  {
    $this->load->view('public/loginview');
  }
 }

 public function loaduserinfo()
 {
  $this->load->library('session');
  if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $id= $session_data['id'];
     $name= $session_data['username'] ;
     $type=$session_data['usertype'];
     $count=$this->notificationmodel->newnotificationcount($session_data['id']);
     
     if($type==="Individual")
     {
        $result=$this->editmodel->loadinfo($id);
       if($result)
       {
         $user_info=array();
         foreach ($result as $row) {
           
           $user_info=array(
              'id'=> $id ,
               'username' => $name ,
               'address'=> $row->address,
               'location'=>$row->location ,
               'contact'=>$row->contact ,
               'password'=>$row->password,
               'count'=>$count
            );
         }
       }
       $this->load->view('private/editaccount', $user_info);
     }
     else if($type==="Company")
     {
       $result1=$this->editmodel->loadinfo($id);
       $result2=$this->editmodel->loadCompanyInfo($id);

       if($result1 && $result2)
       {
          $user_info1=array();
          $user_info2=array();
         foreach ($result1 as $row) {
           
           $user_info1=array(
              'id'=> $id ,
               'username' => $name ,
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
          'id'=>$id, 'username'=>$name,'address'=>$user_info1['address'],'location'=>$user_info1['location'],
          'contact'=>$user_info1['contact'],'password'=>$user_info1['password'],'phone'=>$user_info2['phone'],
          'fax'=>$user_info2['fax'],'web'=>$user_info2['web'],'count'=>$count
          );

         $this->load->view('private/editCompanyAccount',$user_info);
       }
       else if($result1 && !$result2)
       {
        $user_info=array();
         foreach ($result1 as $row) {
           
           $user_info=array(
              'id'=> $id ,
               'username' => $name ,
               'address'=> $row->address,
               'location'=>$row->location ,
               'contact'=>$row->contact ,
               'password'=>$row->password,
               'phone'=>"",
               'fax'=>"",
               'web'=>"",
               'count'=>$count
            );
         }
         //var_dump($user_info);
         $this->load->view('private/editCompanyAccount', $user_info);
       }
       
     }
       

     //var_dump($user_info);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }

 public function editCompany()
 {
    $this->load->library('form_validation');

    $this->form_validation->set_rules('Address','Address','trim');
    $this->form_validation->set_rules('Location','Location','trim');
    $this->form_validation->set_rules('Mobile','Mobile','trim|required|min_length[8]|max_length[10]');
    $this->form_validation->set_rules('Password','Password','trim|required|min_length[6]|max_length[15]');
    $this->form_validation->set_rules('ConfirmPassword','ConfirmPassword','trim|required|matches[Password]');
    $this->form_validation->set_rules('Phone','Phone','trim');
    $this->form_validation->set_rules('Fax','Fax','trim|min_length[8]|max_length[10]');
    $this->form_validation->set_rules('Web','Web','trim');

    if($this->form_validation->run() == FALSE)
    {
       
      echo "<script type='text/javascript'>alert('Invalid info. Try again!')</script>";
      $this->loaduserinfo();
    }
    else
    {
      $this->load->library('session');
      if($this->session->userdata('logged_in'))
       {
          $session_data = $this->session->userdata('logged_in');
          $id = $session_data['id'] ;
          //print_r($id);
          $this->editmodel->saveCompany($id);
          echo "<script type='text/javascript'>alert('Your update has been saved!')</script>";
          $this->loaduserinfo();
        }
    }
 }

 public function edit()
 {
    $this->load->library('form_validation');

    $this->form_validation->set_rules('Address','Address','trim');
    $this->form_validation->set_rules('Location','Location','trim');
    $this->form_validation->set_rules('Mobile','Mobile','trim|required|min_length[8]|max_length[10]');
    $this->form_validation->set_rules('Password','Password','trim|required|min_length[6]|max_length[15]');
    $this->form_validation->set_rules('ConfirmPassword','ConfirmPassword','trim|required|matches[Password]');

    if($this->form_validation->run() == FALSE)
    {
       
      echo "<script type='text/javascript'>alert('Invalid info. Try again!')</script>";
      $this->loaduserinfo();
    }

    else
    {
      $this->load->library('session');
      if($this->session->userdata('logged_in'))
       {
          $session_data = $this->session->userdata('logged_in');
          $id = $session_data['id'] ;
          //print_r($id);
          $this->editmodel->save($id);
          echo "<script type='text/javascript'>alert('Your update has been saved!')</script>";
          $this->loaduserinfo();
        }
    }
 }

 public function yourPosts()
 {
  $this->load->library('session');
  if($this->session->userdata('logged_in'))
  {
      $session_data = $this->session->userdata('logged_in');
      
      $result=$this->postmodel->loadmypost($session_data['id']);
       $count=$this->notificationmodel->newnotificationcount($session_data['id']);
      
      if($result)
      {
        $data=array(
          'username'=>$session_data['username'],
          'result'=>$result,
          'count'=>$count
          );
        $this->load->view('private/yourpostsview',$data); 
      }
      else{
        echo "You have not posted any update yet.";
      }
  }
  else{
    redirect('login','refresh');
  }
 }

 public function loadpostinfo()
 {
    $this->load->library('session');
    if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
       $count=$this->notificationmodel->newnotificationcount($session_data['id']);

      if( isset($_GET['pid']))
      {
        $pid=$_GET['pid'];

        $result=$this->editmodel->loadpostinformation($pid);
        if($result)
         {
           $post_info=array();
           foreach ($result as $row) {
             
             $post_info=array(
                'username'=>$session_data['username'],
                'propertyId'=>$pid,
                'price'=>$row->price,
                'sizeIn'=>$row->sizeIn,
                'size'=>$row->size,
                'description'=>$row->description,
                'count'=>$count
              );
           }
           //var_dump($post_info);
         }
         $this->load->view('private/editpostview',$post_info);
      }
    }
    else{
      redirect('login','refresh');
    }
 }

 public function editpost()
 {
  $this->load->library('form_validation');

    $this->form_validation->set_rules('Price','Price','trim|numeric');
    $this->form_validation->set_rules('Size','Size','trim|numeric');
    $this->form_validation->set_rules('Description','Description','trim');

    if($this->form_validation->run() == FALSE)
    {
       
      echo "<script type='text/javascript'>alert('Invalid info. Try again!')</script>";
      $this->loadpostinfo();
    }

    else
    {
      $this->load->library('session');
      if($this->session->userdata('logged_in'))
       {
          $session_data = $this->session->userdata('logged_in');
          if(isset($_GET['pid']))
          {
            $pid=$_GET['pid'];
            $this->editmodel->postsave($pid);
            echo "<script type='text/javascript'>alert('Your update has been saved!')</script>";
            $this->yourPosts();
          }
          //print_r($id);
        }
    }
 }
 public function logout()
 {
   $this->load->library('session');
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('publichome', 'refresh');
 }

}

?>