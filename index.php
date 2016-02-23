<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<?php require('logic.php'); ?>
</head>
<body>
	<form method='GET' action='index.php'>
    Password Request Form<br>
	
    <input type='text' name='wordNumber'> number of words<br>
	<input type="checkbox" name="useSymbol">use symbol<br>
	<input type="checkbox" name="useNumber">use number<br>
    <input type='submit' value='Get a new password!'><br>
</form>
<?php echo $password ?>

</body>
</html>