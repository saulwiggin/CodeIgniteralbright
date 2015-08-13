<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ipo_model extends CI_Controller {

	public function get_records(){

		$query = $this->db->get('ipo');

		//echo print_r($query);

		//if ($query->result_array() > 0)
		//{
		//	show_error('Database is empty!');
		//} else {
		//	echo print_r($query);
			return $query->result_array();
	//	}		
	}
}