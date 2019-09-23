<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Faq extends CI_Controller
{
    public function index()
    {
        // $data['pageTitle'] = 'Frequently Asked Questions';
        $data['pageContent'] = 'module/faq/index';
        $this->load->view('template/main', $data);
    }
}
