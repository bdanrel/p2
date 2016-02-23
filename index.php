<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<?php require('logic.php'); ?>
</head>
<body>
	<form method='GET' action='index.php'>
		<h1>xkcd Password Generator</h1>
		
		Enter an integer number of words between 1-9 (defaults to 4 if invalid)  <input type='text' name='wordNumber'> <br>
		<label><input type="checkbox" name="useSymbol"> Include a special character like @</label><br>
		<label><input type="checkbox" name="useNumber"> Include a number</label><br>
		<input type='submit' value='Get a new password!'><br>
	</form>
	Your password is <?php echo $password ?>

</body>
</html>