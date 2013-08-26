<head><title>WikiKhoj- Admin Login</title></head>
<link href="/static/css/main1.css" type="text/css" rel="stylesheet">
<style type="text/css" >

#adminLogin {
    background: none repeat scroll 0 0 #FFFFFF;
    border: 1px solid #E5E5E5;
    border-radius: 3px 3px 3px 3px;
    box-shadow: 0 4px 10px -1px rgba(200, 200, 200, 0.7);
    font-weight: normal;
  
    padding: 20px;
	font-family: sans-serif;
    font-size: 12px;
	color: #333333;
}

#adminLogin input { margin:5px; }
#adminLogin .input {
    background: none repeat scroll 0 0 #FBFBFB;
    border: 1px solid #E5E5E5;
    box-shadow: 1px 1px 2px rgba(200, 200, 200, 0.2) inset;
    font-family: "HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",sans-serif;
    font-size: 24px;
    font-weight: 200;
    outline:inset thin rgba(0,255,0,0.4);
    padding: 3px;
    width: 320px;

}

#adminLogin .button-primary {
    border: 1px solid rgba(0,255,255,0.1);
    border-radius: 3px;
    cursor: pointer;
    font-family: sans-serif;
    font-size: 13px;
    padding: 3px 10px;
    text-decoration: none;
	box-shadow: 0px 0px 3px rgba(0,0,0,0.7);
}

</style>
<center>
<div id="divcontainer" align="left">
	<div id="content">
    	<table><tr valign="top"><td>
    		<div id="content_left">
            	<img src="/static/images/content_top.png"/>
        		<div id="content_left_top">
                	<div style="width:400px; margin-left: 100px;">
						<form id="adminLogin" name="adminLogin" action="/xyz123/adminLogin" method="post">
							<p>
								<label>Username<br>
								<input type="text" tabindex="10" size="20" value="" class="input" id="adminUsr" name="adminUsr"></label>
							</p>
							<p>
								<label>Password<br>
							<input type="password" tabindex="20" size="20" value="" class="input" id="pwd" name="pwd"></label>
							</p>
							<p class="forgetmenot"><label><input type="checkbox" checked="checked" tabindex="90" value="forever" id="rememberme" name="rememberme"> Remember Me</label></p>
							<p class="submit">
							<input type="submit" tabindex="100" value="Log In" class="button-primary" id="wp-submit" name="wp-submit">
							</p>
						</form>
					</div>
           			
            	</div>
            	<img src="/static/images/content_bottom.png" />
            	<div id="content_left_bot">
            
            	</div>
    		</div></td><td>
    	<div id="content_right">
			<?php $this->load->view('side.php');?>        	
        </div>
        </td></tr>
        </table>
	</div>
</div>
</center>
