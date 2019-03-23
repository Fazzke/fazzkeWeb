<div class="site">
	<div class="siteContent prototype">
		<h1> Sweet EmojiChoose Prototype </h1>
		<p> Hier entsteht Fazzkes wunderbarer EmojiChoose Prototype. Probier es doch gleich einmal aus und freue dich mit! </p>
		<h2> Blablabla Umfrage BlaBla </h2>

		<div class="floatBlock">
			<div class = "innerFloatBlock left" id="prototype_leftBlock">
				<p> Wie sehr magst du {prototype_question1}? </p> 
			</div>
			<div class = "innerFloatBlock right" id="prototype_rightBlock">
				<canvas id="prototypeCanvas" data-processing-sources="../canvas/emojiChoose.pde"></canvas>
			</div>
		</div>
		<div class="clear"></div>

		<h3> Dein Ergebnis: </h3>
		<p> Du magst zu <span id="innerHTMLpercent1">?</span> % {prototype_question1} </p> 

		<div class="floatBlock">
			<div class = "innerFloatBlock left" id="prototype_leftBlock">
				<p> Wie sehr magst du {prototype_question2}? </p> 
			</div>
			<div class = "innerFloatBlock right" id="prototype_rightBlock">
				<canvas id="prototypeCanvasHeart" data-processing-sources="../canvas/emojiChooseHeart.pde"></canvas>
			</div>
		</div>
		<div class="clear"></div>

		<h3> Dein Ergebnis: </h3>
		<p> Du magst zu <span id="innerHTMLpercent2">?</span> % {prototype_question2} </p> 
	</div>
</div>
<script type="text/javascript">
	$(document).ready(()=> {

	$('#prototypeCanvas').on('click', () => {
		var pjs = Processing.getInstanceById('prototypeCanvas');
		gesuchterWert = pjs.getGesuchterWert();	
		document.getElementById("innerHTMLpercent1").textContent = gesuchterWert;
	});

		$('#prototypeCanvasHeart').on('click', () => {
		var pjsHeart = Processing.getInstanceById('prototypeCanvasHeart');
		gesuchterWertHeart = pjsHeart.getGesuchterWert();	
		document.getElementById("innerHTMLpercent2").textContent = gesuchterWertHeart;
	});		

	})	
</script> 