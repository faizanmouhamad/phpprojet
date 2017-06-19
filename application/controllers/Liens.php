    <?php

    class Liens extends CI_Controller {

    	public function __construct() {
    		parent::__construct();
    	$this->load->helper('url');
    	}

    public function menu(){
    		$this->load->view('home');  
    }

    public function event(){
    $this->load->view('CreerEvent');
    }
        public function team(){
    $this->load->view('CreerEquipe');
    }
      public function join(){
        $this->load->view("JoinEquipe");
      }
      public function coach(){
        $this->load->view("DesignerCoach");
      }
      public function calendrier(){
        $this->load->view("AfficherEvent");
      }
      public function connexion(){
        $this->load->view("connexion");
      }
    	public function deconnexion(){
       $this->load->view("deconnexion");
      }
      public function rapport(){
            $this->load->view("rapport");   
      }
    	
    	public function inscription() {
    		$this->load->view('vue');
    		
    	}
    }
?>
