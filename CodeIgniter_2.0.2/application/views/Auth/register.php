<div id="registerBox" style="padding-bottom: 15px;">
	<div style="font-size: 28px;color:#000;text-decoration: underline;text-align: center;">Sign Up with Wikikhoj</div>
	<div style="background: #eee;margin: 10px;">	
		<table style="margin-left:35px;margin-top: 10px;" >
		<tr>
			<td><img id="userFBImg" fbId="<?php echo $id;?>" src="http://graph.facebook.com/<?php echo $id;?>/picture?type=normal" style="height: 50px"  ></td> 
			<td style=" "><span style="font-size: 30px;">Hi!  <span id="userFbName"><?php echo urldecode($name);?></span> </span></td>
		</tr>
		</table>
		<center><span class="info" style="font-size:14px;color:#700;display: none;">Hello </span></center>		
		<table style="color: #000;margin-left: 35px;" >
			<tr>
				<td>Email:</td>
				<td><input class="input_text" type="text" id="userFbEmail" value="<?php echo urldecode($email);?>" ></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input class="input_text" type="password" id="userpassword" placeholder="Set your password"  ></td>
			</tr>
			<tr>
				<td>Search Query*</td>
				<td><textarea class="input_text" type="" id="searchQuery" placeholder="Enter e-shopping query ?? &nbsp;&nbsp; Eg: Cheap and best android mobile."  style="height: 55px"  /><?php echo urldecode($searchQuery);?></textarea ></td>
			</tr>
		</table>
	
	<center><button onclick="register()" class="button_me" style="margin-bottom: 10px;">Sign Up</button></center>
	</div>
	<span style="color:#bbb"><?php if(empty($searchQuery)){echo "*Optional";}?></span>	
</div>
<style>
#divcontainer{
width:500px !important
}
#registerBox table tr td{

padding: 2px;

}

.input_text {
    height: 20px;
     width: 200px;
}
</style>
<script>
$(document).ready(function(){
	document.getElementById('userpassword').focus()
});

function register(){
	var img=$("#userFBImg").attr('src');
	var fbId=$("#userFBImg").attr('fbId');
	var name=$("#userFbName").html();
	var email=$("#userFbEmail").attr('value');
	var searchQuery=$("#searchQuery").attr('value');
	var password=$("#userpassword").attr('value');
	var reg = new RegExp(/^\s*[\w\-\+_]+(\.[\w\-\+_]+)*\@[\w\-\+_]+\.[\w\-\+_]+(\.[\w\-\+_]+)*\s*$/);
	if(!(reg.test(email))){
			showInfoMsg("Please enter a valid Email Id !! ");
	}else if(!(password.length >=6)) {
			showInfoMsg("Password must be at least 6 characters long. Try another.");
	}else{	
			$.post("/auth/userRegistration",{"img":img,"password":password,"name":name,"email":email,"searchQuery":searchQuery,"fbId":fbId},function(response){
				if(response="success"){
					window.location="http://mikikhoj.com/home";
				}
			});
		}		
}
</script>