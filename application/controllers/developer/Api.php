<?php

use chriskacerguis\RestServer\RestController;

class Api extends RestController
{

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        // $this->methods['users_get']['limit'] = 3;
    }

    public function users_get()
    {
        $random = bin2hex(random_bytes(8));
        var_dump($random);
        $id = $this->get('id');
        if ($id === null) {
            $users = $this->db->get('user')->result_array();
        } else {
            $users = $this->db->get_where('user', ['id' => $id])->result_array();
        }

        if ($users) {
            $this->response([
                'status' => TRUE,
                'data' => $users
            ], RestController::HTTP_OK);
        } else {
            $this->response([
                'status' => FALSE,
                'message' => 'id not found'
            ], RestController::HTTP_NOT_FOUND);
        }
    }

    public function users_delete()
    {
        $id = $this->delete('id');
        $user = $this->db->delete('user', ['id' => $id]);
        if ($id === null) {
            $this->response([
                'status' => FALSE,
                'message' => 'provide in id'
            ], RestController::HTTP_BAD_REQUEST);
        } else {
            if ($user > 0) {
                $this->response([
                    'status' => TRUE,
                    'data' => $user,
                    'message' => 'deleted!'
                ], RestController::HTTP_OK);
            } else {
                $this->response([
                    'status' => FALSE,
                    'message' => 'id not found'
                ], RestController::HTTP_BAD_REQUEST);
            }
        }
    }

    public function users_post()
    {
        $data = [
            'name' => $this->post('name'),
            'email' => $this->post('email'),
            'image' => 'default.png',
            'password' => $this->post('password'),
            'role_id' => 1,
            'is_active' => 1,
            'date_created' => time()
        ];
        $users = $this->db->insert('user', $data);

        if ($users > 0) {
            $this->response([
                'status' => TRUE,
                'data' => $users,
                'message' => 'new data is created'
            ], RestController::HTTP_CREATED);
        } else {
            $this->response([
                'status' => FALSE,
                'message' => 'failed to create new data!'
            ], RestController::HTTP_BAD_REQUEST);
        }
    }

    public function users_put()
    {
        $id = $this->put('id');
        $data = [
            'name' => $this->put('name'),
            'email' => $this->put('email'),
            'image' => 'default.png',
            'password' => $this->put('password'),
            'role_id' => 1,
            'is_active' => 1,
            'date_created' => time()
        ];
        $users = $this->db->update('user', $data, ['id' => $id]);
        if ($users > 0) {
            $this->response([
                'status' => TRUE,
                'data' => $users,
                'message' => 'data is updated'
            ], RestController::HTTP_CREATED);
        } else {
            $this->response([
                'status' => FALSE,
                'message' => 'failed to update data!'
            ], RestController::HTTP_BAD_REQUEST);
        }
    }
}
