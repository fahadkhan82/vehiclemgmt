<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maintainance extends CI_Controller {

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
	
	 
	
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Maintainance_model');
        // Your own constructor code
        //$this->output->enable_profiler(true);
    }
	
	
	public function index()
	{
		
		$data['result'] = $this->Maintainance_model->getAllVehicleList();
		$data['title']='Vehicle Maintainance';
		$this->load->view('maintainance/maintainance',$data);
		
	}
	
	
	public function listVehiclebyID(){
		
		$cid=$_SESSION['id'];
		$data['result'] = $this->Maintainance_model->getVehicleList($cid);
        $data['title']='Vehicle Management';
		$this->load->view('vehicle/vehicle', $data);
	}

	public function add()
	{
		
		
		$data['title']='Vehicle Maintainance';
		$this->load->view('maintainance/add_maintainance',$data);
		
	}
	
}
