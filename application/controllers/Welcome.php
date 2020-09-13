<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Home_model');
		$this->load->model('Blog_model');
	}

	public function index()
	{
		$data['kategori'] = $this->Blog_model->getAllCategory();
		$data['blog'] = $this->Blog_model->getBlogActive6();



		$this->load->view('template/Website/header');
		$this->load->view('template/Website/navbar', $data);
		$this->load->view('template/Website/jumbotron');
		$this->load->view('template/Website/Content/materi', $data);
		$this->load->view('template/Website/Content/panel');
		$this->load->view('template/Website/mediasosial');
		$this->load->view('template/Website/contact');
		$this->load->view('template/Website/footer');

		// $this->load->view('index');

	}
	public function portfolio()
	{
		$data['kategori'] = $this->Blog_model->getAllCategory();



		$this->load->view('template/Website/header');
		$this->load->view('template/Website/navbar', $data);
		// $this->load->view('template/Website/jumbotron');
		$this->load->view('template/Website/Portfolio/content');
		$this->load->view('template/Website/contact');
		$this->load->view('template/Website/footer');

		// $this->load->view('index');

	}
	public function about()
	{
		$data['kategori'] = $this->Blog_model->getAllCategory();
		$this->load->view('template/Website/header');
		$this->load->view('template/Website/navbar', $data);
		// $this->load->view('template/Website/jumbotron');
		$this->load->view('template/Website/about');
		// $this->load->view('template/Website/contact');
		$this->load->view('template/Website/footer');

		// $this->load->view('index');

	}
	public function profile()
	{
		$data['cv']=$this->Home_model->cv();
		$data['cv']=$this->Home_model->education();
		$data['kategori'] = $this->Blog_model->getAllCategory();
		$this->load->view('template/Website/header');
		$this->load->view('template/Website/navbar', $data);
		// $this->load->view('template/Website/jumbotron');
		$this->load->view('template/Website/profile',$data);
		$this->load->view('template/Website/contact');
		$this->load->view('template/Website/footer');

		// $this->load->view('index');

	}
	public function Program()
	{
		$data['kategori'] = $this->Blog_model->getAllCategory();
		$data['pilihan'] = $this->Blog_model->getAllBlogByCategory1();

		$this->load->view('template/Website/header');
		$this->load->view('template/Website/navbar', $data);
		// $this->load->view('template/Website/jumbotron');
		$this->load->view('template/Website/Blog/List/program', $data);
		// $this->load->view('template/Website/contact');
		$this->load->view('template/Website/footer');

		// $this->load->view('index');

	}
	public function Jaringan()
	{
		$data['kategori'] = $this->Blog_model->getAllCategory();
		$data['pilihan'] = $this->Blog_model->getAllBlogByCategory2();

		$this->load->view('template/Website/header');
		$this->load->view('template/Website/navbar', $data);
		// $this->load->view('template/Website/jumbotron');
		$this->load->view('template/Website/Blog/List/jaringan');
		// $this->load->view('template/Website/contact');
		$this->load->view('template/Website/footer');

		// $this->load->view('index');

	}
	public function Puisi()
	{
		$data['kategori'] = $this->Blog_model->getAllCategory();
		$data['pilihan'] = $this->Blog_model->getAllBlogByCategory3();

		$this->load->view('template/Website/header');
		$this->load->view('template/Website/navbar', $data);
		// $this->load->view('template/Website/jumbotron');
		$this->load->view('template/Website/Blog/List/puisi');
		// $this->load->view('template/Website/contact');
		$this->load->view('template/Website/footer');

		// $this->load->view('index');

	}
	public function Server()
	{
		$data['kategori'] = $this->Blog_model->getAllCategory();
		$data['pilihan'] = $this->Blog_model->getAllBlogByCategory4();

		$this->load->view('template/Website/header');
		$this->load->view('template/Website/navbar', $data);
		// $this->load->view('template/Website/jumbotron');
		$this->load->view('template/Website/Blog/List/server');
		// $this->load->view('template/Website/contact');
		$this->load->view('template/Website/footer');

		// $this->load->view('index');

	}
	public function blog()
	{
		$data['blog'] = $this->Blog_model->getAllBlog();
		$data['kategori'] = $this->Blog_model->getAllCategory();


		$this->load->view('template/Website/header');
		$this->load->view('template/Website/navbar', $data);
		// $this->load->view('template/Website/jumbotron');
		// $this->load->view('template/Website/Blog/blog',$data);
		$this->load->view('template/Website/Blog/index', $data);
		// $this->load->view('template/Website/contact');
		$this->load->view('template/Website/footer');

		// $this->load->view('index');

	}
	public function Getblog($id)
	{
		$data['kategori'] = $this->Blog_model->getAllCategory();
		$data['list'] = $this->Blog_model->getBlog();
		$data['blog'] = $this->Blog_model->getAllBlogById($id);

		$this->load->view('template/Website/header');
		$this->load->view('template/Website/navbar', $data);
		// $this->load->view('template/Website/jumbotron');
		$this->load->view('template/Website/Blog/perblok', $data);
		// $this->load->view('template/Website/Blog/index',$data);
		// $this->load->view('template/Website/contact');
		$this->load->view('template/Website/footer');

		// $this->load->view('index');

	}

	public function pesan()
	{
		$email = $this->input->post('email', true);
		$data = [
			'name' => htmlspecialchars($this->input->post('name', true)),
			'email' => htmlspecialchars($email),
			'telp' => htmlspecialchars($this->input->post('telp', true)),
			'mess' => htmlspecialchars($this->input->post('mess', true))
		];
		$this->db->insert('send', $data);

		$this->_sendEmail();
		$this->session->set_flashdata('message', 'Pesan Berhasil Dikirim');
		redirect('Welcome');
	}

	private function _sendEmail()
	{
		$config = [
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'wardanabayu508@gmail.com',
			'smtp_pass' => 'Wardana229813',
			'smtp_port' => 465,
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n"
		];

		$this->email->initialize($config);

		$this->email->from($this->input->post('email'));
		$this->email->to('wardanabayu455@gmail.com', 'Bayu Wardana');
		$this->email->subject('Message User');
		$this->email->message('Nama : ' . $this->input->post('name') . '<br>Email : ' . $this->input->post('email') . '<br>Telepon : ' . $this->input->post('telp') . '<p style="text-align:justify;">Pesan : ' . $this->input->post('mess') . '</p>');

		if ($this->email->send()) {

			return true;
		} else {
			echo $this->email->print_debugger();
			die;
		}
	}
}
