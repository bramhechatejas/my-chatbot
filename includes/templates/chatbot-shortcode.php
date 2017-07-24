<button id="demo" onclick="myFunction()">Click me</button>

<div class="myc-container" id="test" hidden="hidden">
	<div id="myc-conversation-area"></div>
	<div id="myc-input-area">
		<input id="myc-text" type="text" placeholder="<?php _e( 'Ask something...', 'my-chatbot' ); ?>"></input>
	</div>
</div>

<script>
var flag = "true";
function myFunction() 
{
    	if(flag == "true")
	{
		document.getElementById('myc-container').hidden="";
		flag = "false"
	}
	else
	{
		document.getElementById('myc-container').hidden="hidden";
		flag = "true";
	}
}
</script>

<?php if ( $debug ) { ?>
	<div class="myc-debug">
		<textarea id="myc-debug-data" cols="80" rows="20" disabled></textarea>
	</div>
<?php } ?>
