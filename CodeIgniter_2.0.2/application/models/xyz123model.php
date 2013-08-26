<?php

class xyz123model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

	
	function checkLogin($usr, $pwd)
	{
		$sql1 ="SELECT * FROM admint where adminuname='".$usr."' and adminpwd='".$pwd."' ";
		$result = mysql_query($sql1);
		if(mysql_num_rows($result)>0)
		{
			$sq2="update admint set lastlogin=CURRENT_TIMESTAMP where adminuname='".$usr."'";
			mysql_query($sq2) or die ("wrong");
			return true;
		}
		else
		{
			return false;
		}
	}
	
}