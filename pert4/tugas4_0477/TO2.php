<!DOCTYPE html>
<html>
<head>
	<title>Membuat Tiket Online 0477</title>
</head>
<body>
	<fieldset>
		<legend>Ticket Online</legend>
		<form action="TO3.php" method="post">
		<table>	
			<?php

				for($i = 0; $i<$_POST['penumpang'];$i++)
				{
					echo "<tr><td>Nama Penumpang :</td><td><input type='text' name='nama[]'></td></tr>";
					echo "<input type='hidden'  name='Tujuan' value=' ".$_POST['tujuan']." '>";
					echo "<input type='hidden'  name='Jam' value=' ".$_POST['jam']." '>";
					

				}
			?>
		</table>
		<input type="submit" name="submit" value="Submit">
		<input type="reset" name="reset" value="Reset">
		</form>
	</fieldset>

</body>
</html>

