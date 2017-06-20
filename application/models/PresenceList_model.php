<html>
  <head>
    
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise.min.css">
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise-utils/concise-utils.min.css">
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise-ui/concise-ui.min.css">
  </head>
</html>
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    class PresenceList_model extends CI_Model{
    	public function __construct() {
    		parent::__construct();
    		$this->load->database();
    	}
			public function verif_team($login,$boolA,$e){
        $conn=mysqli_connect("dwarves.iut-fbleau.fr","mouhamad","mouhamad","mouhamad");
    $priere=mysqli_query($conn,"SELECT nomE FROM Evenement where idEvent in ('$e')");
        
        foreach($priere as $res){
      $pt=$res['nomE'];
      $team=mysqli_query($conn,"SELECT loginM FROM Membre where nomE in ('$pt')");
      foreach($team as $resain){
        if($login==$resain['loginM']){
          $boolA=true;
        }
      }
    }
        return $boolA;
        
      }
//       public function verif_member($data,$bool){
//         $conn=mysqli_connect("dwarves.iut-fbleau.fr","mouhamad","mouhamad","mouhamad");
// 				$e = $data['']
// $faiz=mysqli_query($conn,"SELECT loginM,nomE FROM Membre");
//         foreach($faiz as $is){
//    if($data['nomE']==$is['nomE'] AND $data['loginM']==$is['loginM']){
//   $bool=true;
//       }
//   }
//         return $bool;
//       }
//       public function verif_pswd($datar,$boolA){
//            $conn=mysqli_connect("dwarves.iut-fbleau.fr","mouhamad","mouhamad","mouhamad");        
// $mdpi=mysqli_query($conn,"SELECT loginU, pswdU FROM Utilisateur");
        
//         foreach($mdpi as $value){
//     if($datar['loginU']==$value['loginU'] AND $datar['pswdU']==$value['pswdU']){
//       $boolA=true;
//     }
//   }
//         return $boolA;
//       }
      
      public function draw_list($zer){
                   $conn=mysqli_connect("dwarves.iut-fbleau.fr","mouhamad","mouhamad","mouhamad");        
    
$aff=mysqli_query($conn,"SELECT loginM,presence FROM Presence where dateEF in ('$zer')");
        echo "<table style='border: 1px solid #ddd;
    text-align: center;border-collapse: collapse;
    width: 90%;margin:auto'>
  <tr style='background-color: #20B2AA;
    color: white;border: 1px solid #ddd;
    text-align: center;height:45px'>
  <th>Login</th>
  <th>Present</th>
  </tr>";
       foreach($aff as $is){
           echo "<tr style='border: 1px solid #ddd;
    text-align: center;height:45px'>";
  echo "<td style='border: 1px solid #ddd;'>".$is['loginM']."</td>";
    echo "<td style='border: 1px solid #ddd;'>".$is['presence']."</td>";
    
  
      
    echo "</tr>"; 
         
       }
        echo "</table>";
      }
    }
