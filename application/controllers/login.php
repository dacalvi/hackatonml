<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {


	
	public function index()
	{
		$data['resaltar'] = 'ingresar';
		$this->load->view('login', $data);
	}
	
	public function autenticar(){
		$usuario = $this->input->post('email');
		$password = $this->input->post('password');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_error_delimiters('<span>', '</span>');
		$this->form_validation->set_message('required', 'El campo %s es requerido');
		$this->form_validation->set_rules('password', 'Contraseña', 'required|callback_passwordcheck');
		$this->form_validation->set_message('passwordcheck', 'Usuario o Contraseña incorrectos');
		if ($this->form_validation->run()){
			$this->db->where('email', $this->input->post("email"));
			$this->db->update('usuarios', array('ultimo_ingreso'=>date('Y-m-d H:i:s'), 'ultimo_ip'=>$this->input->ip_address()));
			redirect('home/');
		}else{
			
			$data['resaltar'] = 'ingresar';
			$this->load->view('login', $data);
		}
	}
	
	public function passwordcheck(){
		$query = $this->db->get_where('usuarios', array('email'=>$this->input->post('email')));
		$ra = $query->result();
		if(count($ra) < 1){
			$this->form_validation->set_message('email', 'Email no existe');
			return false;
		}
		$passwordDB = $ra[0]->password;
		$passwordDB_decoded = $this->encrypt->decode($passwordDB, $this->config->item('encryption_key'));
		
		
		if($passwordDB_decoded == $this->input->post('password')){
			$this->usuario_id = $ra[0]->id;
			return true;
		}else{
			
			return false;
		}
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
