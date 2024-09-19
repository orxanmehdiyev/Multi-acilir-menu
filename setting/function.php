<?php 
function TarixSaatAzToBe($deyer){
	$bir=explode(" ", $deyer);
	$iki=explode("-", $bir[0]);
	$uc=$iki[2].".".$iki[1].".".$iki[0];
	$Sonuc= $uc." ".$bir[1];
	return $Sonuc;
} 

?>