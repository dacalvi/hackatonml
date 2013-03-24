<?php 
if(!function_exists('isEnabled')){
	function isEnabled($key){
		$ci =& get_instance();
		$ci->load->database();
		$ci->db->select('value');
		$ci->db->where('key', $key);
		$query = $ci->db->get('configuraciones');
		$r = $query->result();
		return ($r[0]->value == 'on');
	}
}

if(!function_exists('getDbConfigValue')){
	function getDbConfigValue($key){
		$ci =& get_instance();
		$ci->load->database();
		$ci->db->select('value');
		$ci->db->where('key', $key);
		$query = $ci->db->get('configuraciones');
		$r = $query->result();
		if(count($r) > 0){
			return $r[0]->value;
		}else{
			return '';
		}
	}
}

if(!function_exists('as')){
	function active($resaltar, $actual){
		if($resaltar == $actual){
			echo 'class="active"';
		}
	}
}