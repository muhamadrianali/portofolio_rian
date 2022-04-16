<?php
class login extends CI_Controller{
    public function __construct()
    {
      parent::__construct();

      $this->load->library('form_validation');

    }
    public function index(){
    $this->load->view('templates/header');
    $this->load->view('home/login');
   
    }
    public function registration(){
        $this->form_validation->set_rules('name','Name','required|trim');
        $this->form_validation->set_rules('email','Email','required|trim|valid_email');
       if($this->form_validation->run()==false){
           $this->load->view('templates/header');
           $this->load->view('home/registration');
           $this->load->view('templates/footer');

       }else{
           echo 'data berhasil di tambahkan !';
       }
       
    }
}