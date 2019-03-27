<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Goedemorgen.css">
</head>
<body>
	<img src="<?=$bg?>">
	<h1 class='title'> Goede <?=$Txt?></h1>
	<h1 class='title'> Het is nu <?=$time?></h1>
	
</body>
</html>

<?php
//tijdzone
	date_default_timezone_set('Europe/Amsterdam');
	$time = date("H:i");
	//Ochtend
	if ($time >= 6 && $time <12) {
		$Txt = "Morgen!";
		$bg = "morning.png";
		
	}
	//Middag
	if ($time >=12 && $time <18) {
		$Txt = "Middag!";
		$bg = "afternoon.png";
	}
	//Avond
	
	if ($time >=18) {
		$Txt = "Avond!";
		$bg = "evening.png";
	}
	//Nacht
	if ($time <6) {
		$Txt = "Nacht!";
		$bg = "night.png";
	}
		
?>
