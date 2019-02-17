<?php
//2 random getallen genereren
$numb1 = (rand(5,10));
$numb2 = (rand(1,5));


//Rekenen met 2 random getallen
echo "Numbers: $numb1 & $numb2 <br>";
echo "$numb1 + $numb2 =" , $numb1 + $numb2 , "<br>";
echo "$numb1 - $numb2 =" , $numb1 - $numb2 , "<br>";
echo "$numb1 x $numb2 =" , $numb1 * $numb2 , "<br>";
echo "$numb1 : $numb2 =" , $numb1 / $numb2 , "<br>";

//
echo "<br>";
//

//Tafel van 6
function reken($tafel) {
	echo "Tafel van $tafel:<br>";
	for ($numb2 = 1; $numb2 <= 10; $numb2++) {
		echo "$tafel x $numb2 = " , $tafel * $numb2 , "<br>";
	}
}

reken(6);
?>