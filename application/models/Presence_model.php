<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    class Presence_model extends CI_Model{
    	public function __construct() {
    		parent::__construct();
    		$this->load->database();
    	}
      
      public function verif_user($data,$bool){
        $conn=mysqli_connect("dwarves.iut-fbleau.fr","mouhamad","mouhamad","mouhamad");
        $mdpi=mysqli_query($conn,"SELECT loginU, pswdU FROM Utilisateur");
        
        foreach($mdpi as $is){
   if($data['loginU']==$is['loginU'] AND $data['pswdU']==$is['pswdU']){
    $bool=true;
      }
  }
return $bool;
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
      
      public function create_presence($datal){
        return $this->db->insert('Presence', $datal);
      }
    }
