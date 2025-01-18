<?php session_start(); ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" type = "text/css" href = "modal.css">
</head>
<body>

<button id = "myBtn"> Open Modal </button>

<div id = "myModal" class = "modal">
<div class="modal-content">
	<div class="modal-header">
		<span class="close">&times;</span>
		<h2> Terms and Conditions </h2>
	</div>
	<div class="modal-body">
		<p>Some text in the Modal Body</p>
		<p>Some other text...</p>
	</div>
	<div class="modal-footer">
		<br> <br>
	</div>
</div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>