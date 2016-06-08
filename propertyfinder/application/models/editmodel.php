<?php
class Editmodel extends CI_Model
{
	public function loadinfo($id)
	{
		$this -> db -> select('username,email,address,location,contact,password');
		$this -> db -> from('users');
   		$this -> db -> where('id', $id);

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

	public function loadpostinformation($pid)
	{
		$this -> db -> select('price,sizeIn,size,description');
		$this -> db -> from('property');
   		$this -> db -> where('propertyId', $pid);

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

	public function loadCompanyInfo($id)
	{
		$this->db->select('phone,fax,web');
		$this->db->from('developers');
		$this->db->where('companyId',$id);

		$query=$this->db->get();
		if($query->num_rows()==1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}

	public function save($id)
	{
		$data=array(
				'password'=>$this->input->post('Password'),
	    		'address'=>$this->input->post('Address'),
	    		'location'=>$this->input->post('Location'),
	    		'contact'=>$this->input->post('Mobile'),
			);

		$this->db->where('id', $id);
		$this->db->update('users', $data); 
	}

	public function postsave($id)
	{
		$data=array(
				'price'=>$this->input->post('Price'),
	    		'size'=>$this->input->post('Size'),
	    		'description'=>$this->input->post('Description')
			);

		$this->db->where('propertyId', $id);
		$this->db->update('property', $data); 	
	}

	public function saveCompany($id)
	{
		$data=array(
				'password'=>$this->input->post('Password'),
	    		'address'=>$this->input->post('Address'),
	    		'location'=>$this->input->post('Location'),
	    		'contact'=>$this->input->post('Mobile'),
			);

		$this->db->where('id', $id);
		$this->db->update('users', $data); 

		$fax=$this->input->post('Fax');
		$phone=$this->input->post('Phone');
		$web=$this->input->post('Web');

		if($fax!==""||$phone!==""||$web!=="")
		{

			$this->db->select('phone,fax,web');
			$this->db->from('developers');
			$this->db->where('companyId',$id);

			$query=$this->db->get();
			//print_r($query->num_rows);
			if($query->num_rows()==0)
			{
				$data=array('companyId'=>$id,'phone'=>$phone,'fax'=>$fax,'web'=>$web);
				$this->db->insert('developers',$data);
			}
			else if($query->num_rows()==1)
			{
				$data=array('phone'=>$phone,'fax'=>$fax,'web'=>$web);
				//var_dump($data);
				$this->db->where('companyId', $id);
				$this->db->update('developers', $data); 
			}
		}
	}
}
?>