<?php 

class Likes_model extends CI_Model{

	public function __construct()
    {
        $this->load->database();
    }
	public function save_likes($m_id)
	{
		
	}
public function get_music($b_id)
{
	$query = $this->db->get_where('likes',array('m_id'=>$m_id));
	 return $query->result_array();
}
	
}
