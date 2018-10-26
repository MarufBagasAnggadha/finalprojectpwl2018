<!DOCTYPE html>
<html>
<head>
	<title>Belajar Membuat Formulir PHP 0477</title>
</head>
<body>	
	<fieldset>
		<legend>FORM BIODATA</legend>
			<form action="#" method="POST" enctype="multipart/form-data">
				<table>
					<tr>
						<td>Nama   :</td>
						<td><input type="text" name="username" value=""><br></td>
					</tr>

					<tr>
						<td>Alamat :</td>
						<td><textarea name="alamat"></textarea><br></td>
					</tr>

					<tr>
						<td>Tempat Lahir :</td>
						<td><input type="text" name="tempat_lahir" value=""><br></td>
					</tr>

					<tr>
						<td>Tanggal Lahir :</td>
						<td><input type="date" name="tanggal_lahir"><br></td>
					</tr>

					<tr>
						<td> Telepon  :</td>
						<td><input type="number" name="telepon"><br> </td>
					</tr>

					<tr>
						<td>Jenis Kelamin </td>
						<td>
							<input type="radio" name="gender" value="L">L
							<input type="radio" name="gender" value="P">P 
							<br></td>
					</tr>

					<tr>
						<td>Agama  </td>
						<td><select name="agama">
								<option value="">Pilih</option>
								<option value="islam">Islam</option>
								<option value="kristen">Kristen</option>
								<option value="Hindu">Hindu</option>
								<option value="Katolik">Budha</option>
							</select><br></td>
					</tr>

					<tr>
						<td>Hobby</td>
						<td><input type="checkbox" name="hobby" value="Bernafas">Bernafas
					  	<input type="checkbox" name="hobby" value="Makan">Makan
					  	<input type="checkbox" name="hobby" value="Tidur">Tidur <br></td>
					</tr>

					<tr>
						<td>Foto</td>
						<td><input type="file" name="file" value=""><br></td>
					</tr>
				</table>

					<br>
					<input type="submit" value="Submit" name="submit">
					<input type="reset" name="reset" value="Reset">
			</form>
	</fieldset>

	<?php 
		if (isset($_POST['submit'])) {
			 $nama =$_POST['username'];
			 $alamat =$_POST['alamat'];
			 $tempat=$_POST['tempat_lahir'];
			 $tanggal=$_POST['tanggal_lahir'];
			 $telepon = $_POST['telepon'];
			 $jenis= $_POST['gender'];
			 $hobby= $_POST['hobby'];
			 $agama= $_POST['agama'];

			$file = $_FILES['file']['name'];
			$tmp_name=$_FILES['file']['tmp_name'];

			move_uploaded_file($tmp_name, "uploads/".$file);
	?>	

	<table>
		<tr>
			<td>
				<img src="uploads/<?php echo $file?>" style="width: 100px" >
			</td>
		</tr>
		<tr>
			<td>Nama </td>
			<td>:</td>
			<td><?php echo $nama ?></td>
		</tr>
		<tr>
			<td>Alamat </td>
			<td>:</td>
			<td><?php echo $alamat ?></td>
		</tr>
		<tr>
			<td>Tempat Lahir </td>
			<td>:</td>
			<td><?php echo $tempat ?></td>
		</tr>
		<tr>
			<td>Tanggal Lahir </td>
			<td>:</td>
			<td><?php echo $tanggal ?></td>
		</tr>
		<tr>
			<td>Telepon </td>
			<td>:</td>
			<td><?php echo $telepon ?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><?php echo $jenis; ?></td>
		</tr>
		<tr>
			<td>agama</td>
			<td>:</td>
			<td><?php echo $agama; ?></td>
		</tr>
		<tr>
			<td>Hobby</td>
			<td>:</td>
			<td><?php echo $hobby; ?></td>
		</tr>
		
	</table>
<?php } ?>		
</body>
</html>