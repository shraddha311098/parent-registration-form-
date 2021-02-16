<!DOCTYPE html>
<html>
<head>
    <title>Send an Email</title>
</head>
<body>
		<h4 class="sent-notification"></h4>
        <center>
		<form id="myForm" action="verifyemail.php" method="POST">
        <div class="firstBox">
			<h2>Verify Your Email</h2>

			<label>Email</label>
			<input id="email" type="text" placeholder="Enter Email" name="email">
			<br><br>

			<button type="submit" value="Send An Email">Submit</button>

          </div>
		</form>
	</center>
</body>
</html>