<?php

    class blog extends CI_Controller {
      public function __construct()
      {
        parent::__construct();

        $this->load->model('Blogmodel');

      }
        public function index(){
		    $this->load->database();
            $this->load->model('Blogmodel');

            $data['blog'] =
            $this->Blogmodel->tampilblog();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('templates/index',$data);
            $this->load->view('templates/footer');
            
    }
    public function proses_tambah_data(){
        $config['upload_path']          = './gambar/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
              echo "gagal tambah";
        }
        else
        {
              $gambar = $this->upload->data();
              $gambar = $gambar['file_name'];
              $blog_judul= $this->input->post('blog_judul',TRUE);
              $blog_content= $this->input->post('blog_content',TRUE);
              $blog_penulis= $this->input->post('blog_penulis',TRUE);
            
              $data=array(
                  'blog_judul'=> $blog_judul,
                  'blog_content'=> $blog_content,
                  'blog_penulis'=> $blog_penulis,
                  'blog_gambar'=> $gambar,
              );
              $this->db->insert('tbl_blog',$data);
              redirect('blog');
        }
  }
  public function delete($id){
    $this->load->database();

    $this->db->where('blog_id',$id);               
    $this->db->delete('tbl_blog');

    redirect('blog');
  }
  public function edit_data($id)
  {
    $data['tbl_blog'] = $this->Blogmodel->ambil_id_blog($id);
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('home/edit_data',$data);
    $this->load->view('templates/footer');
    
  }
  public function proses_edit_data()
  {
      $this->Blogmodel->proses_edit_data();
      
      redirect('blog');
  }
 
}
?>               