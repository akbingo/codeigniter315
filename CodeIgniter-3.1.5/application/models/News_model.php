<?php
class News_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function get_news($slug=FALSE,$num,$offset)
    {
        if ($slug===FALSE)
        {
            $query=$this->db->get('news',$num,$offset);
            return $query->result_array();
        }

        $query=$this->db->get_where('news',array('slug'=>$slug));
        return $query->row_array();
    }

    public function set_news()
    {
        $this->load->helper('url');
    
        $slug = url_title(md5($this->input->post('title')."柚月向日葵".date("Y.m.d h:i:sa")), 'dash', TRUE);
    
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text'),
            "author" => $this->session->username
        );
    
        return $this->db->insert('news', $data);
    }
}