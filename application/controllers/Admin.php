<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Access';
        $data['menu'] = 'Admin';
        $data['list'] = 'Admin';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('Admin/role', $data);
        $this->load->view('template/footer');
    }


    public function roleaccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['menu1'] = 'Admin';
        $data['list'] = 'Admin';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->db->where('id !=', 1);

        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('Admin/roleaccess', $data);
        $this->load->view('template/footer');
    }

    public function changeaccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }
        $this->session->set_flashdata('message', 'Access Changed!');
    }

    public function brain()
    {
        $data['title'] = 'User';
        $data['menu1'] = 'Admin';
        $data['list'] = 'Admin';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $data['brain'] = $this->Admin_model->getAll();

        // $this->load->model('Admin_model', 'role');

        $data['menu'] = $this->Admin_model->getUser();

        $this->form_validation->set_rules('name', 'Full name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'This email has already resgitered!']);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[repassword]');
        $this->form_validation->set_rules('repassword', 'Re-Password', 'required|trim|matches[password]');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('Admin/brain', $data);
            $this->load->view('template/footer');
        } else {
            $this->Admin_model->tambahUser();
            $this->session->set_flashdata('message', 'New User Added!');
            redirect('index.php/Admin/brain');
        }
    }

    public function editBrain($id)
    {
        $data['title'] = 'Edit User';
        $data['menu1'] = 'Edit User Management';
        $data['list'] = 'Edit User Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();
        $data['brain'] = $this->Admin_model->getUserById($id);

        $this->form_validation->set_rules('name', 'Full name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[repassword]');
        $this->form_validation->set_rules('repassword', 'Re-Password', 'required|trim|matches[password]');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('Admin/edit_brain', $data);
            $this->load->view('template/footer');
        } else {
            $this->Admin_model->editUser();
            $this->session->set_flashdata('message', 'Update User Success!');
            redirect('index.php/Admin/brain');
        }
    }

    public function hapusBrain($id)
    {
        $this->Admin_model->hapusUser($id);
        $this->session->set_flashdata('message', 'Delete User Success!');
        redirect('Admin/brain');
    }

    public function detailBrain($id)
    {
        $data['title'] = 'Detail User';
        $data['menu1'] = 'Detail User Management';
        $data['list'] = 'Detail User Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['profile'] = $this->db->get('profile')->result_array();
        $data['brain'] = $this->Admin_model->getUserById($id);

        $this->form_validation->set_rules('name', 'Full name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'This email has already resgitered!']);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[repassword]');
        $this->form_validation->set_rules('repassword', 'Re-Password', 'required|trim|matches[password]');

        if ($this->form_validation->run() == false) {
            # code...
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('Admin/detail_brain', $data);
            $this->load->view('template/footer');
        } else {
            # code...
            $this->Admin_model->tambahProfile();
            $this->session->set_flashdata('message', 'Update User Success!');
            redirect('index.php/Admin/brain');
        }
    }
}
