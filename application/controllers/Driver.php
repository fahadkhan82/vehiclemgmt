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
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'city' => $this->input->post('city'),
            'cnic' => $this->input->post('cnic'),
            'age' => $this->input->post('age'),
			'perma_address' => $this->input->post('perma_address'),
			'join_date' => $this->input->post('join_date'),
			'salary' => $this->input->post('salary'),
			'mobile_no' => $this->input->post('mobile_no'),
			'alternate_no' => $this->input->post('alternate_no'),
			'emergency_no' => $this->input->post('emergency_no'),
			'alternate_no' => $this->input->post('alternate_no'),
        );

        //Transfering data to Model
        $this->Driver_model->saveDrivertData($data);
        $data['message'] = 'Data Inserted Successfully';
        $data['title']='Driver Management';
        $data['result'] = $this->Driver_model->getDriverList();
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
