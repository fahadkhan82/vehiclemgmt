<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicle extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	 
	
	public function index()
	{
		$data['title']='Vehicle Management';
		$this->load->view('vehicle/vehicle',$data);
		
	}
	
	public function add()
	{
		$data['title']='Vehicle Management';
		$this->load->view('vehicle/add_vehicle',$data);
		
	}
	

		public function listAllVehicles() 
	{
	
		$data   = array();
        $data['result'] = $this->Client_model->getallVehicles();
        $this->load->view('client/client', $data);

	
	}
	
		public function listVehiclebyID() 
	{
	
		$data   = array();
        $data['result'] = $this->Client_model->getClientsData();
        $this->load->view('client/client', $data);

	
	}
	
}
