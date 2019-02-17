<?php
//Input
define("string" , "Monopoly");
define("boolean" , true);
define("integer" , 100);

//Yathzee
if (string == "Yathzee") {
	//If true
	if (boolean == true) {
		if (integer >15 and integer <30) {
			echo "Je wilt Yathzee spelen want je hebt tussen de 15 en 30 minuten tijd <br>";
		} elseif (integer <15 or integer >30) {
			echo "Je wilt Yathzee spelen want dat vindt je gewoon leuk <br>";
		}
	//If false
	} elseif (boolean == false) {
		if (integer >100) {
			echo "Je wilt geen Yathzee spelen want je wilt meer dan 100x met een dobbelsteen gooien <br>";
		} elseif (integer <= 100) {
			echo "Je wilt geen Yathzee spelen want je wilt minder dan 100x met een dobbelsteen gooien <br>";
		}
	}
//Monopoly
} elseif (string == "Monopoly") {
	if (boolean == true) {
		if (integer ==1) {
			echo "Je wilt Monopoly spelen want je hebt aan 1 spelletje genoeg <br>";
		} elseif (integer >1) {
			echo "Je wilt Monopoly spelen want je houd er van om iedereen blut te maken <br>";
		}
	//If false
	} elseif (boolean == false) {
		if (integer ==2 or integer >120) {
			echo "Je wilt Monopoly niet spelen want je hebt geen zin in een spel van 2 uur <br>";
		} else {
			echo "Je wilt Monopoly niet spelen want je houd niet van hotels <br>";
		}
	}
//Schaken
} elseif (string == "Schaken") {
	if (boolean == true) {
		if (integer ==2) {
			echo "Je wilt Schaken want je vind zwart en wit leuk <br>";
		} elseif (integer <>2) {
			echo "Je wilt Schaken want je denkt slimmer dan mij te zijn <br>";
		}
	//If false
	} elseif (boolean == false) {
		if (integer ==-1) {
			echo "Je wilt echt niet Schaken <br>";
		} else {
			echo "Je wilt gewoon niet Schaken <br>";
		}
	}
}
?>