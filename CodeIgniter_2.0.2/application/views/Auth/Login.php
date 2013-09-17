<div id="loginBox" style="padding-bottom: 10px;">
	<h2>Your Login Details:</h2>
	<center><span class="info" id="loginErrorInfo" style="color:#900"><?php echo $msg?></span></center>
	<table style="margin-left: 50px;" cellspacing="5px" cellpadding="5px">
	<tr>
		<td>Email: </td>
		<td><input class="input_text" type="text" id="loginEmail" name="loginEmail"></td>
	</tr>
	<tr>
		<td>Password: </td>
		<td><input class="input_text" type="password" id="loginPassword" name="loginPassword"></td>
		
	</tr>
	</table>
	<center><button onclick="login()" class="button_me" style="">Login</button></center>
</div>
<style>
#divcontainer{
width:450px !important
}
</style>