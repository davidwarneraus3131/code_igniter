<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tamil extends CI_Controller {
	public function index()
	{
		$this->load->view('Tamil_msg');
	} 


    function register_page(){

        $this->load->view('register');
    }


	
    function register_process(){

       $data['name']=$this->input->POST('name');
       $data['email']=$this->input->POST('email');
       $data['phone_no']=$this->input->POST('phone');
       $data['password']=$this->input->POST('password');
       $data['confirm_password']=$this->input->POST('confirm');
       

$this->load->model('Tamil_model');



 $status=$this->Tamil_model->insert($data);

 if($status==true){

echo"record created successfully";

 }

 else{
	echo"failed to register";
 }


    }
}

?>