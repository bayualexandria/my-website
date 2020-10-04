<?php

class User_model extends CI_Model
{
    public function deleteUser($id)
    {
        $this->db->delete('user', ['id' => $id]);
        return $this->db->affected_rows();
    }
}
