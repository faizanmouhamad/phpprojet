
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Identification extends CI_Controller {

// 	public function __construct() {
// 		parent::__construct();
// 		$this->load->library('session');
// 	}
	public function index(){

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Connexion_model');
		
		
			$logina = $this->input->post('logina');
			$mdpa = $this->input->post('mdpa');
			$connexion=array(
				'loginU'=>$logina,
				'pswdU'=>$mdpa,
				);

			if	($this->Connexion_model->authentification($connexion)){
// 				$data = $connexion['loginU'];
// 				$this->session->set_userdata($data);
				$this->load->view('bienvenue');

			}
		else {
			$message='Votre authentification est un échec ! Veuillez vérifier les données saisis';
 
	echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
			$this->load->view('connexion');
		}
		}
	}
	

?>