<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trips extends CI_Controller {

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
        $this->load->model('Trips_model');
        // Your own constructor code
        //$this->output->enable_profiler(true);
    }

	public function index()
	{
		
		
		$data['result'] = $this->Trips_model->getTripsList();
		$data['title']='Trips Management';
		$this->load->view('Trips/Trips',$data);
		
	}
	
	public function add()
	{
		$data['title']='Trips Management';
		$this->load->view('Trips/add_trips',$data);
		
	}

    public function saveTrips()
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
        $this->Trips_model->saveTripstData($data);
        $data['message'] = 'Data Inserted Successfully';
        $data['title']='Trips Management';
        $data['result'] = $this->Trips_model->getTripsList();
		$this->load->view('Trips/Trips', $data);

    }

	public function listTripsbyID() 
	{
	
		$cid=$this->input->get('cid');
		$data['result'] = $this->Trips_model->getTripsList($cid);
        $data['title']='Trips Management';
		$this->load->view('Trips/Trips', $data);

	
	}
	
}
