<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="/static/css/header.css" type="text/css" rel="stylesheet">
<script src="/static/js/jquery.js" type="text/javascript"></script>
<style type="text/css">

#header { width:100%; color:#f2f2f7; 
background: -webkit-gradient(linear,left top,left bottom,from(#333),to(#111));
background: -moz-linear-gradient(top,#333,#111);
background: transparent	9;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#333333',endColorstr='#111111');
height:40px;
z-index:2;
margin-bottom:30px;
}
#header1 {
	width:950px; padding-top:5px; position:relative; z-index:4;
}
.menuheader a{ 
	font-size:18px;color:#f2f2f7;
}

#logout_btn
{
	border:thin solid #000;	padding:1px 15px;
	position:absolute;
}

</style>

</head>
<body>

<div id="header">
<center>
	<div id="header1" align="left">
		<div class="menuheader">
        			<a href="/"><img style="position:absolute;" src="/static/images/hlogo.png" alt="WikiKhoj"/></a>
        			 <a href="/" style="right:100px; position:absolute;">Home</a>  
                    <a href="/welcome/logout" style="right:0px;" id="logout_btn">Log out</a>  
         </div>        
        
     </div> 
</center>
</div>

</body>
</html>