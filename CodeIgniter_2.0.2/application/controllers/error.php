<?php
class error extends CI_Controller 
{
	public function __construct()
       {
            parent::__construct();
       }
	public function index()
	{
		echo "<center><div style='position:absolute; top:100px; font-size:30px;'>this is error page</div></center>";
	}
}