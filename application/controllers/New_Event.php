<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class New_Event extends CI_Controller {

	
	public function index(){

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('New_Event_model');
    //$login=$_POST['login'];
//$mdp=$_POST['mdp'];
		$login=$_SESSION['logina'];
$nomE=$_POST['nomE'];
$lieux=$_POST['lieux'];
$date=$_POST['date'];
$debut=$_POST['debut'];
$fin=$_POST['fin'];
$type=$_POST['type'];
$description=$_POST['description'];
$bool=false;
    
    $data=array(
    'nomE'=>$nomE,
      //'pswdU'=>$mdp,
      'loginU'=>$login,
    );
    
    if($this->New_Event_model->verif_coach($data,$bool)){
      $datar=array(
      'nomE'=>$nomE,
        'lieux'=>$lieux,
        'dateE'=>$date,
        'hdebut'=>$debut,
        'hfin'=>$fin,
        'typeE'=>$type,
        'descriptionE'=>$description,
      );
      if($this->New_Event_model->create_event($datar)){
$message='L\'évènement a été crée avec succès !  ';
 
	echo '<script type="text/javascript">window.alert("'.$message.'");</script>'; 
							$this->load->view('home');
}
      else{
$message='L\'évènement existe déjà !';
 
	echo '<script type="text/javascript">window.alert("'.$message.'");</script>';     
							$this->load->view('CreerEvent');
}
    }
    else{
$message='Une erreur est survenue ! Veuillez vérifier que vous êtes bien entraîneur de cette équipe ou bien que cette dernière éxiste vraiment !';
 
	echo '<script type="text/javascript">window.alert("'.$message.'");</script>';    
						$this->load->view('CreerEvent');

		}
  }
}
