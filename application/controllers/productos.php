<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Productos extends CI_Controller {

	
	public function index()
	{
		$token = getToken($this->session->userdata('uid'));
		
		
		$this->load->library('rest', array(
			'server' => $this->config->item('apidomain')
		));
                
        $resultados = $this->rest->get('users/' . $this->session->userdata('meliid') . '/items/search', 
			array(
				'access_token' => $token
			), 'json');
		
		$itemsIds = '';
		
		
		foreach($resultados->results as $itemId){
			$itemsIds .= $itemId . ',';
		}
	
		
		$resultadosItems = $this->rest->get('items', 
			array(
				'access_token' => $token,
				'ids' => $itemsIds
			), 'json');
		
		foreach($resultadosItems as $itemMl){
			$data['itemsMeli'][]= array(
				'title' => $itemMl->title,
				'pictures' => $itemMl->pictures);
		}
		
		
		
		
		$query = $this->db->get('items');
		$data['productos'] = $query->result_array();
	
		//$data['productos'] = array('uno', 'dos', 'tres');
		$this->load->view('productos_view',$data);
	}
}
