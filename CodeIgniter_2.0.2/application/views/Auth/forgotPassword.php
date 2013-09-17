<div id="forgotPasswordBox" style="padding-bottom: 10px;">
	<h2>Enter Your Email Address:</h2>
	<table style="margin-left: 75px;" cellspacing="5px" cellpadding="5px">
		<tr>
			<td>Email: </td>
			<td><input class="input_text" type="text" id="sendMailToInputBox"  ></td>
		</tr>
	</table>
	<center><button onclick="sendMail()" class="button_me" style="">Submit</button></center>
</div>

<style>
#divcontainer{
width:450px !important
}
</style>

<script>
function sendMail(){
	
	$.post('/auth/forgotPasswordMail',{'email':$("#sendMailToInputBox").attr("value")},function(response){
		$("#forgotPasswordBox").append(response);
	});
}
</script>