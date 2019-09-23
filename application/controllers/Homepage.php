<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{
	public function index()
	{
		$data['pageContent'] = "module/homepage/index";
		$this->load->view('template/main', $data);
	}
	public function artikel()
	{
		$data['pageContent'] = "module/artikel/index";
		$this->load->view('template/main', $data);
	}
	public function konten()
	{
		$data['pageContent'] = "module/artikel/konten";
		$this->load->view('template/main', $data);
	}
	public function faq()
	{
		// $data['pageTitle'] = 'Frequently Asked Questions';
		$data['pageContent'] = 'module/faq/index';
		$this->load->view('template/main', $data);
	}
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
