<!DOCTYPE html>
<html>
<head>
	<title>Barbara Danrel's P2 xkcd Password Generator for DWA-15</title>
	<meta charset='utf-8'>
	
	<link href='css/styles.css' rel='stylesheet' type='text/css'>
	<?php require('logic.php'); ?>
</head>
<body>
	<div class="container">
		<h1>xkcd Password Generator</h1><br>
		
		<p>Have you ever created a password, but then quickly forgotten what it was? If this has happened to you, an xkcd password might be
		something to consider. The idea behind it is that a small number of random, common words could make a strong password and be easy to remember 
		at the same time.</p>
		<p>Here is a simple example of an xkcd password generator. Enter the number of words you want in the password (between 1 and 9) and select to 
		include a symbol and/or a number. Then click the button to get a new password.</p><br>
		
		<form method='GET' action='index.php'>
			Number of words (default is 4)  <input type='text' name='wordNumber' maxlength="1"> <br>
			<label><input type="checkbox" name="useSymbol"> Include a symbol</label><br>
			<label><input type="checkbox" name="useNumber"> Include a number</label><br>
			<input type='submit' value='Get a new password!'><br>
		</form>
		
		<p class='password'>Password is:<br><?php echo $password ?></p><br>
		
	</div>
</body>
</html>