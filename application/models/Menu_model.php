<?php

class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
      $query="SELECT `user_sub_menu`.*,`user_menu`.`menu` FROM `user_sub_menu`JOIN `user_menu`ON`user_sub_menu`.`menu_id`=`user_menu`.`id`";
     return $this->db->query($query)->result_array();
    }

    // Tabel Usr_sub_menu
    public function getUserSubMenuById($id)
    {
     return $this->db->get_where('user_sub_menu',['id'=>$id])->row_array();
    }
    public function tambahSubMenu(){
    $data = [
      'title' => $this->input->post('title'),
      'menu_id' => $this->input->post('menu_id'),
      'url' => $this->input->post('url'),
      'icon' => $this->input->post('icon'),
      'is_active' => $this->input->post('is_active')
    ];
    $this->db->insert('user_sub_menu',$data);
    }

    public function hapusSubMenu($id)
    {
      // $this->db->where('id',$id);
      $this->db->delete('user_sub_menu',['id'=>$id]);
    }

  public function editSubMenu()
  {
    $data = [
      'title' => $this->input->post('title'),
      'menu_id' => $this->input->post('menu_id'),
      'url' => $this->input->post('url'),
      'icon' => $this->input->post('icon'),
      'is_active' => $this->input->post('is_active')
    ];
    $this->db->where('id',$this->input->post('id'));
    $this->db->update('user_sub_menu', $data);
  }

  // Tabel User_menu
  public function getUserMenuById($id)
  {
    return $this->db->get_where('user_menu', ['id'=>$id])->row_array();
  }

  public function hapusUserMenu($id)
  {
    $this->db->delete('user_menu',['id'=>$id]);
  }

}