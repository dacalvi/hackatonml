<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['resaltar'] = 'dashboard';
		$this->load->view('dashboard_view', $data);
	}
}
