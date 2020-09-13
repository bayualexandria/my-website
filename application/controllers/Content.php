<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Content extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('Blog_model');
    }
    public function index()
    {
        $data['title'] = 'Content';
        $data['menu'] = 'Content';
        $data['list'] = ' Daftar Blog Content';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['category'] = $this->Blog_model->getAllCategory();
        // $data['blog'] = $this->Blog_model->getAllBlog();

         $this->load->library('pagination');
        // ambil data keyword
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('judul', $data['keyword']);
        $this->db->or_like('title', $data['keyword']);
        $this->db->or_like('date_created', $data['keyword']);
        $this->db->from('blog');
        $config['base_url'] = "http://bayuwardana.getenjoyment.net/index.php/Content/index";
        $config['num_links'] = 2;
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;


       


        $this->pagination->initialize($config);


        $data['start'] = $this->uri->segment(4);
        $data['kategori'] = $this->Blog_model->getBlogs($config['per_page'], $data['start'], $data['keyword']);

        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        $this->form_validation->set_rules('isi', 'Isi', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/navbar');
            $this->load->view('konten/index', $data);
            $this->load->view('template/footer');
        } else {
            $this->Blog_model->tambahBlog();
            $this->session->set_flashdata('message', 'Add Blog Success!');
            redirect('index.php/Content');
        }
    }
    public function editBlog($id)
    {
        $data['title'] = 'Edit Content';
        $data['menu'] = 'Edit Content';
        $data['list'] = 'Edit Content';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['category'] = $this->Blog_model->getAllCategory();

        $data['blog'] = $this->Blog_model->getAllBlogById($id);

        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        $this->form_validation->set_rules('isi', 'Isi', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/navbar');
            $this->load->view('konten/editBlog', $data);
            $this->load->view('template/footer');
        } else {
            $this->update();
        }
    }
    public function update()
    {
        $this->Blog_model->editBlog();
        $this->session->set_flashdata('message', 'Update User Success!');
        redirect('index.php/Content');
    }
    public function hapusBlog($id)
    {
        $this->Blog_model->hapusBlog($id);
        $this->session->set_flashdata('message', 'Hapus User Success!');
        redirect('index.php/Content');
    }
    public function detailBlog($id)
    {

        $data['title'] = 'Detail Content';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['category'] = $this->Blog_model->getAllCategory();
        $data['blog'] = $this->Blog_model->getAllBlogById($id);

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/navbar');
        $this->load->view('konten/detailBlog', $data);
        $this->load->view('template/footer');
    }

    public function categories()
    {
        $data['title'] = 'Categories';
        $data['list'] = ' Daftar Kategori';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $config['base_url'] = 'http://localhost/Login_CI/Content/categories';
        $config['total_rows'] = $this->Blog_model->countAllCategory();
        $config['per_page'] = 3;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['category'] = $this->Blog_model->getK($config['per_page'], $data['start']);
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/navbar');
        $this->load->view('konten/kategori', $data);
        $this->load->view('template/footer');
    }
}
