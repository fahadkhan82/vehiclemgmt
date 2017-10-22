<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Driver_model extends CI_Model {

		public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
		
		public function getDriverList(){
			
		
			$this->db->select("*");
			$this->db->from('driver');
			//$this->db->join('Driver', 'Driver.cid=cmsusers.id and Driver.cid='.$cid);
			$query = $this->db->get();
			return $query->result();
			
		}
		
		
         
		public function saveDrivertData($data){
			
			$this->db->insert('Driver',$data);
			
		} 
    

}