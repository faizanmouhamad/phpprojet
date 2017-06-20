
<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Rejoindre extends CI_Controller {

	
	public function index(){

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Rejoindre_model');
    
//     $login=$_POST['login'];
		$login=$_SESSION['logina'];
    //$mdp=$_POST['mdp'];
    $nomE=$_POST['nomE'];
    $pswdE=$_POST['mdpE'];
    $bool=false;
    $boolc=false;
		
		
		$connexion=array(
			'loginU'=>$login,
		//	'pswdU'=>$mdp,
      'nomE'=>$nomE,
      'pswdE'=>$pswdE,
		);
    
       // if($this->Rejoindre_model->verif1($connexion,$bool,$boolc)){
    if($this->Rejoindre_model->verif($connexion,$bool,$boolc)){
        $data=array(
        'loginM'=>$login,
          'nomE'=>$nomE,
        );
          if($this->Rejoindre_model->join_team($data)){
$message='Félicitations ! Vous venez de rejoindre cette équipe !';
 
	echo '<script type="text/javascript">window.alert("'.$message.'");</script>';   
									$this->load->view('home');
					}
      else{
$message='Oups ! Vous faîtes déjà partis de l\'équipe';
 
	echo '<script type="text/javascript">window.alert("'.$message.'");</script>'; 
							$this->load->view('home');
			}
    }
          else {
$message='Une erreur est survenue ! Veuillez vérifier les données saisis ! ';
 
	echo '<script type="text/javascript">window.alert("'.$message.'");</script>';  
									$this->load->view('JoinEquipe');
					}
              
//		}
//     else{
// $message='Une erreur est survenue ! Veuillez vérifier les données saisis ! ';
 
// 	echo '<script type="text/javascript">window.alert("'.$message.'");</script>';   
// 						$this->load->view('JoinEquipe');
// 		}
	}
}

	

?>