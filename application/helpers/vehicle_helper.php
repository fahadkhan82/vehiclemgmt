<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('calculate_password_hash'))
{
    function verify_password_hash($username,$pwd)
    {
        $data=array();
	    $CI = get_instance();
		$CI->load->model('User_model');
		$value=$username.'+'.$pwd;
		$password=md5($value);
		$data=$CI->User_model->verify_password_hash($username,$password);
		

		if(empty($data)){
			$data['error']='User not found';
		}else{
			$data['info']='You are logged in';
		}
		
		return $data;
    }   
}