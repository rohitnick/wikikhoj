<?php

class welcomemodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

	
	function putq($ques, $eid, $check)
	{
		$sql1 ="SELECT * FROM spamt where ques='".$ques."'";
		$result = mysql_query($sql1);
		if(mysql_num_rows($result)>0)
		{
			$sq2="update spamt set scount=scount+1 where ques='".$ques."'";
			mysql_query($sq2) or die ("wrong");
		}
		else
		{
			$sql="insert into rawt values(NULL,'$ques','$eid','$check',CURRENT_TIMESTAMP)";
			mysql_query($sql) or die("wrong"); 
		}
	}
	
}