<!DOCTYPE html>
<html>
<head>
	<title>Coba coba</title>
</head>
<body>

<?php
	$pertemuan=14;
	$presensi=10;
	echo $kehadiran=$presensi/$pertemuan;
	if ($kehadiran>0.75) {
		echo "Boleh ikut ujian";
	}

?>
</body>
</html>