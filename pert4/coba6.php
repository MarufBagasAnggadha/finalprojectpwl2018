<!DOCTYPE html>
<html>
<head>
	<title>Tiket Online</title>
</head>
<body>	
	<fieldset>
		<legend>FORM BIODATA</legend>
			<form action="coba7.php" method="POST" enctype="multipart/form-data">
				<table>
					<tr>
						<td>Tujuan  :</td>
						<td><select name="Tujuan">
								<option value="">Pilih</option>
								<option value="JS">Jakarta-Semarang</option>
								<option value="JJ">Jakarta-Jogja</option>
								<option value="JS">Jakarta-Surabaya</option>
								<option value="JP">Jakarta-Palembang</option>
							</select><br></td>
					</tr>
					<tr>
						<td>Jam Keberangkatan :</td>
						<td>
							<input type="radio" name="Keberangkatan" value="08.00">08.00
							<input type="radio" name="Keberangkatan" value="09.00">09.00
							<input type="radio" name="Keberangkatan" value="10.00">10.00
							<br></td>
					</tr>
					<tr>
						<td> Jumlah Penumpang  :</td>
						<td><input type="number" name="Penumpang"><br> </td>
					</tr>
				</table>
				<br>
					<input type="submit" value="Submit" name="submit">
					<input type="reset"  value="Reset" name="reset">
			</form>
	</fieldset>

	
<?php 
	if(isset($POST['submit'])){
		$Tujuan = $POST['Tujuan'];
		$Keberangkatan = $POST['Keberangkatan'];
		$Penumpang = $POST['Penumpang'];
	}
?>		
</body>
</html>