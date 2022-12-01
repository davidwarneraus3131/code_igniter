<?php



class Tamil_model extends CI_Model{


    function insert($data){

$this->db->insert("tamil_users",$data);
return true;

    }


function login_data($data){

    $result=$this->db->select('*')->where('email',$data['email'])->where('password',$data['password'])->get('tamil_users')->row(); 

    


    if(!empty($result)){

        return true;
    }

    else{

        return false;
    }

}



}


?>