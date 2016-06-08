<?php

class Notificationmodel extends CI_Model{

	public function getallrequirement($id)
	{
		$this->db->select('*');
		$this->db->from('requirement');
		$this->db->where('userId',$id);

		$query=$this->db->get();

		if($query->num_rows()>=1)
		{
			return $query->result();
		}
		else{
			return false ;
		}
	}

	public function getallnotification($id)
	{
		$this->db->select('property.propertyId,property.propertyType,property.category,property.district,property.area,property.price,property.sizeIn,property.size,property.description,property.image,users.username,users.contact');
		$this->db->from('property');
		$this->db->join('users','users.id=property.ownerId');
		$this->db->join('notification','notification.postId=property.propertyId');
		$this->db->join('requirement','requirement.reqId=notification.reqId');
		$this->db->where('requirement.userId',$id);

		$query=$this->db->get();
		if($query->num_rows()>=1)
		{
			$data=array('checked'=>"1");
			$this->db->where('checked',"0");
			$this->db->update('notification',$data);

			return $query->result();
		}
		else{
			return false;
		}
	}

	public function setnotification($data)
	{
		$this->db->insert('requirement',$data);
	}

	public function removenotification($pid)
	{
		$this->db->where('reqId',$pid);
		$this->db->delete('requirement');

		$this->db->where('reqId',$pid);
		$this->db->delete('notification');
	}
	public function newnotificationcount($id)
	{
		$this->db->select('*');
		$this->db->from('notification');
		$this->db->join('requirement','notification.reqId=requirement.reqId');
		$this->db->where('requirement.userId',$id);
		$this->db->where('notification.checked',"0");

		$query=$this->db->get();
		$count=$query->num_rows();

		return $count;
	}
}