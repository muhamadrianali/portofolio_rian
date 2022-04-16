<?php

    class jadwal_mading extends CI_Controller {
      public function __construct()
      {
        parent::__construct();

        $this->load->model('jadwal_model');

      }
        public function index(){
		    $this->load->database();
            $this->load->model('jadwal_model');

            $data['tbl_jadwal'] =
            $this->jadwal_model->tampilblog();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('templates/jadwal_mading',$data);
            $this->load->view('templates/footer');
            
    }
    public function proses_tambah_data()
    {
       
       $this->jadwal_model->proses_tambah_data();
       redirect('jadwal_mading');
    } 
    public function hapus_data($no)
    {
       
        $this->jadwal_model->delete_data($no);
        redirect('jadwal_mading');
    }
  public function edit_data($id)
  {
    $data['tbl_jadwal'] = $this->jadwal_model->ambil_id_blog($id);
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('home/edit_data1',$data);
    $this->load->view('templates/footer');
    
  }
  public function proses_edit_data()
  {
      $this->jadwal_model->proses_edit_data();
      
      redirect('jadwal_mading');
  }
 
}
?>               