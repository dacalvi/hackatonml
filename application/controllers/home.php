<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['resaltar'] = 'inicio';
		$this->load->view('home_view', $data);
	}
}
