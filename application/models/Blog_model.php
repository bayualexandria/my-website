<?php

class Blog_model extends CI_Model
{
    // Table blog
    public function jumlahBlog()
    {
        $query = $this->db->query("SELECT * FROM blog WHERE is_active=1");
        return $query;
    }

    public function getBlogActive6()
    {
        $queryContent = "SELECT * FROM blog WHERE is_active=1 ORDER BY date_created DESC LIMIT 6";
        return $this->db->query($queryContent)->result_array();
        # code...
    }

    public function getAllBlog()
    {
        return $this->db->get('blog')->result_array();
    }

    public function getAllBlogById($id)
    {
        return $this->db->get_where('blog', ['id_blog' => $id])->row_array();
    }
    public function tambahBlog()
    {
        $data = [
            'title' => $this->input->post('title'),
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
            'is_active' => $this->input->post('is_active'),
            'id_category' => $this->input->post('id_category'),
            'image' => $this->input->post('image'),
            'date_created' => time()
        ];

        if ($data['id_category'] = 1) {
            $data['image'] = 'ci1.jpg';
        }

        $this->db->insert('blog', $data);
    }
    public function editBlog()
    {
        $data = [
            'title' => $this->input->post('title'),
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
            'is_active' => $this->input->post('is_active'),
            'id_category' => $this->input->post('id_category'),
            'image' => $this->input->post('image'),
            'date_created' => time()
        ];

        if ($data['id_category'] = 1) {
            $data['image'] = 'ci1.jpg';
        }
        $this->db->where('id_blog', $this->input->post('id_blog'));
        $this->db->update('blog', $data);
    }

    public function hapusBlog($id)
    {
        $this->db->delete('blog', ['id_blog' => $id]);
    }

    public function getBlog($id)
    {
        $query = "SELECT `blog`.*,`category`.* FROM `blog` JOIN `category` ON `blog`.`id_category`=`category`.`id` WHERE `blog`.`id_category`=$id";
        return $this->db->query($query)->result_array();
    }
    public function Blogs($id = null)
    {
        if ($id == null) {
            $query = "SELECT `blog`.*,`category`.`kategori` FROM `blog` JOIN `category` ON `blog`.`id_category`=`category`.`id`";
        } else {
            $query = "SELECT `blog`.*,`category`.`kategori` FROM `blog` JOIN `category` ON `blog`.`id_category`=`category`.`id` WHERE `id_blog`=$id";
        }
        return $this->db->query($query)->result_array();
    }
    public function getAllBlogByCategory1()
    {
        $query = "SELECT `blog`.*,`category`.* FROM `blog` JOIN `category` ON `blog`.`id_category`=`category`.`id` WHERE `category`.`kategori`='Pemrograman' ORDER BY `blog`.`date_created` DESC";
        return $this->db->query($query)->result_array();
    }
    public function getAllBlogByCategory2()
    {
        $query = "SELECT `blog`.*,`category`.* FROM `blog` JOIN `category` ON `blog`.`id_category`=`category`.`id` WHERE `category`.`kategori`='Jaringan' ORDER BY `blog`.`date_created` DESC";
        return $this->db->query($query)->result_array();
    }
    public function getAllBlogByCategory3()
    {
        $query = "SELECT `blog`.*,`category`.* FROM `blog` JOIN `category` ON `blog`.`id_category`=`category`.`id` WHERE `category`.`kategori`='Puisi' ORDER BY `blog`.`date_created` DESC";
        return $this->db->query($query)->result_array();
    }
    public function getAllBlogByCategory4()
    {
        $query = "SELECT `blog`.*,`category`.* FROM `blog` JOIN `category` ON `blog`.`id_category`=`category`.`id` WHERE `category`.`kategori`='Server' ORDER BY `blog`.`date_created` DESC";
        return $this->db->query($query)->result_array();
    }



    // Tabel Category
    public function getAllCategory()
    {
        return $this->db->get('category')->result_array();
    }
    public function getK($limit, $start)
    {
        return $this->db->get('category', $limit, $start)->result_array();
    }
    public function getCategory($limit, $start)
    {
        return $this->db->get_where('category', ['is_active' => 1], $limit, $start)->result_array();
    }
    public function countAllCategory()
    {
        return $this->db->get('category')->num_rows();
    }

    // Pagination
    public function getBlogs($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('judul', $keyword);
            $this->db->or_like('title', $keyword);
            $this->db->or_like('date_created', $keyword);
        }

        return $this->db->get('blog', $limit, $start)->result_array();
    }

    public function countAllBlogs()
    {
        return $this->db->get('blog')->num_rows();
    }

    // Comment
    public function getCommentIdBlog($id)
    {
        $query = "SELECT `comments`.* FROM `blog` JOIN `comments` ON `blog`.`id_blog`=`comments`.`id_blog` WHERE `blog`.`id_blog`=$id ORDER BY `comments`.`date_created` DESC LIMIT 10";
        return $this->db->query($query)->result_array();
    }

    public function getComments($id)
    {
        $query = "SELECT `comments`.* FROM `blog` JOIN `comments` ON `blog`.`id_blog`=`comments`.`id_blog` WHERE `blog`.`id_blog`=$id ORDER BY `comments`.`date_created`";
        return $this->db->query($query)->num_rows();
    }
}
