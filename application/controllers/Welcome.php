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
        
        $info=$data['info'];
		
			if($info!=''){
				
					$newdata = array(
						'username'  => $data[0]->username,
						'id'  => $data[0]->id,
						'role'     =>  $data[0]->role,
						'fname'     =>  $data[0]->fname,
						'lname'     =>  $data[0]->lname,
						'logged_in' => TRUE
								);			
                $this->session->set_userdata($newdata);  				
 			}  	
			
		echo json_encode($data);
	}
	
	public function dashboard()
	{
		$data['title']='VEHICLE LEASE MANAGEMENT SYSTEM';
		$this->load->view('dashboard',$data);
		
	}
	
	
	public function logout()
	{
		
		$this->session->sess_destroy();
		$data['info']='Logout Successfully!';
		$data['title']='VEHICLE LEASE MANAGEMENT SYSTEM';
		$this->load->view('logout',$data);
		
	}
	

	
	
}
