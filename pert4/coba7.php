<!DOCTYPE html>
<html>
<head>
	<title>Tiket Online</title>
</head>
<body>	
	<fieldset>
		<legend>FORM BIODATA</legend>
			<form action="#" method="POST" enctype="multipart/form-data">
				<table>
					<tr>
						<td>Nama Penumpang  :</td>
						<td><input type="text" name="username" value=""><br></td>
					</tr>
				</table>
				<br>
					<input type="submit" value="Submit" name="submit">
					<input type="reset"  value="Reset" name="reset">
			</form>
	</fieldset>

	
<?php 

for ($username=1;$username<=4;$username++){
	echo "coba".$username."<br>";
}





?>		
</body>
</html>