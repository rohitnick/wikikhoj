<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="/static/js/jquery.js" type="text/javascript"></script>
<style type="text/css">

#header { width:100%; color:#f2f2f7; 
background: -webkit-gradient(linear,left top,left bottom,from(#333),to(#111));
background: -moz-linear-gradient(top,#333,#111);
background: transparent	9;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#333333',endColorstr='#111111');
height:40px;
}
#search-query {
    background: none repeat scroll 0 0 #666666;
    border: 1px solid black;
    border-radius: 4px;;
    box-shadow: 0 1px 0 #444444;
    color: #CCCCCC;
    font: 13px Arial,sans-serif;
    padding: 6px 25px 4px 6px;
    width: 150px;
}
#search-query:focus,#search-query.focused {
    background: none repeat scroll 0 0 #EEEEEE;
    border: 1px solid #EEEEEE;
    box-shadow: 0 0 3px #000000;
    color: #333333;
    outline: medium none;
    text-shadow: 0 1px 0 #FFFFFF;
}
#header1 {
	width:950px; padding: 05px;
}
#i1{ opacity:0.8}
#i1:hover{ opacity: 1}
.menuheader { position:absolute;  font-size:17px; width:350px; color:#CCCCCC; cursor:pointer; line-height:30px; }
.menuheader td:hover { color:#FFFFFF; }
</style>

</head>
<body>
<div id="header">
<center>
	<div id="header1" align="right"  >
			<table class="menuheader">
			<tr><td><a href="/"><img id="i1"src="/static/images/btn.png"/></a></td><td>Contribute </td> <td> How it works </td> </tr>
			</table>
		   	<input value="" placeholder="Search" name="q" id="search-query" type="text" />
		</center>	
  		
	</div>
</div>
</body>
</html>

