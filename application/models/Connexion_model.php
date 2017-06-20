    <?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    class Connexion_model extends CI_Model{
    	public function __construct() {
    		parent::__construct();
    		$this->load->database();
        
    	}
      

    	public function authentification($connexion){
    		$query=$this->db->select('loginU','pswdU')
    				->from('Utilisateur')
    				->where('loginU',$connexion['loginU'])
    				->where('pswdU',$connexion['pswdU'])
    				->get()
    				->row_array();
    		if(count($query) == 1){
          session_start();
          $_SESSION['logina']=$connexion['loginU'];
    			return $query;
        }
    		else
    			return false;		
    	}
      	
    }
?>