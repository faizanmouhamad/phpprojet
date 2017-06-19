<?php
class Inscription extends CI_Controller {

	public function index(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Model_inscription');
		
		
 		$this->form_validation->set_rules('login', 'login', 'is_unique[Utilisateur.loginU]');
 		$this->form_validation->set_rules('nom', 'Nom', 'is_unique[Utilisateur.nomU]');
 		$this->form_validation->set_rules('prenom', 'Prenom', 'is_unique[Utilisateur.PrenomU]');
 		$this->form_validation->set_rules('mdp', 'Mdp', 'is_unique[Utilisateur.pswdU]');
		$this->form_validation->set_rules('mdp1', 'Password Confirmation', 'required|matches[mdp]');

		
 		if ($this->form_validation->run() === FALSE){
 			$this->load->view('vue');
		}
		else{
			$mail = $this->input->post('mail');
			$nom = $this->input->post('nom');
			$login = $this->input->post('login');
			$prenom = $this->input->post('prenom');
			$mdp = $this->input->post('mdp');
			$avatar = $this->input->post('photo');

			$data=array(
				'nomU'=>$nom,
				'prenomU'=>$prenom,
				'loginU'=>$login,
				'pswdU'=>$mdp,
				'emailU'=>$mail,
				'avatarU'=>$avatar,
				
				);
			if	($this->Model_inscription->create_user($data)){
				$this->load->view('succes');

			}
		}
	}

}
?>