<?php 
if(!function_exists('getToken')){
	function getToken($uid){
		$ci =& get_instance();
		$ci->load->database();
		$ci->db->select('access_token');
		$ci->db->where('id', $uid);
		$query = $ci->db->get('usuarios');
		$r = $query->result();
		if(count($r) > 0){
			return $r[0]->access_token;
		}else{
			return false;
		}
	}
}