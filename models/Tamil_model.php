<?php



class Tamil_model extends CI_Model{


    function insert($data){

$this->db->insert("tamil_users",$data);
return true;

    }
}







?>