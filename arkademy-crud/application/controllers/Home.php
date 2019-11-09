<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('data_model');

  }

  public function index(){

    $data['get_data'] = $this->data_model->getData()->result_array();
    $this->load->view('template/header');
    $this->load->view('home_view', $data);
    $this->load->view('template/footer');
  }

  public function insert(){

    if($this->data_model->insertData()){
      $this->session->set_flashdata('pesan', '
        <div class="alert alert-success alert-dismissible fade show fixed-bottom mb-5" role="alert">
          Data Berhasil Ditambah
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
        redirect(base_url());
      }else{
        redirect(base_url());
    }
  }

  public function change(){
    
    $data['get_data'] = $this->data_model->getDataById()->result_array();
    $this->load->view('template/header');
    $this->load->view('edit_view', $data);
    $this->load->view('template/footer');
  }

  public function edit(){

    if($this->data_model->editData()){
      $this->session->set_flashdata('pesan', '
        <div class="alert alert-warning alert-dismissible fade show fixed-bottom mb-5" role="alert">
          Data Berhasil Diubah
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
        redirect(base_url());
      }else{
        redirect(base_url());
    }
  }

  public function delete(){

    if($this->data_model->deleteData()){
      $this->session->set_flashdata('pesan', '
        <div class="alert alert-danger alert-dismissible fade show fixed-bottom mb-5" role="alert">
          Data Berhasil Dihapus
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
        redirect(base_url());
      }else{
        redirect(base_url());
    }
  }

}