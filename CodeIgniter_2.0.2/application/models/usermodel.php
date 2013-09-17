<?php

class usermodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
	
	function getQuestionsData($user,$limit)
	{
		//$query= "select * from question where email = '".$user."' order by qid desc limit ".$limitX.",".$limitY;
		$query="SELECT * ,q.time as time,q.qid as questionKaId FROM question q LEFT JOIN questiontag qt ON q.qid = qt.qid where email = '".$user."' ORDER BY q.qid DESC limit ".$limit.",10";
		$result=$this->db->query($query)->result_array();
		return $result;
	}	
	public function getUserQuestion($user,$qid)
	{
    	$query= "select * from question where qid= ".$qid." and email = '".$user."'";
		$result=$this->db->query($query)->row_array();
		return $result;
    }
     
    public function getUserAnswers($qid,$limit=0){
    	$query="Select * from answer where qid=".$qid." and rating>0 order by rating desc LIMIT ".$limit.",5";
    	$result=$this->db->query($query)->result_array();
    	return $result;
    }
 
    public function getBestAnswer($qid){
		$query="select answer,answerCount from (select count(answer) as answerCount from answer where qid=".$qid." and rating>0) t1,answer where qid=".$qid." and rating>0 order by rating desc limit 0,1";
		//$query="Select * from answer where qid=".$qid." order by Rating desc";
		$result=$this->db->query($query)->row_array();
    	return $result; 		   	
    }
    
    public function getUserDetails($email){
    	$query="select * from user where email= '".$email."'";
    	$result=$this->db->query($query)->result_array();
    	return $result;
    }
}