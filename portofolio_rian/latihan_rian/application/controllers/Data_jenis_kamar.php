<?php

class Data_jenis_kamar extends CI_Controller
{
    function index()
    {
        $data['tbl_jenis_kamar'] = $this->M_jenis_kamar->SemuaData();
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/sidebar');
        $this->load->view('partial_admin/topbar');
        $this->load->view('partial_admin/js');
        $this->load->view('content_admin/data_jenis_kamar', $data);
        $this->load->view('partial_admin/footer');
    }
    function tambah_data()
    {
        $data['title'] = 'Halaman Tambah ';
        $data['tbl_jenis_kamar'] = $this->M_jenis_kamar->SemuaData();
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/sidebar');
        $this->load->view('partial_admin/topbar');
        $this->load->view('partial_admin/js');
        $this->load->view('content_admin/tambah_data_jenis_kamar', $data);
        $this->load->view('partial_admin/footer');
    }
    function proses_tambah_data()
    {
        $config['upload_path']  ='./gambar/';
        $config['allowed_types']  ='gif|jpg|png';
        $config['max_size']  =10000;
        $config['max_widht']  =10000;
        $config['max_height']  =10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            echo "Gagal Tambah";
        } else {

              $gambar = $this->upload->data();
              $gambar = $gambar['file_name'];
              $nama_jenis_kamar= $this->input->post('nama_jenis_kamar',TRUE);
              $keterangan= $this->input->post('keterangan',TRUE);
              $harga= $this->input->post('harga',TRUE);
          
        
              $data=array(
                  'nama_jenis_kamar'=> $nama_jenis_kamar,
                  'keterangan'=> $keterangan,
                  'harga'=> $harga,
                  'gambar'=> $gambar,
              );
              $this->db->insert('tbl_jenis_kamar',$data);
              redirect(base_url('index.php/data_jenis_kamar'));
            }
    }
    function update_data($id_jenis)
    {
        $data['tbl_jenis_kamar'] = $this->M_jenis_kamar->update($id_jenis);
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/sidebar');
        $this->load->view('partial_admin/topbar');
        $this->load->view('partial_admin/js');
        $this->load->view('content_admin/update_data_jenis_kamar', $data);
        $this->load->view('partial_admin/footer');
    }
    function proses_update_data()
    {

        $data = [
            'nama_jenis_kamar' => $this->input->post('nama_jenis_kamar'),
            'keterangan' => $this->input->post('keterangan'),
            'harga' => $this->input->post('harga'),
            'foto' => $this->input->post('foto'),
        ];
        $this->db->where('id_jenis', $this->input->post('id_jenis'));
        $this->db->update('tbl_jenis_kamar', $data);
        redirect(base_url('index.php/data_jenis_kamar'));
    }
    function hapus_data($id_jenis)
    {
        $this->M_jenis_kamar->hapus($id_jenis);
        redirect(base_url('index.php/data_jenis_kamar'));
    }
    

}