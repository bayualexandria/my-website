<?php

class Home_model extends  CI_Model
{

    public function jumlahUser()
    {
        $query = $this->db->query("SELECT * FROM user WHERE is_active=1");
        return $query;
    }
    public function jumlahBlog()
    {
        $query = $this->db->query("SELECT * FROM blog WHERE is_active=1");
        return $query;
    }

    public function cv()
    {
        return $this->db->get('cv')->row_array();
    }

    public function socialmedia()
    {
        return $this->db->get('social_media')->result_array();
    }

    public function education()
    {
        return $this->db->get('education')->row_array();
    }
    public function skill()
    {
        return $this->db->get('skill')->result_array();
    }

    public function s1()
    {
        $this->db->order_by('id', 'ASC');
        $this->db->limit(3);
        return $this->db->get('skill')->result_array();
    }
    public function s2()
    {
        $this->db->order_by('id', 'DESC');
        $this->db->limit(3);
        return $this->db->get('skill')->result_array();
    }
}
