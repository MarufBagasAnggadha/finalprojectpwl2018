<!DOCTYPE html>
<html>
<head>
	<title>COBA ARRAY</title>
	<h1>ARRAY</h1>
</head>
<body>
<form action="#" method="POST">
<table>
	<tr>
		<td>
			PWL :
		</td>
		<td><input type="text" name="PWL"></td>
	</tr>
	<tr>
		<td>
			AI :
		</td>
		<td><input type="text" name="AI"></td>
	</tr>
	<tr>
		<td>
			SBD :
		</td>
		<td><input type="text" name="SBD"></td>
	</tr>

</table>
<input type="submit" name="hitung">
</form>
<?php

$PWL=array("Toni"=>"80", "Dewi"=>"90", "Nina"=>"75","Reza"=>"60");
echo "PWL =".$PWL['Toni'];
$AI=array("Toni"=>"60", "Dewi"=>"70", "Nina"=>"95","Reza"=>"50");
echo "AI =".$AI['Toni'];
$SBD=array("Toni"=>"75", "Dewi"=>"75", "Nina"=>"80","Reza"=>"70");
?>
</body>
</html>	