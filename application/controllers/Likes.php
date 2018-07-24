<?php

class Likes extends CI_Controller{
	public function create($m_id){

		$ipaddress=$_SERVER['REMOTE_ADDR'];
	    $m_id=$this->input->post('m_id');
	    
        $data['post'] = $this->music_model->get_music($m_id);


         if ($this->form_validation->run()===FALSE) {
            $this->load->view('templates/header');
            $this->load->view('music/view', $data);
            $this->load->view('templates/footer');
        }else{
        	$this->likes_model->save_likes($m_id);
        	redirect('music/view/'.$slug);
        }
	}
}