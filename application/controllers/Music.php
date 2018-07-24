<?php
class Music extends CI_Controller{

    public function index()
    {
       $data['title'] = 'PHYSTECHS MEDIA';

        $data['music'] = $this->music_model->get_music();
        
        
        $this->load->view('templates/header');
        $this->load->view('music/index', $data);
        $this->load->view('templates/footer');
    }
    public function view($slug = NULL)
    {
        $data['post'] = $this->music_model->get_music($slug);
        if (empty($data['post'])) {
            show_404();
        }
        //$data['title'] = $data['post']['title'];
        
        
        $this->load->view('templates/header');
        $this->load->view('music/view', $data);
        $this->load->view('templates/footer');
    }
       public function upload()
    {
        //$data['post'] = $this->post_model->get_posts($slug);
        
        $data['title'] = 'Create A Post';
       // $data['genre'] = $this->music_model->get_genre();

        $this->form_validation->set_rules('artist','Artist','required');
        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('album','Album','required');


        if ($this->form_validation->run()===FALSE) {
            $this->load->view('templates/header');
            $this->load->view('music/upload', $data);
            $this->load->view('templates/footer');
        }else{
            //upoad image
        $config['upload_path'] = './assets/img/musicfiles';
            $config['allowed_types'] = 'mp3';
            $config['max_size'] = '10898';

            $this->load->library('upload',$config);

            if (!$this->upload->do_upload()) {
                $errors = array('error'=>$this->upload->display_errors());
                $post_image = 'noimage.jpg';
            }else{
                $data = array('upload_data'=>$this->upload->data());
                $post_image = $_FILES['userfile']['name'];
                
            }

            $this->music_model->upload_music($post_image);
            redirect('music');
        }
    }
    public function delete($m_id)
    {
        
        $this->music_model->delete_music($m_id);
        redirect('music');
    }
    public function edit($slug)
    {
    $data['post'] = $this->music_model->get_music($slug);
    //$data['genre'] = $this->music_model->get_genre();
        if (empty($data['post'])) {
            show_404();
        }
        $data['title'] = 'Edit Song';
        
        
        $this->load->view('templates/header');
        $this->load->view('music/edit', $data);
        $this->load->view('templates/footer');
    }
     public function update()
    {
        $this->music_model->update_music();
        redirect('music');
    }
    public function download($m_id)
    {
        
    }
}