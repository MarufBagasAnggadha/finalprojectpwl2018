<!DOCTYPE html>
<html>
	
<body>

<?php
$phi=3.14;
$d=10;
$r=$GLOBALS['d']/2;
$t=7;

function v_bola(){
$stabung = 2* $GLOBALS['phi'] * $GLOBALS['r']*$GLOBALS['r']*$GLOBALS['t'];
echo "selimut tabung = $stabung";
}
echo "diameter tabung= $d, tinggi tabung $t";
v_bola();
?>

</body>
</html>
