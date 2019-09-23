<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Galery extends CI_Controller
{
    public function foto()
    {
        $data['pageContent'] = "module/galery/foto";
        $this->load->view('template/main', $data);
    }
    public function video()
    {
        $data['pageContent'] = "module/galery/video";
        $this->load->view('template/main', $data);
    }
}
