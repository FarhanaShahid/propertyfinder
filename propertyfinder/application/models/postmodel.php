<?php
class Postmodel extends CI_Model{

	public function loadmypost($id)
	{
		$this->db->select('*');
		$this->db->from('property');
		$this->db->where('ownerId',$id);

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