<!DOCTYPE html>
<html>
<body>

<h1>FORMULIR</h1>

<form action="?action=edit" method="POST">
	<h2>Form Register</h2>
	Masukkan Username: <input type="text" name="Username" value=""><br><br>
	Masukkan Email: <input type="Email" name="Email" value=""><br><br>
	Masukkan Password: <input type="Password" name="Password" value=""><br><br>
	<input type="hidden" name="action" value="insert">
	<input type="submit" name="submit" value="submit">
</form>

<?php
if ($_POST) {
	
	print_r($_GET);
	echo"<BR>";echo"<BR>";
	print_r($_POST);
	echo"<BR>";echo"<BR>";
	print_r($_REQUEST);
}
?>

</body>
</html>