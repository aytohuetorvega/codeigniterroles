<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class Login_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	// public function login_user($username,$password)
	// {
	    // $query = 'SELECT * FROM users WHERE username = '.$this->db->escape($username).' and password = '.$this->db->escape($password);
	    // $result = $this->db->query($query);	

		// if($result->num_rows() == 1)
		// {
			// return $result->row();
		// }else{
			// $this->session->set_flashdata('usuario_incorrecto','Los datos introducidos son incorrectos');
			// redirect(base_url().'login','refresh');
		// }
	// }
	
	public function login_user($username,$password)
	{
		 //obtenemos los datos del usuario que quiere iniciar sesión
		 $query = 'SELECT * FROM users WHERE username = '.$this->db->escape($username);

		 $result = $this->db->query($query);
		 //si el nombre de usuario coincide y sólo existe uno procedemos
		 if($result->num_rows() == 1)
		 {
			$user = $result->row();
			//en pass guardamos el hash del usuario que tenemos en la base
			//de datos para comprobarlo con el método check_password de Bcrypt
			$hash = $user->password;
			log_message('info', 'Hash-:'.$hash);
			log_message('info', 'Password-:'.$password);

			//esta es la forma de comprobar si el password del 
			//formulario coincide con el codificado de la base de datos
			if($this->bcrypt->check_password($password, $hash))
			{
				return $result->row();
			}else{
				$this->session->set_flashdata('usuario_incorrecto','Los datos introducidos son incorrectos');
				redirect(base_url().'login','refresh');
			}
		 }
	}	

}
