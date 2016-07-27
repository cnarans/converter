<?php 
	include 'Converter.php'; 
	$con = new Converter;
	$option = $_POST["option"];
	$units = $_POST["units"];
	$result = $con->decider($option, $units);
	$option = explode("To", $option);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Converter</title>
	</head>
	<body>
		<p><?php echo $units . " " . $option[0] . " is " . $result . " " . $option[1]; ?></p> 
	</body>
</html>