<!DOCTYPE html>
<html>
	
<body>

<?php
$phi=3.14;
$r=5;

function v_bola(){
$vbola = 4/3 * $GLOBALS['phi'] * $GLOBALS['r']*$GLOBALS['r']*$GLOBALS['r'];
$diameter=$GLOBALS['r']*2;
printf("diameter tabung= %0f, tinggi tabung %0.2f", $diameter, $vbola);
}
v_bola();
?>

</body>
</html>
