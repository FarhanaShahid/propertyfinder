<?php

class Searchmodel extends CI_Model{

	public function search($category,$propertytype){

		$this->db->select('property.propertyId,property.district,property.area,property.price,property.sizeIn,property.size,property.description,property.image,users.username,users.contact');
		$this->db->from('property');
		$this->db->join('users','property.ownerId=users.id');
		$this->db->where('property.category',$category);
		$this->db->where('property.propertyType',$propertytype);

		$query=$this->db->get();

		if($query->num_rows()>=1)
		{
			return $query->result();
		}

		else{
			return false;
		}
	}

	public function filtered_search($category,$propertytype,$district,$area,$price_range)
	{
		$prices=array(1000,3000,6000,10000,15000,20000,25000,50000,100000,300000,500000,1000000,2000000,4000000,7000000,10000000,30000000);
		if($price_range==="base" && $district!=="base" && $area!=="Select")
		{
			$this->db->select('property.propertyId,property.district,property.area,property.price,property.sizeIn,property.size,property.description,property.image,users.username,users.contact');
			$this->db->from('property');
			$this->db->join('users','property.ownerId=users.id');
			$this->db->where('property.category',$category);
			$this->db->where('property.propertyType',$propertytype);
			$this->db->where('property.district',$district);
			$this->db->where('property.area',$area);

			$query=$this->db->get();

			if($query->num_rows()>=1)
			{
				return $query->result();
			}

			else{
				return false;
			}
		}

		else if($price_range!=="base" && $district==="base" && $area==="Select")
		{
			$low_range=(int)$price_range;
			$up_range=$low_range+1;

			$this->db->select('property.propertyId,property.district,property.area,property.price,property.sizeIn,property.size,property.description,property.image,users.username,users.contact');
			$this->db->from('property');
			$this->db->join('users','property.ownerId=users.id');
			$this->db->where('property.category',$category);
			$this->db->where('property.propertyType',$propertytype);
			$this->db->where('property.price >=' ,$prices[$low_range]);
			$this->db->where('property.price <=' ,$prices[$up_range]);

			$query=$this->db->get();

			if($query->num_rows()>=1)
			{
				return $query->result();
			}

			else{
				return false;
			}

		}

		else if($price_range!=="base" && $district!=="base" && $area!=="Select")
		{
			$low_range=(int)$price_range;
			$up_range=$low_range+1;

			$this->db->select('property.propertyId,property.district,property.area,property.price,property.sizeIn,property.size,property.description,property.image,users.username,users.contact');
			$this->db->from('property');
			$this->db->join('users','property.ownerId=users.id');
			$this->db->where('property.category',$category);
			$this->db->where('property.propertyType',$propertytype);
			$this->db->where('property.district',$district);
			$this->db->where('property.area',$area);
			$this->db->where('property.price >=' ,$prices[$low_range]);
			$this->db->where('property.price <=' ,$prices[$up_range]);

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
}