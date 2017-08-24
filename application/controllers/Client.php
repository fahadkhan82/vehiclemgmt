<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

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
				$this->load->model('Client_model');
                // Your own constructor code
		       // $this->output->enable_profiler(true); 		
        }
	
	public function index()
	{
	
		$data   = array();
        $data['result'] = $this->Client_model->getClientsData();
		$data['title']='Client Management';
		
		$this->load->view('client/client',$data);
		
	}
	
	public function add()
	{
		$data['title']='Client Management';
		$this->load->view('client/add_client',$data);
		
	}
	
	public function saveClient()
	{
	
	        
			$username=$this->input->post('email');
			$pwd=generateRandomString();
			
			$value=$username.'+'.$pwd;
		    $password=md5($value);
		
			$data = array(
			'fname' => $this->input->post('fname'),
			'lname' => $this->input->post('lname'),
			'address' => $this->input->post('address'),
			'username' => $this->input->post('email'),
			'password' => $password,
			'role' => 5,
			'city' => $this->input->post('city'),
			'tenure' => $this->input->post('tenure'),
			'payment' => $this->input->post('payment'),
			'account' => $this->input->post('account'),
			'occupation' => $this->input->post('occupation'),
			'cnic' => $this->input->post('cnic')
			);
			
		//Transfering data to Model
		$this->Client_model->saveClientData($data);
		$data['message'] = 'Data Inserted Successfully';
		$data['title']='Client Management';
		$data['result'] = $this->Client_model->getClientsData();
		$this->load->view('client/client',$data);
		
	}
	
	
	public function listClient() 
	{
	
		$data   = array();
        $data['result'] = $this->Client_model->getClientsData();
		
        $this->load->view('client/client', $data);

	
	}

	
	
}
