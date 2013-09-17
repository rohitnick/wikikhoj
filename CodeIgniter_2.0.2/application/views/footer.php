<style type="text/css">
#footer{
	position:relative;
    color: #333;
    font: 12px 'Lucida Grande',Verdana;
	text-align: center;
	padding:10px;
}
#footer a{ color:#bbb; margin-left:20px;}
.footer_content
{
	background-color:#fff;
	width:950px;
	min-height:500px;
	border-radius:5px 5px 0px 0px;
	margin:0 auto;
	box-shadow:0px 20px 15px rgba(0,0,0,0.1),inset 0px 0px 10px rgba(0,0,0,.4);;
	border:1px solid #333;
	
}
.footer_content_heading
{
	font-size:25px;
	padding:20px;
	color:#FFF;
	background-color:#3C5A76;
	text-align:left;
	text-shadow:0px 0px 1px #000;
	box-shadow:inset 0px 0px 25px rgba(40,70,110,1);
	margin:25px -20px 10px -20px;
	transform: rotate(1deg);
	-ms-transform: rotate(1deg); /* IE 9 */
	-webkit-transform: rotate(1deg); /* Safari and Chrome */
	-o-transform: rotate(1deg); /* Opera */
	-moz-transform: rotate(1deg); /* Firefox */
	
}
.footer_content h3
{
	font-weight:100;
	font-size:18px;
	text-align:justify;
	padding:10px 20px;
	color:#1a3854;
	background-color:#eef;
	border:1px solid #dde;
}
.footer_content h4
{
	font-weight:normal;
	font-size:16px;
	text-align:justify;
	padding:10px 30px 30px 30px;
	color:#003;
}
</style>

<center>
    <div id="footer">
        <a><strong>&copy; Wiki Khoj, Inc.</strong></a>
        <a href="/footer/aboutus">About WikiKhoj</a>
        <a href="/footer/hiw">How It Works</a>
        <a href="/footer/faq">FAQ</a>
        <a href="/footer/contact">Contact</a>
        <a href="/footer/privacy">Privacy Policy</a>
    </div>
</center>

<script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-28775217-1']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

function showInfoMsg(id,msg)
{ 
	$(id).fadeOut();
	$(id).html(msg);
	$(id).fadeIn("4000");
}

$(document).ready(function()
{															
		
		$(".input_text").val("");

					$(".input_text").focus(function()
			 						{
									   if($(this).attr('value')=="")
										  {
											$(this).keypress(
															function()
															{
																$(this).next().fadeOut('100');
																
															 }
															);
											
										  }
									  }
									  ); 
	  				$(".input_text").blur(function(){
									  if($(this).attr('value')=="")
										  {
											$(this).next().fadeIn('1300');
										  }
									  }
									  );
	  				$(".input_label").click(function()
									   {
							  			$(this).prev().focus();											  
									   }
									   );
});

</script>
