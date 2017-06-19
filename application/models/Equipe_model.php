    <?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    class Equipe_model extends CI_Model{
    	public function __construct() {
    		parent::__construct();
    		$this->load->database();
    	}
      
    	public function create_team($dataE){
    		return	$this->db->insert('Equipe', $dataE);	
    	}
      public function create_member($data){
        return $this->db->insert('Membre', $data);
      }
    }
