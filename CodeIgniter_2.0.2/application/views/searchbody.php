<style type="text/css">
@charset "utf-8";
/* CSS Document */
*, *:active, *:focus {
    outline: 0 none; margin:0px; padding:0px;
}
body {
    background: url("/static/images/back.png") no-repeat scroll center #3C5A76;
    border: 0 none;
    font-family: Cambria;
    height: 100%;
}
.startpage {
    height: 100%;
    min-height: 520px;
    position: relative;
}
h1{text-shadow: 0px 0px 3px rgba(0,0,0,1); font-size:72px; vertical-align:bottom; }

#divcontainer { width:600px; height:auto; margin-top:60px;}

.input_wrapper {
    background: url("/static/images/register/searchbar.png") no-repeat scroll 0 0 transparent;
    height: 46px;
}
.input_wrapper:hover { background-position: left -147px; }
.input_wrapper:hover input { opacity:.5; }
.input_wrapper input:focus { color: #333; opacity:1; }
.input_wrapper input{
	background: url("/static/images/x.gif") repeat scroll 0 0 transparent;
    border-width: 0;
	color: #869CB2;
    font-size: 20px;
    width:575px;
    z-index: 2;
	margin:10px;
}
#searchbox button:hover { opacity: 1; }
#searchbox button {
    background: url("/static/images/register/button_submit.gif") no-repeat scroll right 0 padding-box #8BAD68;
    border: 1px solid #2A3F56;
    border-radius: 6px 6px 6px 6px;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(255, 255, 255, 0.7) inset;
    color: rgba(0, 0, 0, 0.63);
    cursor: pointer;
    font-size: 17px;
	padding:5px;
    font-weight: bold;
	width: 180px;
    height: 42px;
    opacity: 0.9;
	text-align:left;
    text-shadow: 0 1px 1px rgba(255, 255, 255, 0.37);
}

</style>
<center>
<div id="startpage" class="startpage">
	<div id="divcontainer" align="left">
    	<div id="logomain" style="height:180px; background-image:url(/static/images/test.png); background-repeat:no-repeat;" >
   
        </div>
        
		<form id="searchbox" autocomplete="off" action="/welcome/putdata" method="get" style="margin-top:30px;">
        	<table cellspacing="10">
            <tr><td colspan="2">
        		<div class="input_wrapper" >
						<input id="searchq" type="text" value=""  name="searchq" placeholder="Have a Question ??? We have an answer to it." />
				</div>
                </td></tr>
                <tr valign="top">
                <td  width="365" >
                <div class="input_wrapper" style="background-image:url(/static/images/register/emailbar.png); margin-left:65px;">
						<input id="email" type="text" value=""  name="email" style="width:280px;" placeholder="Your Email"/>
				</div></td>
                <td >
             	
                <button type="submit">
						<span>Start Searching!</span>
				</button>
                </td></tr></table>
        </form>
	</div>
</div>
</center>