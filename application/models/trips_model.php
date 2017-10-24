<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trips_model extends CI_Model {

		public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
		
		public function getTripsList(){
			
		
			$this->db->select("*");
			$this->db->from('trips');
			$query = $this->db->get();
			return $query->result();
			
		}
		
		
         
		public function saveDrivertData($data){
			
			$this->db->insert('Trips',$data);
			
		} 
    

}