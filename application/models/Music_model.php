<?php
class Music_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	public function get_music($slug=FALSE)
	{
		if ($slug === FALSE) {
			$this->db->order_by('m_id', 'DESC');
			$query = $this->db->get('phystechs_media');
			return $query->result_array(); 
		}

$query = $this->db->get_where('phystechs_media',array('slug'=>$slug));
		return $query->row_array(); 
	}

	public function upload_music($post_image)
	{
		$slug = url_title($this->input->post('title'));
		$data = array(
			    'artist' => $this->input->post('artist'),
				'slug' => $slug,
				'songtitle' => $this->input->post('title'),
				'album_title' => $this->input->post('album'),
				'song' => $post_image,
				'genre' => $this->input->post('g_cat')
		);
		return $this->db->insert('phystechs_media', $data); 
	}
	
	//update_music();
public function update_music()
	{
		$slug = url_title($this->input->post('title'));
		$data = array(
				'artist' => $this->input->post('artist'),
				'slug' => $slug,
				'songtitle' => $this->input->post('s_title'),
				'album_title' => $this->input->post('album'),
				'song' => $this->input->post('userfile'),
				'genre' => $this->input->post('g_cat')
			);
		$this->db->where('m_id',$this->input->post('m_id'));
		return $this->db->update('phystechs_media', $data);
	}
public function delete_music($m_id)
	{
		$this->db->where('m_id', $m_id); 
		$this->db->delete('phystechs_media');
		return true;
	}

}

