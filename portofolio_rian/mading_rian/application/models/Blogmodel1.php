<?php

    class Blogmodel1 extends CI_Model{
        function tampilBlog(){
            return $this->db->get ('tbl_blog')->result_array();
        }
        public function add_blog($tambah){
            return $this->db->insert('tbl_blog',$tambah);
        }
        public function insertBlog($data){
        $this->db->insert('blog1',$data);
        return $this->db->insert_id();
        }
        public function ambil_id_blog($blog_id)
        {
            return $this->db->get_where('tbl_blog',['blog_id'=>$blog_id])->row_array();
        }
        public function proses_edit_data()
        {
           $data = [
              "blog_judul" => $this->input->post('blog_judul'),
              "blog_content" => $this->input->post('blog_content'),
              "blog_penulis" => $this->input->post('blog_penulis'),
              
           ];
           $this->db->where('blog_id', $this->input->post('blog_id'));
           $this->db->update('tbl_blog', $data);
        }
    }
 ?>