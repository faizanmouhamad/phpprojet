
<?php

class Equipe extends CI_Controller {

	public function index(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Equipe_model');
		
		
//  		$this->form_validation->set_rules('login', 'login', 'is_unique[Utilisateur.loginU]');
// 		$this->form_validation->set_rules('logina', 'Login', 'is_unique[Utilisateur.loginU]');
//  		$this->form_validation->set_rules('mdpa', 'Mdp', 'is_unique[Utilisateur.pswdU]');
 		$this->form_validation->set_rules('nomE', 'Nom', 'is_unique[Equipe.nomE]');
 		$this->form_validation->set_rules('mdpE', 'MdpE', 'is_unique[Equipe.pswdE]');
//  		$this->form_validation->set_rules('mdp', 'Mdp', 'is_unique[Utilisateur.pswdU]');
		
		
 		if ($this->form_validation->run() === FALSE){
 			$message='La création a échouée ! Veuillez vérifier les données saisis.';
 
	echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
			$this->load->view('CreerEquipe');
		}
		else{
			$sport = $this->input->post('sports');
			$nom = $this->input->post('nomE');
			$ville = $this->input->post('ville');
			$comment = $this->input->post('comment');
			$mdp = $this->input->post('mdpE');
			$mixite = $this->input->post('mixite');
      $admin = $this->input->post('login');//fr avec la session

			$dataE=array(
				'nomE'=>$nom,
				'pswdE'=>$mdp,
        'sports'=>$sport,
        'ville'=>$ville,
        'description'=>$comment,
        'mixite'=>$mixite,
        'Admin'=> $admin,
				
				);
				if	($this->Equipe_model->create_team($dataE)){
					$data=array(
					'loginM'=>$admin,
					'nomE'=>$nom,
					);
					if($this->Equipe_model->create_member($data));
					$this->load->view('succes_equipe');
				}
		}
	}

}
?>