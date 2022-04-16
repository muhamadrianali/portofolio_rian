<?php

class Data_user extends CI_Controller
{
    function index()
    {
        $data['tbl_user'] = $this->M_data_user->SemuaData();
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/sidebar');
        $this->load->view('partial_admin/topbar');
        $this->load->view('partial_admin/js');
        $this->load->view('content_admin/data_user', $data);
        $this->load->view('partial_admin/footer');
    }
    function tambah_data()
    {
        $data['tbl_user'] = $this->M_data_user->SemuaData();
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/sidebar');
        $this->load->view('partial_admin/topbar');
        $this->load->view('partial_admin/js');
        $this->load->view('content_admin/tambah_data_user', $data);
        $this->load->view('partial_admin/footer');
    }
    function proses_tambah_data()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $password = md5($password);
        $nama_lengkap = $this->input->post('nama_lengkap');
        $no_hp = $this->input->post('no_hp');


        $data = array(
            'email' => $email,
            'password' => $password,
            'nama_lengkap' => $nama_lengkap,
            'no_hp' => $no_hp

        );

        $this->db->insert('tbl_user', $data);
        redirect(base_url('index.php/data_user'));
    }
}
