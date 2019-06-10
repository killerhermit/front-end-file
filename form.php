<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="get" action="form.php">
<input type="text" name="username" required> username= <br>
<input type="password" name="password" required> password= <br>
<input type="submit" value="submit" >
</form>
</body>
</html>
<?php
if(isset($_GET['username']))
{
	echo $_GET['username'];
	echo"<br>";
	echo $_GET['password'];
}
?>