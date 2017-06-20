 <?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    class Designer_model extends CI_Model{
    	public function __construct() {
    		parent::__construct();
    		$this->load->database();
    	}
      
      public function verif_admin($data, $boolA){
        $conn=mysqli_connect("dwarves.iut-fbleau.fr","mouhamad","mouhamad","mouhamad");
        $ne=mysqli_query($conn,"SELECT nomE,Admin,pswdU FROM Equipe,Utilisateur");
        foreach($ne as $is){
if($data['nomE']==$is['nomE'] AND $data['loginU']==$is['Admin']){
  $boolA=true;
}

}
        return $boolA;
      }
      
   /*   public function verif_mdp($data,$bool){
        $conn=mysqli_connect("dwarves.iut-fbleau.fr","mouhamad","mouhamad","mouhamad");
$mdpi=mysqli_query($conn,"SELECT loginU, pswdU FROM Utilisateur");
foreach($mdpi as $value){
    if($data['loginU']==$value['loginU'] AND $data['pswdU']==$value['pswdU']){
      $bool=true;
    }
  }
       return $bool; 
      }
     */ 
      public function verif_member($data,$boolN){
                $conn=mysqli_connect("dwarves.iut-fbleau.fr","mouhamad","mouhamad","mouhamad");
        $zer = $data['nomE'];
        $member=mysqli_query($conn,"SELECT loginM FROM Membre where nomE in ('$zer')");
foreach($member as $m){
  if($data['loginM']==$m['loginM']){
    $boolN=true;
//      if(mysqli_query($conn,$insert)){
//     echo "<p>he is the new coach</p>";
//     }
//     else{
//      echo "<p>he is already the coach</p>";
//     }
  }
  }
        return $boolN;
      }
    public function join_coach($datar){
          $conn=mysqli_connect("dwarves.iut-fbleau.fr","mouhamad","mouhamad","mouhamad");
  $res=mysqli_query($conn,"SELECT loginEn, nomE FROM Entraineur");
  $ba = true;
        foreach($res as $value){
          if($datar['loginEn']==$value['loginEn'] AND $datar['nomE']==$value['nomE']){
            $ba = false;
          }
        }
        if($ba==true){
	return	$this->db->insert('Entraineur', $datar);	
        }
        else{
          return;
        }
      }
    }
