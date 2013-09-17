<?php
class authModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    public function changePassword($email,$pswd){
    	$query="update login set password ='".$pswd. "' where email= '".$email."'";
    	$this->db->query($query);
    }
    
    public function checkEmailforLogin($email){
    	$query="Select * from user where email='".$email."'";
    	$result=$this->db->query($query)->result_array();
    	return $result;
    }
    
    public function userRegistration($name,$img,$email,$id){
		$query="Insert Into user values(NULL,'$email','$id','$name','$img',1)";
		$this->db->query($query);
		    	
    }
   
	
}