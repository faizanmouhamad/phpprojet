<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PresenceList extends CI_Controller {

	
	public function index(){
    $this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('PresenceList_model');
    $login=$_POST['login'];
$mdp=$_POST['mdp'];
$e=$_POST['eve'];
$bool=false;
$boolA=false;
       $datar=array(
    'loginU'=>$login,
      'pswdU'=>$mdp,
    );
      if($this->PresenceList_model->verif_pswd($datar,$boolA)){
        if($this->PresenceList_model->draw_list($e));
      }
      else{
             $message='Une erreur a été détecté au niveau du mot de passe. Veuillez vérifier les données saisis !';
 
	echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
								$this->load->view('AfficherPresence');

      }
    
    
  }
}