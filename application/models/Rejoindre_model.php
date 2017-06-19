    <?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    class Rejoindre_model extends CI_Model{
    	public function __construct() {
    		parent::__construct();
    		$this->load->database();
        
    	}
      
    	public function verif($connexion,$bool,$boolc){
        $conn=mysqli_connect("dwarves.iut-fbleau.fr","mouhamad","mouhamad","mouhamad");
$res=mysqli_query($conn,"SELECT loginU, pswdU FROM Utilisateur");
$equipe=mysqli_query($conn,"SELECT nomE, pswdE FROM Equipe");
foreach($res as $value){
  
  if($connexion['loginU']==$value['loginU'] AND $connexion['pswdU']==$value['pswdU']){
    $boolc=true;
  //echo "<p>reussi</p>";
  
  foreach($equipe as $valuE){
    if($connexion['nomE']==$valuE['nomE'] AND $connexion['pswdE']==$valuE['pswdE']){
      $bool=true; 
    }
    
  }
}
      }
        return $bool;
    }
     public function verif1($connexion,$bool,$boolc){
        $conn=mysqli_connect("dwarves.iut-fbleau.fr","mouhamad","mouhamad","mouhamad");
$res=mysqli_query($conn,"SELECT loginU, pswdU FROM Utilisateur");
$equipe=mysqli_query($conn,"SELECT nomE, pswdE FROM Equipe");
foreach($res as $value){
  
  if($connexion['loginU']==$value['loginU'] AND $connexion['pswdU']==$value['pswdU']){
    $boolc=true;
  //echo "<p>reussi</p>";
  
  foreach($equipe as $valuE){
    if($connexion['nomE']==$valuE['nomE'] AND $connexion['pswdE']==$valuE['pswdE']){
      $bool=true;
      
    }
    
  }
}
      }
        return $boolc;
    }
      public function join_team($data){
          $conn=mysqli_connect("dwarves.iut-fbleau.fr","mouhamad","mouhamad","mouhamad");
  $res=mysqli_query($conn,"SELECT loginM, nomE FROM Membre");
  $ba = true;
        foreach($res as $value){
          if($data['loginM']==$value['loginM'] AND $data['nomE']==$value['nomE']){
            $ba = false;
          }
        }
        if($ba==true){
	return	$this->db->insert('Membre', $data);	
        }
        else{
          return;
        }
      }
    }
?>