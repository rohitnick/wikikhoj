<div id="answerText"  >
	<div><?php if(isset($singleAnswer)){echo $singleAnswer;}else{ echo $answer['answer'];}?></div>
	<div style="color: #999;font-size: 12px;"><?php if(!(isset($singleAnswer))){echo $answer['time'];}?></div>
</div>

