<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller
{
    function index()
    {
        $this->load->model('m_data');
        $data['user'] = $this->m_data->ambil_data()->result();
        $this->load->view('v_user' ,$data);
    }
}