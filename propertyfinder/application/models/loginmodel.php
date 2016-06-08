<?php
Class Loginmodel extends CI_Model
{
 function login($email, $password)
 {
   $this -> db -> select('id, username,email, password,usertype');
   $this -> db -> from('users');
   $this -> db -> where('email', $email);
   $this -> db -> where('password', $password);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
?>