<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Home_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['title'] = 'Dasboard';
        $data['blog'] = $this->db->get('blog')->num_rows();
        $data['users'] = $this->db->get('user')->num_rows();
        $data['sub_menu'] = $this->db->get('user_sub_menu')->num_rows();
        $data['code'] = $this->db->get_where('blog', ['id_category' => 1])->num_rows();
        $data['laravel'] = $this->db->get_where('blog', ['id_category' => 5])->num_rows();
        $data['comment'] = $this->db->get('comments')->num_rows();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('Home/index', $data);
        $this->load->view('template/footer');
    }
}
