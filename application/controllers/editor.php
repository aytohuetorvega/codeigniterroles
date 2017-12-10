<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Editor extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('cars_model');
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->database('default');
	}
	
	public function index()
	{
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') == 'suscriptor')
		{
			redirect(base_url().'login');
		}
		$data['cars'] = $this->cars_model->get_cars($this->session->userdata('id_usuario'));
		$this->load->view('editor_view',$data);
	}
}
