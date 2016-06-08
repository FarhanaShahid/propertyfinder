<?php
class Uploadmodel extends CI_Model{

	public function uploadpost($data){
		
		$this->db->insert('property',$data);

		$id=$this->db->insert_id();
		//print_r($id);

		$district=$data['district'];
		$area=$data['area'];
		$price=$data['price'];
		$category=$data['category'];
		$propertyType=$data['propertyType'];

		$this->db->select('*');
		$this->db->from('requirement');

		$query=$this->db->get();

		if($query->num_rows()>=1)
		{
			$result=$query->result();

			//print_r($result);

			foreach ($result as $row) {
				
				if((($category==="rent" && $category===$row->category)||($category==="sell" && $row->category==="buy") )&& $propertyType===$row->propertyType)
				{
					if($district===$row->district && $area===$row->area && $row->lowPrice<=$price && $row->upPrice>=$price)
					{
						//echo "here-33";
						$data=array('reqId'=>$row->reqId,'postId'=>$id,'checked'=>"0");
						$this->db->insert('notification',$data);
					}

				
					else if($row->district=="" && $row->area=="" && $row->lowPrice<=$price && $price<=$upPrice)
					{
						$data=array('reqId'=>$row->reqId,'postId'=>$id,'checked'=>"0");
						$this->db->insert('notification',$data);
					}
					

					
					else if($district===$row->district && $area===$row->area )
					{
						$data=array('reqId'=>$row->reqId,'postId'=>$id,'checked'=>"0");
						$this->db->insert('notification',$data);
					}
					

					
				}
			}
		}

	}
}