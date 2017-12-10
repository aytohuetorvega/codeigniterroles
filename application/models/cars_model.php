<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class Cars_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function get_cars($id_user)
	{
			
		$query = 'SELECT * FROM cars';
		if (!empty($id_user))
		{
			$query = $query .' WHERE Id_users = '.$this->db->escape($id_user);			
		}
				
	    $result = $this->db->query($query);	

		if($result->num_rows() > 0)
		{
			return $result->result();
		}else{
			$this->session->set_flashdata('no_cars','No existen coches para ese usuario');
			redirect(base_url().'login','refresh');
		}
	}
}
