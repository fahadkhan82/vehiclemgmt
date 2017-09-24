<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vehicle_model extends CI_Model {

		public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
		
		public function getVehicleList($cid){
			
		
			$vehdetails = $this->db->query("SELECT * FROM vehicle WHERE cid = '$cid'");
			
			return $vehdetails->result();

		}

    

}