<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    class New_Event_model extends CI_Model{
    	public function __construct() {
    		parent::__construct();
    		$this->load->database();
    	}
      public function verif_coach($data,$bool){
        $conn=mysqli_connect("dwarves.iut-fbleau.fr","mouhamad","mouhamad","mouhamad");
$ne=mysqli_query($conn,"SELECT loginEn,nomE FROM Entraineur, Utilisateur");
foreach($ne as $is){
  if($data['nomE']==$is['nomE'] AND $data['loginU']==$is['loginEn']){
    $bool=true;
  }
} 
          return $bool;
      }
      public function create_event($datar){
          $conn=mysqli_connect("dwarves.iut-fbleau.fr","mouhamad","mouhamad","mouhamad");
  $res=mysqli_query($conn,"SELECT nomE,lieux,dateE,hdebut,hfin,typeE FROM Evenement");
        $nomE=$datar['nomE'];
$lieux=$datar['lieux'];
$date=$datar['dateE'];
$debut=$datar['hdebut'];
$fin=$datar['hfin'];
$type=$datar['typeE'];
$description=$datar['descriptionE'];
        $ba=true;
        foreach($res as $r){
          if($nomE==$r['nomE'] AND $lieux==$r['lieux'] AND $date=$r['dateE'] AND $debut==$r['hdebut'] AND $fin==$r['hfin'] AND $type==$r['typeE']){
            $ba=false;
          }
        }
        $insert="Insert into Evenement (nomE,lieux,dateE,hdebut,hfin,typeE,descriptionE) VALUES ('$nomE','$lieux','$date','$debut','$fin','$type','$description')";

        if($ba == true){
          if(mysqli_query($conn,$insert)){
return true;
          }else{
return false;
          }
        }
        else{
          return false;
        }
        
//   $ba = true;
//         foreach($res as $value){
//           if($datar['nomE']==$value['nomE'] AND $datar['lieux']==$value['lieux'] AND $datar['dateE']==$value['dateE'] AND $datar['hdebut']==$value['hdebut'] AND $datar['hfin']==$value['hfin'] AND $datar['typeE']==$value['typeE'] AND $datar['descrptionE']==$value['descriptionE']){     
//           $ba = false;
//           }
//         }
//         if($ba==true){
// 	return	$this->db->insert('Evenement', $datar);	
//         }
//         else{
//           return;
//         }
      }
    }
