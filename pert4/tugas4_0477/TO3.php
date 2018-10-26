<!DOCTYPE html>
<html>
<head>
	<title>Membuat Tiket Online 0477</title>
</head>
<body>
	<form action="#" method="POST">
		<fieldset>
			<legend>Ticket Online</legend>
			<?php
				$name = $_POST['nama'];
				
				foreach ($name as $data) {
					echo "Tujuan :".$_POST['Tujuan']."<br>";
					echo "Jam :".$_POST['Jam']."<br>";
					printf("Nama Penumpang :".$data."<br>");
					echo "==============================<br>";

				}
			?>
		</fieldset>
	</form>

</body>
</html>