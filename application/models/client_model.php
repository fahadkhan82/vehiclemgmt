<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client_model extends CI_Model {

		public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
		
		public function getClientsData(){
			
		
			$userdetails = $this->db->query("SELECT * FROM cmsusers WHERE role != 1 ");
			
			return $userdetails->result();

		}
		
		public function saveClientData($data){
			
			$this->db->insert('cmsusers',$data);
			
		}

   

}