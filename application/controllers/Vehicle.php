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


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Vehicle_model');
        // Your own constructor code
        //$this->output->enable_profiler(true);
    }

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

    public function saveVehicle()
    {

        $data = array(
            'cid' => $this->input->post('client'),
            'model' => $this->input->post('model'),
            'make' => $this->input->post('make'),
            'year' => $this->input->post('year'),
            'type' => $this->input->post('type'),
        );

        //Transfering data to Model
        $this->Vehicle_model->saveVehicletData($data);
        $data['message'] = 'Data Inserted Successfully';
        $data['title']='Client Management';
        //$data['result'] = $this->Vehicle_model->getClientsData();
        $this->load->view('vehicle/add_vehicle',$data);

    }

	public function listVehiclebyID() 
	{
	
		$cid=$this->input->get('cid');
		$data['result'] = $this->Vehicle_model->getVehicleList($cid);
        $data['title']='Vehicle Management';
		$this->load->view('vehicle/vehicle', $data);

	
	}
	
}
