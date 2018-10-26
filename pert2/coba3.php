<!DOCTYPE html>
<html>
	
<body>

<?php


function hjual($bakso,$soto,$teh,$jeruk){
echo "harga jual";
static $hbakso=12000;
static $hsoto=9000;
static $hteh=2000;
static $hjeruk=3000;


$total=($hbakso*$bakso)+($hsoto*$soto)+($hteh*$teh)+($hjeruk*$jeruk);
printf("total=%0.0f", $total);

}

hjual(12,1,4,5)
?>

</body>
</html>
