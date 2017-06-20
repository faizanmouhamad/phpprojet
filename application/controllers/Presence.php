<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Presence extends CI_Controller {

	
	public function index(){

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Presence_model');
    
//$login=$_POST['login'];
//$mdp=$_POST['mdp'];
		$login=$_SESSION['logina'];
$e=$_POST['eve'];
$here=$_POST['presence'];
$bool=false;
$boolA=false;
    
    
       // if($this->Presence_model->verif_user($data,$bool)){
          if($this->Presence_model->verif_team($login,$boolA,$e)){
            $datal=array(
            'dateEF'=>$e,
              'loginM'=>$login,
              'presence'=>$here,
            );
            if($this->Presence_model->create_presence($datal)){
							 $message='Votre décision a été validée';
 
	echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
								$this->load->view('home');
						}
          }
          else{
                    $message='Tu ne fais pas partis de l\'équipe !';
 
	echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
								$this->load->view('view_presence');
          }
          
          
      //  }
//     else{
// $message='Vous n\'êtes pas un utilisateur !';
 
// 	echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
// 								$this->load->view('view_presence');    }
//   }
}
