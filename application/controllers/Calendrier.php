<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendrier extends CI_Controller {

	
	public function index(){
    $this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Calendrier_model');
 //   $login=$_POST['login'];
//$mdp=$_POST['mdp'];
		$login=$_SESSION['logina'];
$nomE=$_POST['nomE'];
$bool=false;
$boolA=false;
    $data=array(
    'loginM'=>$login,
      'nomE'=>$nomE,
    );
    
    if($this->Calendrier_model->verif_member($data,$bool)){
//        $datar=array(
//     'loginU'=>$login,
//       'pswdU'=>$mdp,
//     );
      //if($this->Calendrier_model->verif_pswd($datar,$boolA)){
        if($this->Calendrier_model->draw_calendrier($nomE));
      //}
//       else{
//              $message='Une erreur a été détecté au niveau du mot de passe. Veuillez vérifier les données saisis !';
 
// 	echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
// 								$this->load->view('AfficherEvent');

//       }
    }
    else{
			$message='Vous ne pouvez pas à accéder au calendrier de cette équipe';
 
	echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
							$this->load->view('home');

    }
  }
}