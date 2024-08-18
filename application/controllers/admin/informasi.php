<?php
class Informasi extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('Informasi_model');
  }

  public function index() {
    $data['title'] = 'Manajemen Informasi';
    $data['informasi'] = $this->Informasi_model->get_all_informasi();
    $this->load->view('admin/informasi', $data);
  }

  public function tambah() {
    $title = $this->input->post('title');
    $content = $this->input->post('content');
    
    // Proses upload gambar
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'jpg|jpeg|png|gif';
    $config['max_size'] = 2048; // 2MB
    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('gambar')) {
      $error = $this->upload->display_errors();
      echo $error; // Tampilkan error upload jika ada
    } else {
      $data_upload = $this->upload->data();
      $gambar = $data_upload['file_name'];
      $this->Informasi_model->tambah_informasi($title, $content, $gambar);
    }
    
    redirect('admin/informasi');
  }

  public function edit($id) {
    $data['title'] = 'Edit Informasi';
    $data['informasi'] = $this->Informasi_model->get_informasi_by_id($id);
    $this->load->view('admin/edit_informasi', $data);
  }

  public function update() {
    $id = $this->input->post('id');
    $title = $this->input->post('title');
    $content = $this->input->post('content');
    
    // Proses upload gambar jika ada
    if ($_FILES['gambar']['name']) {
      $config['upload_path'] = './uploads/';
      $config['allowed_types'] = 'jpg|jpeg|png|gif';
      $config['max_size'] = 2048; // 2MB
      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('gambar')) {
        $error = $this->upload->display_errors();
        echo $error; // Tampilkan error upload jika ada
      } else {
        $data_upload = $this->upload->data();
        $gambar = $data_upload['file_name'];
        $this->Informasi_model->update_informasi($id, $title, $content, $gambar);
      }
    } else {
      $this->Informasi_model->update_informasi($id, $title, $content);
    }
    
    redirect('admin/informasi');
  }

  public function nonaktif($id) {
    $this->Informasi_model->nonaktifkan_informasi($id);
    redirect('admin/informasi');
  }
}
