<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Driver extends CI_Controller {

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
        $this->load->model('Driver_model');
        // Your own constructor code
        //$this->output->enable_profiler(true);
    }

	public function index()
	{
		
		
		$data['result'] = $this->Driver_model->getDriverList();
		$data['title']='Driver Management';
		$this->load->view('Driver/Driver',$data);
		
	}
	
	public function add()
	{
		$data['title']='Driver Management';
		$this->load->view('Driver/add_driver',$data);
		
	}

    public function saveDriver()
    {

        $data = array(
            'cid' => $this->input->post('client'),
            'model' => $this->input->post('model'),
            'make' => $this->input->post('make'),
            'year' => $this->input->post('year'),
            'type' => $this->input->post('type'),
			'engine' => $this->input->post('engine'),
			'transmission' => $this->input->post('transmission'),
			'reg_no' => $this->input->post('reg_no'),
			'chasis_no' => $this->input->post('chasis_no'),
        );

        //Transfering data to Model
        $this->Driver_model->saveDrivertData($data);
        $data['message'] = 'Data Inserted Successfully';
        $data['title']='Client Management';
        //$data['result'] = $this->Driver_model->getClientsData();
        $cid= $this->input->post('client');
		$data['result'] = $this->Driver_model->getDriverList($cid);
		$this->load->view('Driver/driver', $data);

    }

	public function listDriverbyID() 
	{
	
		$cid=$this->input->get('cid');
		$data['result'] = $this->Driver_model->getDriverList($cid);
        $data['title']='Driver Management';
		$this->load->view('Driver/driver', $data);

	
	}
	
}
