<?php

class Developermodel extends CI_Model
{
	public function subscriptionlist($id)
	{
		$this->db->select('users.id, users.username');
		$this->db->from('users');
		$this->db->join('subscription','users.id=subscription.developerId');
		$this->db->where('subscription.userId',$id);

		$query=$this->db->get();


		if($query->num_rows()>=1) 
		{
			return $query->result();
		}

		else{
			return false;
		}
	}

	public function nonsubscriptionlist($id)
	{

		$this->db->select('users.id');
		$this->db->from('users');
		$this->db->join('subscription','users.id=subscription.developerId');
		$this->db->where('subscription.userId',$id);

		$query=$this->db->get();
		$subscribed=$query->result();


		if(count($subscribed)==0)
		{
			$this->db->select('users.id, users.username');
			$this->db->from('users');
			$this->db->where('usertype',"Company");

			$query=$this->db->get();

			if($query->num_rows()>=1) 
			{
				return $query->result();
			}

			else{
				return false;
			}
		}

		else if(count($subscribed)>=1){
			foreach($subscribed as $row)
			{
				$ids=array('id'=>$row->id);
			}

			$this->db->select('users.id, users.username');
			$this->db->from('users');
			$this->db->where('usertype',"Company");
			$this->db->where_not_in('id',$ids);

			$query=$this->db->get();

			if($query->num_rows()>=1) 
			{
				return $query->result();
			}

			else{
				return false;
			}
		}

			
		
	}

	public function getalldeveloper()
	{
		$this->db->select('id,username');
		$this->db->from('users');
		$this->db->where('usertype',"Company");

		$query=$this->db->get();

		if($query->num_rows()>=1)
		{
			return $query->result();
		}
		else{
			return false;
		}
	}

	public function getnewsfeedpost($id)
	{
		$this->db->select('property.propertyId,property.propertyType,property.category,property.district,property.area,property.price,property.sizeIn,property.size,property.description,property.image,users.username,users.contact');
		$this->db->from('property');
		$this->db->join('users','property.ownerId=users.id');
		$this->db->join('subscription','property.ownerId=subscription.developerId');
		$this->db->where('subscription.userId',$id);

		$query=$this->db->get();
		//print_r($query->result());

		if($query->num_rows()>=1)
		{
			return $query->result();
		}
		else{
			return false;
		}
	}

}