<?php
$url = "http://neeko.fr/msws/database/get.php?key=";
$keys = array("test1", "test2", "test3");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="refresh" content="5">
	<title>Dashboard / Most Simple Web-Service</title>
</head>
<body>
	<h1>Dashboard</h1>
	
	<?php foreach ($keys as $key) { 
		$value = file_get_contents($url . $key);
		
		if ($value == "0") {
			echo "<img src='nok.svg' alt='$value' >";
		} else {
			echo "<img src='ok.svg' alt='$value' >";
		}

		//echo "<li>$value</li>";
	} ?>

</body>
</html>