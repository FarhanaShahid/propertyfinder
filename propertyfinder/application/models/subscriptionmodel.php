<?php
class Subscriptionmodel extends CI_Model{

	public function subscribe($userId,$developerId)
	{
		$data=array('userId'=>$userId,'developerId'=>$developerId);
		$this->db->insert('subscription',$data);
	}

	public function unsubscribe($userId,$developerId)
	{
		$this->db->where('userId',$userId);
		$this->db->where('developerId',$developerId);
		$this->db->delete('subscription');
	}
}