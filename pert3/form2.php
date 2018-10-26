<!DOCTYPE html>
<html>
<body>

<h1>FORMULIR</h1>

<form action="#" method="Post">
	<h2>Form Register</h2>
	Username: <input type="text" name="Username" value=""><br><br>
	Email: <input type="Email" name="Email" value=""><br><br>
	Password: <input type="Password" name="Password" value=""><br><br>
	<input type="submit" name="submit" value="submit">
</form>

<?php
if ($_POST) {
	var_dump($_POST);
	print_r($_POST);
	echo "Username:".$_POST['Username']."<br>";
	echo "Email:".$_POST['Email']."<br>";
	echo "Password:".$_POST['Password']."<br>";
}
?>

</body>
</html>