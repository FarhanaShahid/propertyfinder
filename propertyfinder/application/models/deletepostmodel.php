<?php
class Deletepostmodel extends CI_Model{

	public function postdelete($pid)
	{
		$this->db->where('propertyId',$pid);
		$this->db->delete('property');

	}
}