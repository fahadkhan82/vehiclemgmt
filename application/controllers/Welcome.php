<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$data['title']='VEHICLE LEASE MANAGEMENT SYSTEM';
		$this->load->view('welcome_message',$data);
		
	}
	
	public function verify()
	{
		
		
		$username = $this->input->post('email');
		$pwd      = $this->input->post('password');
		
        $data=verify_password_hash($username,$pwd);    
		echo json_encode($data);
	}
	
	public function dashboard()
	{
		$data['title']='VEHICLE LEASE MANAGEMENT SYSTEM';
		$this->load->view('dashboard',$data);
		
	}
	
	
}
