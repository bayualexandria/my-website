<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Menu_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['menu1']='Menu';
        $data['list']='Menu';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
  
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('Menu/menu', $data);
            $this->load->view('template/footer');
        }else {
            $this->db->insert('user_menu',['menu'=>$this->input->post('menu')]);
            $this->session->set_flashdata('message','New Menu Added!');
            redirect('index.php/Menu');
        }
    }

    public function hapusUserMenu($id)
    {
        $this->Menu_model->hapusUserMenu($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Delete Sub Menu Success!</div>');
        redirect('index.php/Menu');
    }


    // Controller User_Sub_Menu
    
    public function submenu()
    {
        $data['menu1']='Menu';
        $data['title'] = 'Sub Menu Management';
        $data['list']='Sub Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->model('Menu_model','menu');

        $data['subMenu']=$this->menu->getSubMenu();
        

        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required|trim');
        $this->form_validation->set_rules('url', 'Url', 'required|trim');
        $this->form_validation->set_rules('icon', 'Icon', 'required|trim');
            
        if ($this->form_validation->run()==false) {
            # code...
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('Menu/submenu', $data);
            $this->load->view('template/footer');
        }else {
            $this->Menu_model->tambahSubMenu();
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">New Sub Menu Added!</div>');
            redirect('index.php/Menu/submenu');
        }
    
    }

    public function editSubMenu($id)
    {
        $data['menu1'] = 'Menu';
        $data['title'] = ' Edit Sub Menu Management';
        $data['list']='Edit Sub Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['sub_menu'] = $this->Menu_model->getUserSubMenuById($id);

        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required|trim');
        $this->form_validation->set_rules('url', 'Url', 'required|trim');
        $this->form_validation->set_rules('icon', 'Icon', 'required|trim');

       

        if ($this->form_validation->run() == false) {
            # code...
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('Menu/edit_sub_menu', $data);
            $this->load->view('template/footer');
        } else {
            $this->Menu_model->editSubMenu();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Sub Menu Added!</div>');
            redirect('index.php/Menu/submenu');
        }
    }
   
    public function hapusSubMenu($id){
        $this->Menu_model->hapusSubMenu($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Delete Sub Menu Success!</div>');
        redirect('index.php/Menu/submenu');
    }
    public function detailSubMenu($id)
    {
        $this->Menu_model->getUserSubMenu($id);
      
    }
    
}