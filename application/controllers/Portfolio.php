<?php

class Portfolio extends  CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model('Blog_model');
        $this->load->model('Home_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['title'] = 'Bayu Wardana | Home';
        $data['kategori'] = $this->Blog_model->getAllCategory();
        $data['blog'] = $this->Blog_model->getBlogActive6();
        $data['skill'] = $this->Home_model->skill();

        $this->load->view('Portfolio/header', $data);
        $this->load->view('Portfolio/navbar', $data);
        $this->load->view('Portfolio/jumbotron');
        $this->load->view('Portfolio/social');
        $this->load->view('Portfolio/counter');
        $this->load->view('Portfolio/blog', $data);
        $this->load->view('Portfolio/contact');
        $this->load->view('Portfolio/footer');
    }

    public function portfolio()
    {
        $data['title'] = 'Bayu Wardana | Portfolio';
        $data['kategori'] = $this->Blog_model->getAllCategory();
        $data['skill'] = $this->Home_model->skill();

        $this->load->view('Portfolio/header', $data);
        $this->load->view('Portfolio/navbar', $data);
        $this->load->view('Portfolio/folio/about');
        $this->load->view('Portfolio/folio/portfolio');
        $this->load->view('Portfolio/contact');
        $this->load->view('Portfolio/footer');
    }

    public function profile()
    {
        $data['title'] = 'Bayu Wardana | Profile';
        $data['kategori'] = $this->Blog_model->getAllCategory();
        $data['cv'] = $this->Home_model->cv();
        $data['education'] = $this->Home_model->education();
        $data['skill'] = $this->Home_model->skill();

        $this->load->view('Portfolio/header', $data);
        $this->load->view('Portfolio/navbar', $data);
        $this->load->view('Portfolio/Profile/index');
        $this->load->view('Portfolio/contact');
        $this->load->view('Portfolio/footer');
    }

    public function article()
    {
        $data['title'] = 'Bayu Wardana | Materi';

        $this->load->library('pagination');
        $config['base_url'] = "localhost/mywebsite/Portfolio/article";
        $config['total_rows'] = $this->Blog_model->countAllCategory();
        $config['per_page'] = 6;

        // Styling
        $config['full_tag_open'] = "<nav><ul class='pagination justify-content-center'>";
        $config['full_tag_close'] = "</ul></nav>";

        $config['first_link'] = "First";
        $config['first_tag_open'] = "<li class='page-item'>";
        $config['first_tag_close'] = "</li>";

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');


        $this->pagination->initialize($config);


        $data['start'] = $this->uri->segment(3);
        $data['is_active'] = $this->db->where(['is_active' => 1]);
        $data['kategori'] = $this->Blog_model->getCategory($config['per_page'], $data['start']);

        $this->load->view('Portfolio/header', $data);
        $this->load->view('Portfolio/navbar');
        $this->load->view('Portfolio/Aticle/index', $data);
        // $this->load->view('Portfolio/contact');
        $this->load->view('Portfolio/footer');
    }

    public function getArticleById($id)
    {
        $data['title'] = 'Bayu Wardana | List Materi';
        $data['materi'] = $this->Blog_model->getBlog($id);

        $this->load->view('Portfolio/header', $data);
        $this->load->view('Portfolio/navbar');
        $this->load->view('Portfolio/Aticle/materi', $data);
        $this->load->view('Portfolio/footer');
    }

    public function getBlogById($id)
    {
        $data['title'] = 'Bayu Wardana | Detail Blog';
        $data['kategori'] = $this->Blog_model->getAllCategory();
        // $data['list'] = $this->Blog_model->getBlog();
        $data['blog'] = $this->Blog_model->getAllBlogById($id);
        $data['bloglist'] = $this->Blog_model->getBlogActive6();
        $data['comment'] = $this->Blog_model->getCommentIdBlog($id);
        $data['count'] = $this->Blog_model->getComments($id);

        $this->form_validation->set_rules('name', 'Your Name', 'required|trim');
        $this->form_validation->set_rules('gender', 'Your Gender', 'required|trim');
        $this->form_validation->set_rules('mess', 'Your Message', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('Portfolio/header', $data);
            $this->load->view('Portfolio/navbar', $data);
            $this->load->view('Portfolio/Blog/index', $data);
            $this->load->view('Portfolio/footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'gender' => $this->input->post('gender', true),
                'mess' => htmlspecialchars($this->input->post('mess', true)),
                'logo' => $this->input->post('logo', true),
                'date_created' => time(),
                'id_blog' => $id
            ];
            if ($data['gender'] == 'Male' && $data['name'] == 'Bayu Wardana') {
                $data['logo'] = 'bayu.jpg';
            } elseif ($data['gender'] == 'Male') {
                $data['logo'] = 'pria.png';
            } else {
                $data['logo'] = 'wanita.png';
            }
            $this->db->insert('comments', $data);
            $this->_Comment($id);
            redirect('index.php/Portfolio/getBlogById/' . $id);
        }
    }

    public function about()
    {
        $data['title'] = 'Bayu Wardana | About';
        $data['kategori'] = $this->Blog_model->getAllCategory();

        $this->load->view('Portfolio/header', $data);
        $this->load->view('Portfolio/navbar', $data);
        $this->load->view('Portfolio/about');
        // $this->load->view('Portfolio/contact');
        $this->load->view('Portfolio/footer');
    }

    public function getAllBlog()
    {
        $data['title'] = 'Bayu Wardana | All Blog';
        $data['kategori'] = $this->Blog_model->getAllCategory();

        // ambil data keyword
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        // Pagination
        $this->load->library('pagination');
        // Config
        $this->db->like('judul', $data['keyword']);
        $this->db->or_like('title', $data['keyword']);
        $this->db->or_like('date_created', $data['keyword']);
        $this->db->where(['id_category' => 4], $data['keyword']);
        $this->db->from('blog');
        $config['base_url'] = "http://bayuwardana.getenjoyment.net/index.php/Portfolio/getAllBlog";
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 12;

        // Styling
        $config['full_tag_open'] = "<nav><ul class='pagination justify-content-center'>";
        $config['full_tag_close'] = "</ul></nav>";

        $config['first_link'] = "First";
        $config['first_tag_open'] = "<li class='page-item'>";
        $config['first_tag_close'] = "</li>";

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        // Initialize
        $this->pagination->initialize($config);



        $data['start'] = $this->uri->segment(3);
        $data['is_active'] = $this->db->where(['is_active' => 1]);
        $data['date'] = $this->db->group_by('date_created', 'DESC');
        $data['list'] = $this->Blog_model->getBlogs($config['per_page'], $data['start'], $data['keyword']);


        $this->load->view('Portfolio/header', $data);
        $this->load->view('Portfolio/navbar', $data);
        $this->load->view('Portfolio/Blog/all', $data);
        $this->load->view('Portfolio/footer');
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
        $this->session->set_flashdata('message', 'Message send successfull!');
        redirect('index.php/Portfolio');
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
        $this->email->to('wardanabayu508@gmail.com', 'Administrator');
        $this->email->subject('Message User');
        $this->email->message('Nama : ' . $this->input->post('name') . '<br>Email : ' . $this->input->post('email') . '<br>Telepon : ' . $this->input->post('telp') . '<p style="text-align:justify;">Pesan : ' . $this->input->post('mess') . '</p>');

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    private function _Comment($id)
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

        $this->email->from('wardanabayu508@gmail.com');
        $this->email->to('wardanabayu455@gmail.com', 'Bayu Wardana');
        $this->email->subject('Message User');
        $this->email->message('Nama : ' . $this->input->post('name') . '<br>Gender : ' . $this->input->post('gender') . '<p style="text-align:justify;">Pesan : ' . $this->input->post('mess') . '</p> <a href="' . base_url('Portfolio/getBlogById/' . $id) . '">Klik Link</a>');

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function CV()
    {
        $data['cv'] = $this->Home_model->cv();
        $data['education'] = $this->Home_model->education();
        $data['skill1'] = $this->Home_model->s1();
        $data['skill2'] = $this->Home_model->s2();

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "Curriculum Vitae.pdf";
        $this->pdf->load_view('index.php/Portfolio/pdf', $data);
    }
}
