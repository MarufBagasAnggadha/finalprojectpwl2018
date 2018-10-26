<!DOCTYPE html>
<html>
<body>

<h1>FORMULIR</h1>

<form action="#" method="_GET">
	<h2>Form Register</h2>
	Username: <input type="text" name="Username" value=""><br><br>
	Email: <input type="Email" name="Email" value=""><br><br>
	Password: <input type="Password" name="Password" value=""><br><br>
	<input type="submit" name="submit" value="submit">
</form>

<?php
if ($_GET) {
	echo "Username:".$_GET['Username']."<br>";
	echo "Email:".$_GET['Email']."<br>";
	echo "Password:".$_GET['Password']."<br>";
}
?>

</body>
</html>