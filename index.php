<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">

<script>
function openForm() {
	document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
$(document).ready(function(){
	$('#btn').click(function(){
		var url = "input.php"; 
		$.ajax({
			type: "GET",
			url: url,
			data: $('#my-form').serialize(),
		});
		$('#umess').val('');
		event.preventDefault();
	});
});
setInterval(function(){
	$("#show").load('output.php');
}, 500);

</script>

</head>
<body>
	<h1>Hello! Welcome to open chat.</h1>
<div class="show" id="show"></div>
<form id="my-form">
	<button class="open-button" onclick="openForm()">Chat</button>
	<div class="chat-popup" id="myForm">
		<div  class="form-container">
			<text class="float-right close" onclick="closeForm()">X</text>
			<h1>Chat Me</h1>
			<label for="msg"><b>Name :</b></label>
			<input type="text" name="uname" placeholder="User Name" class="mybox" id="uname" required>
			<textarea id="umess" placeholder="Type message.." name="umess" required ></textarea>
			<input  type="submit" class="btn" id="btn" value="Send">
		</div>
	</div>
</form>
</body>
</html>
