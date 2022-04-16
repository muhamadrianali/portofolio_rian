<?php

    class jadwal_model extends CI_Model{
        function tampilBlog(){
            return $this->db->get ('tbl_jadwal')->result_array();
        }
        public function add_blog($tambah){
            return $this->db->insert('tbl_jadwal',$tambah);
        }
        public function insertBlog($data){
        $this->db->insert('jadwal_mading',$data);
        return $this->db->insert_id();
        }
        public function ambil_id_blog($no)
        {
            return $this->db->get_where('tbl_jadwal',['no'=>$no])->row_array();
        }
        public function proses_edit_data()
        {
           $data = [
              "hari" => $this->input->post('hari'),
              "content" => $this->input->post('content'),
            
              
           ];
           $this->db->where('no', $this->input->post('no'));
           $this->db->update('tbl_jadwal', $data);
        }
    }
 ?>