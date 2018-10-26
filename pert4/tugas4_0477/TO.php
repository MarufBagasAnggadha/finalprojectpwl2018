<!DOCTYPE html>
<html>
<head>
	<title>Membuat Tiket Online 0477</title>
</head>
<body>
	<fieldset>
		<legend>Ticket Online</legend>
		<form action="TO2.php" method="post">
		<table>	
			<tr>
				<td>Tujuan : </td>
				<td>
					<select name="tujuan">
						<option value="JS" >Jakarta-Semarang</option>
						<option value="JY" >Jakarta-Yogyakarta</option>
						<option value="JP" >Jakarta-Papua</option>
					</select>
				</td>	
			</tr>
			
			<tr>
				<td>Jam Keberangkatan :</td>
				<td>
					<input type="radio" name="jam" value="08.00">8.00
					<input type="radio" name="jam" value="09.00">9.00
					<input type="radio" name="jam" value="10.00">10.00
				</td>
			</tr>
			
			<tr>
				<td>Jumlah Penumpang :</td>
				<td><input type="number" name="penumpang">
				</td>	
			</tr>	

		</table>
		<input type="submit" name="submit" value="Submit">
		<input type="reset" name="reset" value="Reset">
		</form>
	</fieldset>

</body>
</html>