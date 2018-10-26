<!DOCTYPE html>
<html>
<body>

<h1>FORMULIR</h1>

<form action="#" method="POST">
	<h2>Form Register</h2>
	Masukkan Username : <input type="text" name="Username" value=""><br><br>
	Masukkan Email : <input type="Email" name="Email" value=""><br><br>
	Masukkan Password : <input type="Password" name="Password" value=""><br><br>
	Masukkan Program :
	<input type="radio" name="program" value="reguler">Reguler
	<input type="radio" name="program" value="premium">Premium<br><br>	
	<input type="submit" name="submit" value="`submit">
	<input type="submit" name="clickme" value="Click Me">
	<input type="reset" name="reset" value="Reset">
</form>

<?php
if (isset($_POST['submit'])) {
	
	echo "Username:".$_POST['Username']."<br>";
	echo "Email:".$_POST['Email']."<br>";
	echo "Password:".$_POST['Password']."<br>";
	echo "program:".$_POST['program']."<br>";
}
?>

</body>
</html>