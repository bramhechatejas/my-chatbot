<button id="demo" onclick="myFunction()">Click me</button>

<div id="myc-container" hidden="hidden">
<div id="myc-conversation-area" ></div>
<div id="myc-input-area" >
		<input id="myc-text" type="text" placeholder="Ask something..."></input>
</div>
</div>
	
<script>
var flag = "true";
console.log(flag);
function myFunction() {
    if(flag == "true")
	{
		document.getElementById('myc-container').hidden="";
		flag = "false"
		console.log("not hidding ");
	}
	else
	{
		document.getElementById('myc-container').hidden="hidden";
		flag = "true";
		console.log("hidding " + flag);
	}
}
</script>
<?php if ( $debug ) { ?>
	<div class="myc-debug">
		<textarea id="myc-debug-data" cols="80" rows="20" disabled></textarea>
	</div>
<?php } ?>
