<?php


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


    function login_page(){

        $this->load->view('login');
    }

function login_process(){

    

 $data['email']=$this->input->POST('email');
 $data['password']=$this->input->POST('password');

 $this->load->model('Tamil_model');
 $status=$this->Tamil_model->login_data($data);
 
 if($status==true){
 
 echo"login success";
 
 }
 else{
 
     echo"login failed";
 }

}





}











?>