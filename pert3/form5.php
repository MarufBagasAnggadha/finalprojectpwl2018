<!DOCTYPE html>
<html>
<body>

<h1>FORMULIR</h1>

<form action="#" method="POST" enctype="multipart/form-data">
	<h2>Form Upload</h2>
	Pilih File : <input type="file" name="berkas" value=""><br><br>
	<input type="submit" name="submit" value="Submit">
	<input type="reset" name="reset" value="Reset">
	
</form>

<?php
if (isset($_POST['submit'])) {
	
	echo"<pre>";
	print_r($_FILES);
	echo"<pre>";
}
?>

</body>	
</html>