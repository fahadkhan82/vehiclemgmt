<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Maintainance_model extends CI_Model {

		public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
		
		public function getVehicleList($cid){
			
		
			$this->db->select("*");
			$this->db->from('cmsusers');
			$this->db->join('vehicle', 'vehicle.cid=cmsusers.id and vehicle.cid='.$cid);
			$query = $this->db->get();
			return $query->result();
			
		}
		
		public function getAllVehicleList(){
			
		
			$this->db->select("*");
			$this->db->from('cmsusers');
			$this->db->join('vehicle', 'vehicle.cid=cmsusers.id');
			$query = $this->db->get();
			return $query->result();
			
		}
         
		public function saveMaintainenceData($data){
			
			$this->db->insert('maintainance',$data);
			
		} 
		
		public function vehicle_rec($id){
			
			$this->db->select("*");
			$this->db->from('vehicle');	
            $this->db->where('id='.$id);         			
			$query = $this->db->get();
			return $query->result();
			
		} 
    

}