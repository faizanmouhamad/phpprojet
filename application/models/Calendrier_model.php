<html>
  <head>
    
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise.min.css">
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise-utils/concise-utils.min.css">
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise-ui/concise-ui.min.css">
  </head>
</html>
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    class Calendrier_model extends CI_Model{
    	public function __construct() {
    		parent::__construct();
    		$this->load->database();
    	}
      public function verif_member($data,$bool){
        $conn=mysqli_connect("dwarves.iut-fbleau.fr","mouhamad","mouhamad","mouhamad");
$faiz=mysqli_query($conn,"SELECT loginM,nomE FROM Membre");
        foreach($faiz as $is){
   if($data['nomE']==$is['nomE'] AND $data['loginM']==$is['loginM']){
  $bool=true;
      }
  }
        return $bool;
      }
      public function verif_pswd($datar,$boolA){
           $conn=mysqli_connect("dwarves.iut-fbleau.fr","mouhamad","mouhamad","mouhamad");        
$mdpi=mysqli_query($conn,"SELECT loginU, pswdU FROM Utilisateur");
        
        foreach($mdpi as $value){
    if($datar['loginU']==$value['loginU'] AND $datar['pswdU']==$value['pswdU']){
      $boolA=true;
    }
  }
        return $boolA;
      }
      
      public function draw_calendrier($zer){
                   $conn=mysqli_connect("dwarves.iut-fbleau.fr","mouhamad","mouhamad","mouhamad");        
    
        $eventi=mysqli_query($conn,"SELECT nomE,lieux,dateE,hdebut,hfin,typeE,descriptionE FROM Evenement where  nomE in ('$zer')");
echo "<table style='border: 1px solid #ddd;
    text-align: center;border-collapse: collapse;
    width: 90%;margin:auto'>
  <tr style='background-color: #20B2AA;
    color: white;border: 1px solid #ddd;
    text-align: center;height:45px'>
  <th>Nom de l'equipe</th>
  <th>Lieu</th>
  <th>Date</th>
  <th>Heure de Debut</th>
  <th>Heure de Fin</th>
  <th>Type</th>
  <th>Description</th>
  </tr>";
     
  foreach($eventi as $e){
 
      echo "<tr style='border: 1px solid #ddd;
    text-align: center;height:45px'>";
  echo "<td style='border: 1px solid #ddd;'>".$e['nomE']."</td>";
    echo "<td style='border: 1px solid #ddd;'>".$e['lieux']."</td>";
    echo "<td style='border: 1px solid #ddd;'>".$e['dateE']."</td>";
    echo "<td style='border: 1px solid #ddd;'>".$e['hdebut']."</td>";
    echo "<td style='border: 1px solid #ddd;'>".$e['hfin']."</td>";
    echo "<td style='border: 1px solid #ddd;'>".$e['typeE']."</td>";
    echo "<td style='border: 1px solid #ddd;'>".$e['descriptionE']."</td>";
    echo "</tr>";
  }
      }
    }