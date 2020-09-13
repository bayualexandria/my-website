<?php

class Admin_model extends  CI_Model
{
    public function getUser()
    {
        $query = "SELECT `user`.*,`user_role`.* FROM `user` JOIN `user_role` ON `user`.`role_id`=`user_role`.`id`";
        return $this->db->query($query)->result_array();
    }
    public function getAll()
    {
        return $this->db->get('user')->result_array();
    }
    public function tambahUser()
    {
        $data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'image' => 'default.png',
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'role_id' => $this->input->post('role_id'),
            'is_active' => $this->input->post('is_active'),
            'date_created' => time()
        ];
        $this->db->insert('user', $data);
    }
    public function getUserById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }
    public function editUser()
    {
        $data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'image' => 'default.png',
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'role_id' => $this->input->post('role_id'),
            'is_active' => $this->input->post('is_active'),
            'date_created' => time()
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }
    public function hapusUser($id)
    {
        $this->db->delete('user', ['id' => $id]);
    }
    public function jumlahUser()
    {
        $query = $this->db->query("SELECT * FROM user WHERE is_active=1");
        return $query;
    }

    public function getProfile($id)
    {
        return $this->db->get_where('profile', ['id' => $id])->row_array();
    }
    public function tambahProfile()
    {
        $id_user = $this->input->post('user_id', true);
        $name = $this->input->post('name', true);
        $profil = [
            'id' => $id_user,
            'name' => $name
        ];

        $data = [
            'name' => $name,
            'TTL' => $this->input->post('email'),
            'jenis_kelamin' =>  $this->input->post('jenis_kelamin'),
            'alamat' =>  $this->input->post('alamat'),
            'status' => $this->input->post('status'),
            'user_id' => $id_user
        ];



        $this->db->insert('profile', $data);
        $this->db->insert('user', $profil);
    }
}
