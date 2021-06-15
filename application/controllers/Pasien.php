<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pasien extends CI_controller {

    public function index()
    {
        $this->load->model('pasien_model','pasien1');
        $this->pasien1->id=1;
        $this->pasien1->kode='010001';
        $this->pasien1->nama='Nathalie';
        $this->pasien1->gender='P';

        $this->load->model('pasien_model','pasien2');
        $this->pasien2->id=2;
        $this->pasien2->kode='020001';
        $this->pasien2->nama='Eizy';
        $this->pasien2->gender='L';

        $list_pasien = [$this->pasien1, $this->pasien2];
        $data['list_pasien']=$list_pasien;

        $this->load->view('header');
        $this->load->view('pasien/index',$data);
        $this->load->view('footer ');

    }
}