<?php

class apanelmodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
	
	function getQuestionsData($table,$limit)
	{
		$query= "select * from ".$table." order by qid limit ".$limit.",5";
		$result=$this->db->query($query)->result_array();
		return $result;
	}
	
	function putspam($qid) 
	{
		$query = "insert into spamt (qid,ques,eid,time) select qid,ques,eid,time from rawt where qid='".$qid."'";
		$query1	= "delete from rawt where qid='".$qid."'";
		$this->db->query($query);
		$this->db->query($query1);
		//Awesome, if it works
	}
	
	function markAsGood($qid) 
	{
		$query = "insert into rawt (qid,ques,eid,time) select qid,ques,eid,time from spamt where qid='".$qid."'";
		$query1	= "delete from spamt where qid='".$qid."'";
		$this->db->query($query);
		$this->db->query($query1);
		//Awesome, if it works
	}
	
	function putfilter($qid, $tag1, $tag2, $tag3)
	{
		$query ="insert into filteredt (qid,ques,eid,checki,time) select qid,ques,eid,checki,time from rawt where qid='".$qid."'";
		$query2 = "update filteredt set tag1='".$tag1."' , tag2='".$tag2."' , tag3='".$tag3."' where qid='".$qid."'";
		$query1	= "delete from rawt where qid='".$qid."'";
		$this->db->query($query);
		$this->db->query($query1);
		$this->db->query($query2);
				//Kuch Bhi kar diya h rohit ne
	}
	
	function getCategoryData($cat,$status)
	{
		$query="SELECT * FROM filteredt WHERE astatus='".$status."' AND (tag1='".$cat."' OR tag2='".$cat."' OR tag3='".$cat."')";
		$res=$this->db->query($query)->result_array();
		return $res;	
	}
	
	
}