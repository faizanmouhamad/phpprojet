<?php
session_start();

defined('BASEPATH') OR exit('No direct script access allowed');

class Designer extends CI_Controller {

	
	public function index(){

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Designer_model');
    
//    $login=$_POST['login'];
		$login=$_SESSION['logina'];
//$mdp=$_POST['mdp'];
$nomE=$_POST['nomE'];
$logim=$_POST['logim'];
$bool=false;
$boolA=false;
$boolN=false;
		
		
		$data=array(
			'loginU'=>$login,
			//'pswdU'=>$mdp,
      'nomE'=>$nomE,
      'loginM'=>$logim,
		);
    
    if($this->Designer_model->verif_admin($data,$boolA)){
    //  if($this->Designer_model->verif_mdp($data,$bool)){
        if($this->Designer_model->verif_member($data,$boolN)){
          $datar=array(
          'loginEn'=>$logim,
            'nomE'=>$nomE,
          );
            if($this->Designer_model->join_coach($datar)){
                $message='Vous êtes désormais le nouvel entraîneur de cette équipe !';
 
	echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
											$this->load->view('home');

        }
      else{
$message='Vous êtes actuellement entraîneur de cette équipe !';
 
	echo '<script type="text/javascript">window.alert("'.$message.'");</script>';   
							$this->load->view('home');

			}
        }
        else{
              $message='Vous ne faites pas partis de cette équipe !';
 
	echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
									$this->load->view('DesignerCoach');
        }
     // }
     /* else {
$message='Veuillez vérifier les données saisis !';
 
	echo '<script type="text/javascript">window.alert("'.$message.'");</script>'; 
							$this->load->view('DesignerCoach');
			}*/
      
    }
    else {
$message='Vous n\'êtes pas administrateur de cette équipe ou cette dernière n\'éxiste pas ! ';
 
	echo '<script type="text/javascript">window.alert("'.$message.'");</script>';  
						$this->load->view('DesignerCoach');
}
  }
}