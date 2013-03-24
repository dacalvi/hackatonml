<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {
    
	public function index(){
		$data['resaltar'] = 'register';
		$this->load->view('register', $data);
	}
    
	function check_captcha($val) {
		if ($this->recaptcha->check_answer($this->input->ip_address(),$this->input->post('recaptcha_challenge_field'),$val)) {
			return TRUE;
		} else {
			$this->form_validation->set_message('check_captcha',$this->lang->line('recaptcha_incorrect_response'));
			return FALSE;
		}
	}
    
	public function activate($hash){
		$query = $this->db->get_where('usuarios', array('hash_activacion' => $hash));
		$ra = $query->result();
		if(count($ra) < 1){ 
			$data['header'] = "Su codigo de activacion no ha sido encontrado o es invalido";
			$data['mensaje'] = "Intente registrarse nuevamente o comuniquese con nosotros a travez de nuestro formulario de contacto. Gracias!";
		}else{
			$this->db->where('hash_activacion', $hash);
			$this->db->update('usuarios', array('activo' => 'activo', 'hash_activacion'=>'','ultimo_ingreso'=>date("Y-m-d h:i:s"),'ultimo_ip'=>$this->input->ip_address()));
			$data['header'] = "Su email ha sido confirmado";
			$data['mensaje'] = "Su cuenta ya esta activa, ya puede empezar a disfrutar de nuestras ofertas!";
		}
		$this->load->view('messages_view', $data);	
		
		
		
	}
	
	public function registerAction(){
		$this->form_validation->set_message('required', 'Este campo es requerido');
		$this->form_validation->set_message('valid_email', 'No se ha escrito una dirección de email válida');
		$this->form_validation->set_message('is_unique', 'Esta direccion de email ya existe como usuario');
		$this->form_validation->set_message('min_length', 'Este campo debe tener como minimo 6 caracteres');
		$this->form_validation->set_message('matches', 'Las contraseñas no coinciden');
		
		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
		$this->form_validation->set_rules('apellido', 'Apellido', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[usuarios.email]|valid_email');
		$this->form_validation->set_rules('password', 'Contraseña', 'required|min_length[6]');
		$this->form_validation->set_rules('repassword', 'Repetir Contraseña', 'required|matches[password]');
		$this->form_validation->set_rules('fecha_nacimiento', 'Fecha de Nacimiento', 'required');
		$this->form_validation->set_rules('movil', 'Teléfono celular', 'required');
		$this->form_validation->set_rules('ciudad', 'Ciudad', 'required');
		$this->form_validation->set_rules('sexo', 'Sexo', 'required');
		$this->form_validation->set_rules('dni', 'Cedula/ID numero', 'required');

		if ($this->form_validation->run() == FALSE){
			$data['resaltar'] = 'register';
			$this->load->view('register', $data);
		}else{
			$insertData = array(
				'email'=>$this->input->post('email'),
				'password'=>$this->encrypt->encode($this->input->post('password'), $this->config->item('encryption_key')),
				'nombre'=>$this->input->post('nombre'),
				'apellido'=>$this->input->post('apellido'),
				'fecha_nacimiento'=>$this->input->post('fecha_nacimiento'),
				'created_at'=>date("Y-m-d h:i:s"),
				'movil'=>$this->input->post('movil'),
				'activo'=>0,
				'hash_activacion'=>md5($this->encrypt->encode($this->input->post('password'), $this->config->item('encryption_key'))),
				'ciudad'=>$this->input->post('ciudad'),
				'telefono'=>$this->input->post('telefono'),
				'sexo'=>$this->input->post('sexo'),
				'dni'=>$this->input->post('dni'),
				'ultimo_ingreso'=>date("Y-m-d h:i:s"),
				'newsletter'=>$this->input->post('newsletter')
			);
			$this->db->insert('usuarios', $insertData);
			
			
			//echo "Mando un mail de registro, ponele...";
			/*
			$this->load->library('email');
			$this->email->from(getDbConfigValue('emailSiteOwner'), getDbConfigValue('nameSiteOwner'));
			$this->email->to($this->input->post('email')); 
			$this->email->subject('Activacion de Cuenta - Compra de Todo');
			$this->email->message('Para poder activar tu cuenta primero necesitamos confirmar tu email
				Ingresa a ' . base_url() . 'register/activate/' . $insertData['hash_activacion'] );	
			$this->email->send();
			*/
			
			
			//Logueamos al usuario
			$this->session->set_userdata('logged_in', true);
			$this->session->set_userdata('Nombre', $this->input->post('nombre'));
			$this->session->set_userdata('email', $this->input->post('email'));
			$this->session->set_userdata('uid', $this->db->insert_id() );
			
			redirect('api/forceautenticar');
		}
	}
}
