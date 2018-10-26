<!DOCTYPE html>
<html>
<head>
	<title>Coba coba</title>
	<h1>COBAAAAA</h1>
</head>
<body>


<?php
	$pertemuan=14;
	$presensi=12;
	$tugas=false;
	echo $kehadiran=$presensi/$pertemuan;
	if ($kehadiran>0.75 and $tugas==true) {
		echo "Boleh ikut ujian";
	}
	else{
		echo "TIdak Boleh ikut ujian";
	}
	
?>
</body>
</html>