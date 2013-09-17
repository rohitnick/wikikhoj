<?php

class welcomemodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

	
	function signUp($email, $password)
	{
			$query="insert into login values(NULL,'$email','$password',0,CURRENT_TIMESTAMP)";
			$this->db->query($query);
	}
	
	function checkEmail($email)
	{
		$query = "select email from login where email= '".$email."'";
		$result=$this->db->query($query);
		return $result->num_rows();
	}
	function checkLogin($email,$password)
	{
		$query = "select designation from login where email= '".$email."' AND password='".$password."'";
		$result=$this->db->query($query)->row();
		return $result;
	}
}