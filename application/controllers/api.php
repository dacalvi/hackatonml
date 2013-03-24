<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {

	public function index()
	{
		?><a href="<?php echo base_url() . index_page();?>/api/autenticar">Autenticar</a><?php 
	}
	
	public function autenticar(){
		if($this->session->userdata('uid') == false){
			redirect("login");
		}
		redirect(
			$this->config->item('authdomain').
			"authorization?".
			"response_type=code&client_id=". $this->config->item('client_id').
			"&redirect_uri=".$this->config->item('meliloginredirect')
		);
	}
	
	public function forceautenticar(){
		if($this->session->userdata('uid') == false){
			redirect("login");
		}
		redirect(
			$this->config->item('authdomain').
			"authorization?".
			"response_type=code&force_login=true&client_id=". $this->config->item('client_id').
			"&redirect_uri=".$this->config->item('meliloginredirect')
		);
	}
	
	public function loginreturn(){
	
		if(!$this->session->userdata('uid')){
			redirect('login');
		}
		
		//si no viene desde autenticar la primera vez
		if(!$this->input->get('code')){
			redirect('productos');
		}
	
		$this->load->library('rest', array(
			'server' => $this->config->item('apidomain')
		));
                
        $user = $this->rest->post('oauth/token', array(
			'grant_type' => 'authorization_code',
			'client_id' => $this->config->item('client_id'),
			'client_secret' => $this->config->item('appsecret'),
			'code' => $this->input->get('code'),
			'redirect_uri' => $this->config->item('meliloginredirect')
			), 'json');
			
		//if meli user is already in database 
		$userdata = $this->rest->get('users/me', array('access_token'=>$user->access_token));
		
		//var_dump($userdata);die();
		
		$data['access_token'] = $user->access_token;
		$data['expires_in'] = $user->expires_in;
		$data['refresh_token'] = $user->refresh_token;
		$data['meliid'] = $user->refresh_token;			
		$this->db->where('id', $this->session->userdata('uid'));
		$this->db->update('usuarios', $data);
		
		if(isset($userdata->id)){
			$this->session->set_userdata('meliid', $userdata->id );
		}else{
			$this->session->set_userdata('meliid', $userdata->seller_id );
		}
		
		redirect('dashboard');
	}
	
	
	
}
