<?php

use chriskacerguis\RestServer\RestController;

class Blog extends RestController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Blog_model', 'Blog');
    }

    public function index_get()
    {

        $id = $this->get('id_blog');

        if ($id === null) {

            $blog = $this->Blog->Blogs();
        } else {

            $blog = $this->Blog->Blogs($id);
        }

        if ($blog) {

            $this->response([
                'status' => TRUE,
                'data' => $blog
            ], RestController::HTTP_OK);
        } else {

            $this->response([
                'status' => FALSE,
                'message' => 'id not found'
            ], RestController::HTTP_NOT_FOUND);
        }
    }

    public function index_delete()
    {

        $id = $this->delete('id_blog');

        $user = $this->db->delete('blog', ['id_blog' => $id]);

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
}
