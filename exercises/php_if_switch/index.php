<?php
$currentTime = time() + (7 * 24 * 60 * 60);
if($currentTime % 2 === 1){
    print(" {$currentTime}   is odd");
} else {
    print(" {$currentTime}   is even");
}

$dateString = date("m-d");
$message = "";
	switch($dateString){
		case "08-19":
			$message = 'PHP day';
			break;
		case "1-1":
			$message = 'happy new year';
			break;
		case "2-14":
			$message = 'happy valentine\'s day';
			break;
		case "7-4":
			$message = 'fireworks! yay!';
			break;
	}
	print("\n $message");

?>