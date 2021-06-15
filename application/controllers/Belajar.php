<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class belajar extends CI_Controller
{
 
    
    public function Hello()
    {
        $this->load->view('belajar_view');
    }

    public function contact()
    {
        $this->load->view('belajar_view');
    }
}