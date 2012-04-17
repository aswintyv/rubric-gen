<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class api_data extends CI_Controller {


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('Adjectives');
		$adjective = $this->Adjectives->get_random(array('id', 'value'));

		$this->load->model('Nouns');
		$noun = $this->Nouns->get_random(array('id', 'value'));
		
		$data = array();
		$data['value'] = $adjective[0]->value .' '.$noun[0]->value;
		$data['split_value'] = array();
		$data['split_value']['adjective'] = $adjective;
		$data['split_value']['noun'] = $noun;
		
		print_r(json_encode($data));
	}	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */