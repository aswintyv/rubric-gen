<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class rubric extends CI_Controller {


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
		$this->load->view_with_template('welcome_message');
		$this->load->model('Adjectives');
//		$this->Adjectives->insert(array('value'=> 'hello'));
	}
	
	public function add(){
		$this->load->view_with_template('add');
	}

	public function add_process(){
		if($_POST['what'] == 'adj'){
		$this->load->model('Adjectives');
			$vals = explode("\n", $_POST['value']);
			foreach($vals as $val){
				$val = strtolower($val);
				if(!$this->Adjectives->count(array('value'=>$val)))
					$this->Adjectives->insert(array('value'=> mysql_real_escape_string($val)));
			}
		}

		if($_POST['what'] == 'noun'){
			$this->load->model('Nouns');
			$vals = explode("\n", $_POST['value']);
			foreach($vals as $val){
				$val = strtolower($val);
				$inp = array('value'=> mysql_real_escape_string($val));
				if(!$this->Nouns->count(array('value'=>$val)))
					$this->Nouns->insert($inp);					
			}
		}
		redirect('/rubric/add/1', 'location');	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */