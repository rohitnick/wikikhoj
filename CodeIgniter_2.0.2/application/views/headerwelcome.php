<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>

<meta name="description" content="
	<b>Tired of Searching and clicking Irrelevant Links ??
    1. You ask us a question.<br />
    2. We do the searching for you.<br />
    3. You get great answers.<br/>
    Save time by getting answers in an entirely organised way without the need of even searching for yourself." />
<meta name="keywords" content="online, shopping, wikikhoj, search, products, help, online payment, features, cost, best product, cheapest, best site" />
<link href="/static/css/header.css" type="text/css" rel="stylesheet" />
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
.menuheader{ 
	font-size:18px; width:950px;
}

#login_btn
{
	border:thin solid #000;	padding:1px 15px;
	position:absolute;	right:0px;
}
#header_pop_back1
{
	width:100%;	height:100%;	position:fixed;
	display:none; z-index:3;
}
#header_login_box
{
	font-size:16px;	background-color:#fff;	color:#222;
	border:1px solid #222;	border-radius:0px 0px 10px 10px; position:absolute;
	padding:10px;	display:none; right:0px; top:40px; 
}
#header_login_box .input_text:focus
{
	border:1px solid #888;	
	box-shadow:0px 0px 3px rgba(60,90,110,0.5);
}


</style>

</head>
<body>

<div id="header">
<center>
	<div id="header1" align="left">
		<div class="menuheader">
        			<a href="/"><img style="position:absolute;" src="/static/images/hlogo.png" alt="WikiKhoj"/></a>
                    <a id="howItWorks" style="margin-left:120px;">How It Works</a>
                    <a onclick="loginShow()" id="login_btn">Login</a>



                      
         </div>        
         <div id="header_login_box">
         	<center><span class="info" id="loginErrorInfo" style="color:#900;display:none;">Invalid Email Address</span></center>
        			<table ><tr>
                            <td colspan="2">
                            <input class="input_text" type="text" id="loginEmail" name="loginEmail"/><label class="input_label" >Email Id</label>
                            </td>
                        </tr>
                        <tr>
			                <td colspan="2">
                            <input class="input_text" type="password" id="loginPassword" name="loginPassword"/><label class="input_label" >Password</label>
                            </td>
			            </tr>
			            <tr><td></td>
			                <td  align="left">
                            	<input type="checkbox" id="loginRemember"  name="loginRemember"/>
                            	<label for="loginRemember" style="font-size: 12px">Remember Me </label>                               
                            </td>
			                </tr>
			                <tr><td></td>
			                <td>
			                <button onclick="login()" class="button_me" style="float:right;margin-top:-20px;">Login</button>
			                <a href="/auth/forgotPassword" style="float:left;font-size: 12px">Forgot Password?</a>
			         		<div style="clear: both"></div>
			                </td>
			         		
			         		</tr></table>                  
       	</div>
        
     </div> 
     <div onclick="loginHide();" id="header_pop_back1"></div>  
     
</center>
</div>
<div id="fb-root"></div>
</body>

<script>


function loginShow()
{
		$('#header_login_box').animate({ height: 'toggle'  }, 400);
		$("#login_btn").css("background-color","#333");
		$("#header_pop_back1").css("display","block");
		
}

function loginHide()
{
		$("#header_login_box").slideUp(400);
		$("#login_btn").css("background","none");	
		$("#header_pop_back1").css("display","none");
}

var footer_var=0;
var first_time=0;

function displayHow()
{
	if(footer_var==0)
	{
		footer_var=1;
		$("#howBox").css("display","block");
		$("#footer_heading1,#footer_heading2").css("box-shadow","0px 2px 8px #000").animate({ width: "950px"},600,function(){ });
		$("#footer_cont").delay(600).slideDown(800);
		if(first_time==0)
			first_time = 1;
		else 
			$("html, body").animate({scrollTop:"360px"},1500);
	}
	else
	{
		$("#footer_cont").slideUp(600);
		$("#footer_heading1,#footer_heading2").delay(600).css("box-shadow","0px 0px 2px #000").animate({ width: "0px"},600,function(){	$("#howBox").css("display","none"); });
		footer_var=0;
		
	}
}

function login()
{
	var email=$("#loginEmail").attr('value');
	var password=$("#loginPassword").attr('value');
	var remember=$("#loginRemember").attr('checked');
	var reg = new RegExp(/^\s*[\w\-\+_]+(\.[\w\-\+_]+)*\@[\w\-\+_]+\.[\w\-\+_]+(\.[\w\-\+_]+)*\s*$/);
	if(!reg.test(email)){
		showInfoMsg("#loginErrorInfo","Invalid Email Address");
	}else{
			 $("#loginErrorInfo").hide();
			 $.post('/welcome/login',{'logEmail':email,'logPassword':password,'logRemember':remember},function(response){	
				if(response=="error")
				{
					showInfoMsg("#loginErrorInfo","Email and Password do not match");	
				}					
				else 
					window.location=response;
			});
	}
}


window.fbAsyncInit = function() {
	   FB.init({
	      appId      : '379761485371074', // App ID
	      //channelUrl : '/facebook/fbchannel.php', // Channel File
	      status     : true, // check login status
	      cookie     : true, // enable cookies to allow the server to access the session
	      xfbml      : true,  // parse XFBML
		  oauth		 : true
	    });	    
		  
	};
	(function(d){
	     var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
	     js = d.createElement('script'); js.id = id; js.async = true;
	     js.src = "https://connect.facebook.net/en_US/all.js";
	     d.getElementsByTagName('head')[0].appendChild(js);
	   }(document));

	function onloginFB() {
		FB.getLoginStatus(function(response) {
			var uid="";
			var accessToken ="";
			
			if (response.status === 'connected') {
				uid = response.authResponse.userID;
				accessToken = response.authResponse.accessToken;
				console.log('user ' + uid + ' is logged in already');
				console.log('acessToken ' + accessToken);
				FB.api('/me', function(myDetails) {
					var	name=myDetails.name;
					var email=myDetails.email;
					var id=myDetails.id;
					var usrQuestion=$("#question").attr('value');
						$.post('/auth/dofblogin',{'name':name,'email':email,'id':id,'searchQuery':usrQuestion},function(loginStatus){
							if(loginStatus === "success"){
								window.location = "../home";						
							}else{
							 	window.location='../auth/register/'+name+'/'+encodeURIComponent(email)+'/'+id+'/'+ encodeURIComponent(usrQuestion);
							 };							 
						});
				});
			}else if (response.status === 'not_authorized') {
				console.log('User Not Authorized With WikiKhoj');
				}else {
				console.log('User isnt logged in fb');			
				}							
			});	
		}
		// I have made changes to file so pls commit it 
</script>
</html>