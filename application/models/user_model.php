<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

		public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
		
		public function verify_password_hash($username,$pwd){
			
		
			$userdetails = $this->db->query("SELECT * FROM cmsusers WHERE username = '$username' and password='$pwd' ");
			
			return $userdetails->result();

		}

}