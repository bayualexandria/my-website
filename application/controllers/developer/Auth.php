<?php

use chriskacerguis\RestServer\RestController;

class Auth extends RestController 
{
    public function login_post()
    {
        $email=$this->input->post('email');
        $password=$this->input->post('password');

        $user=$this->db->get_where('user',['email'=>$email])->row_array();

        if ($user) {
            if($user['is_active'] == 1){
                if (password_verify($password,$user['password'])) {
                    $this->response([
                        'status' => TRUE,
                        'data' => $user,
                        'message' => 'Data telah terakses'
                    ], RestController::HTTP_CREATED);
                }else{
                    $this->response([
                        'status' => FALSE,
                        'message' => 'Password yang anda masukan salah!'
                    ], RestController::HTTP_BAD_REQUEST);
                }
            }else{
                $this->response([
                    'status' => FALSE,
                    'message' => 'User atau email belum diaktifasi'
                ], RestController::HTTP_BAD_REQUEST);
            }
        }else{
            $this->response([
                'status' => FALSE,
                'message' => 'User atau email belum terdaftar'
            ], RestController::HTTP_BAD_REQUEST);
        }
    }
}
