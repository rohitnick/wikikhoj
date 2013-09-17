<style type="text/css">
.startpage {
    min-height: 420px;
    position: relative;
	z-index:0;
}

#divcontainer {margin-top:70px; z-index:1;}

/*slider css start */
.movingBox{
	position:absolute;
	width:620px;
	display:none;
}
.movingBox table tr td { padding: 0 15px 0 15px;}

.input_wrapper input
{
    border: 1px solid #333;
	background-color:#EEF;
    border-radius: 5px;
    color: #444455;
    font-size: 20px;
    height: 35px;
    margin-top: -5px;
    padding-left: 10px;
    width: 580px;
}
.input_wrapper input:focus
{
	background-color:#FFF;	
	border-radius: 3px;
	box-shadow: 0px 0px 3px #333;
}

.input_wrapper label
{
	color: #3C5A76;
    font-size: 20px;
    font-style: normal;
    margin-left: -580px;
}
/*slider css start end */

#nonmanit_msg
{
 width:600px;
 height:40px;
 background-color:#FFF;
 color:#000;
 font-size:16px;
 margin-top:0px;
 padding:15px;
 text-align:justify;
 border:1px solid #333;
 border-radius:8px;
 display:none;
}
.info{font-size:14px;color:#700;}
</style>
<center>
<div id="startpage" class="startpage">
	<div id="divcontainer">
    	<span class="heading" style=" color:#333"> Only For MANIT Bhopal Students. </span><br /><br />
		<img src="/static/images/logo.png" alt="WikiKhoj" /><br/>
    </div>
    <div id="nonmanit_msg">
    <span>Currently this service is available for only MANIT students. Please contact us, we will notify you as soon as we start this service at your place - WikiKhoj Team
    </span>
    </div>
    
    
	<div style="position:relative; margin-top:10px;height:120px;">
    	<span class="info" id="movingBoxErrorInfo"></span>
		<div id="movingBox1" class="movingBox" style="display:block; position:relative;" >
        	<table cellspacing="10">
            <tr><td>
        		<div class="input_wrapper" >
						<input id="question" class="input_text" type="text" value=""  name="question"/><label class="input_label">Enter e-shopping query ?? Eg: Cheap and best android mobile.</label>
				</div>
                </td></tr><tr ><td align="right" >
				<div id="fb-root"></div>
                <fb:login-button style="position:absolute;left:270px;top:75px;" onlogin="onloginFB()" scope="publish_stream,read_friendlists,email" size="large" >Start Searching</fb:login-button>
                <button id="box1Button1" class="buttonNext"><span>Start Searching!</span></button>
                </td></tr></table>
        </div>
        <div id="movingBox2"  class="movingBox">
        	<table cellspacing="10">
            <tr><td colspan="3">
        		<div class="input_wrapper" >
		<input id="email" type="text" class="input_text" name="email"/><label class="input_label">Drop your e-mail id here.</label>
        		</div>
                </td></tr><tr valign="top"><td>
                <button id="box2Button1" class="buttonBack" style="width:120px; float:left;">Go Back</button>
               </td><td align="center" width="245px">
              <input type="checkbox" id="notifyMe" name="notifyMe" /><span style="color:#FFF; font-size:18px;">&nbsp; Notify answer through mail</span>
               </td><td>
               <button id="box2Button2" class="buttonNext" style="width:130px; float:right">Continue</button>
                </td></tr></table>
        </div>
         <div id="movingBox3"  class="movingBox">
        	<table cellspacing="10">
            <tr><td colspan="3">
        		<div class="input_wrapper" >
		<input id="password" class="input_text" type="password" name="password" /><label class="input_label">Enter a password</label>  
        		</div>
                </td></tr><tr valign="top"><td>
                <button id="box3Button1" class="buttonBack" style="width:120px; float:left;">Go Back</button>
               </td><td align="center" width="250px">
              <input type="checkbox" id="rememberMe" name="rememberMe" /><span style="color:#FFF; font-size:18px;">&nbsp; Remember me</span>
               </td><td>
               <button id="box3Button2" class="buttonNext" style="width:130px; float:right">Continue</button>
               <button id="box3Button3" disabled="disabled" class="buttonNext" style="width:130px; float:right; display:none; ">Submit</button>
                </td></tr></table>
        </div>
        <div id="movingBox4"  class="movingBox">
        	<table cellspacing="10" width="100%">
            <tr><td colspan="3" align="center">
				<ul class="right_section" style="font-size:18px; width:430px;">
					<li>
					<table><tr><td>Enter The Numbers as shown :</td>
                    			<td><li id="cap"></li></td></tr>
                    </table>
                    </li>			
                </ul>
                </td></tr><tr valign="top"><td>
                <button id="box4Button1" class="buttonBack" style="width:120px;">Go Back</button>
               </td><td>
               <input id="captchaAns" name="captchaAns" type="text" value="" class="input_text" style="width:100px;"/>
               </td><td>
               <button id="box4Button2" class="buttonNext" style="width:100px; float:right;">Finish</button>
                </td></tr></table>
        </div>
	</div>
    <br/>
    <!--<div id="nitDiv" style="color:#333;width:560px; font-size:16px;" align="left"> 
    	<b>Having Online Shopping trouble ???</b><br />
       			1. You ask us a question.<br />
                2. We do the searching for you.<br />
                3. You get great answers.
    </div> -->
    <img style="position:relative; margin-right:730px; margin-top:-230px;" src="/static/images/cartoon.png"  />
    
</div>
</center>
<script>

var windowWidth = 0;
  
  if( typeof( window.innerWidth ) == 'number' ) {
    //Non-IE
    windowWidth = window.innerWidth;
  } else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
    //IE 6+ in 'standards compliant mode'
    windowWidth = document.documentElement.clientWidth;
  } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
    //IE 4 compatible
    windowWidth = document.body.clientWidth;
  }

$(document).ready(function(){
			roll();
			setTimeout(function() { displayHow(); },2000);		
			$("#box1Button1").click(function()
				{
					if($("#question").attr('value').length >14){
						$("#movingBox1").css("position","absolute");
						forwardroll("#movingBox1");
					}
					else showInfoMsg("#movingBoxErrorInfo","Your Search Query must be at least 15 characters long.");
			   });
			$("#box2Button1").click(function(){backroll("#movingBox2");});	
			$("#box2Button2").click(function()
				{
			  	var reg = new RegExp(/^\s*[\w\-\+_]+(\.[\w\-\+_]+)*\@[\w\-\+_]+\.[\w\-\+_]+(\.[\w\-\+_]+)*\s*$/);
					if(reg.test($("#email").attr('value'))){
						forwardroll("#movingBox2");
				      	checkEmail();
				    }
					else showInfoMsg("#movingBoxErrorInfo","Please enter a valid Email Id !! ");
				});	
																	
  		    $("#box3Button1").click(function(){backroll("#movingBox3");});
  		  	$("#box3Button2").click(function()
				{
  	  		  		if($("#password").attr('value').length >= 6){
  	  		  			forwardroll("#movingBox3");
  		  				captcha();
					}
  	  		  		else showInfoMsg("#movingBoxErrorInfo","Password must be at least 6 characters long. Try another.");   		  				
  		  		});
			$("#box3Button3").click(function(){userQuestion();});

		    $("#box4Button1").click(function(){backroll("#movingBox4");});
  		  	$("#box4Button2").click(function(){newUserQuestion();});

			$("#footer_heading1,#footer_heading2,#howItWorks").click(function(){displayHow();});
});
function captcha()
{
	if(!captcha.count)
	{
		$.get('/welcome/captcha',{},function(response){	
			$("#cap").html(response);
		});
		captcha.count=1;
	}
}

function checkEmail()
{
	chEmail=$("#email").attr('value');
	
	$.post('/welcome/checkMail',{'userEmail':chEmail},function(response){	
		if(response=="1") 
		{
			$("#box3Button2").css("display","none");
			$("#box3Button3").css("display","block");
		}
		else
		{
			$("#box3Button3").css("display","none");
			$("#box3Button2").css("display","block");
		
		}	
	});
	
}

function userQuestion()
{
	usrQuestion=$("#question").attr('value');
	usrEmail=$("#email").attr('value');
	usrNotify=$('#notifyMe').attr('checked');
	usrPassword=$("#password").attr('value');
	usrRemember=$('#rememberMe').attr('checked');
	if(usrNotify)
		usrNotify=1;
	$.post('/welcome/userQuestion',{'userQuestion': usrQuestion,'userEmail':usrEmail,'userNotify':usrNotify,'userPassword':usrPassword,'userRemember':usrRemember},function(response){	
		if(response=="error")
			showInfoMsg("#movingBoxErrorInfo","Your Email and Password do not match. Please try again.");
		else 
			window.location=response;
	});

}


function newUserQuestion()
{
	usrQuestion=$("#question").attr('value');
	usrEmail=$("#email").attr('value');
	usrNotify=$('#notifyMe').attr('checked');
	usrPassword=$("#password").attr('value');
	usrRemember=$('#rememberMe').attr('checked');
	captchaUsrAnswer=$("#captchaAns").attr('value');
	if(usrNotify)
		usrNotify=1;
	$.post('/welcome/newUserQuestion',{'userQuestion': usrQuestion,'userEmail':usrEmail,'userNotify':usrNotify,'userPassword':usrPassword,'userRemember':usrRemember,'captchaUserAnswer': captchaUsrAnswer},function(response){	
		if(response=="success") 
			window.location="../home";
		else
		{
			showInfoMsg("#movingBoxErrorInfo",response);
		}
	});

}

function forwardroll($elem)
{
	$("#movingBoxErrorInfo").hide();
	$($elem).animate({left:"-620px"},700,function(){});
	$($elem).next().css("display","block").animate({left:x+"px"},700,function(){$($elem).css("display","none");});
			
}
function backroll($elem)
{
	$("#movingBoxErrorInfo").hide();
	$($elem).animate({left:y+"px"},700,function(){});
	$($elem).prev().css("display","block").animate({left:x+"px"},700,function(){$($elem).css("display","none");});	
}
function roll()
{
	slideWidth = $("#movingBox1").width();
	x=(windowWidth-slideWidth)/2;
	y=windowWidth;
	  $("#movingBox2").css("left",y+"px");
	  $("#movingBox3").css("left",y+"px");
	  $("#movingBox4").css("left",y+"px");
	ipcheck();
}

function ipcheck()
{
	var x=0;
	if(x==1)
	{
		first_time=1;
		$(".movingBox").hide();
	    $("#startpage img:last").css("margin-left","-400px");
	}
	
}

	// I have made changes to this file pls commit

</script>
