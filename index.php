<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Converter</title>
	</head>
	<body>
		<form method="post">
			Enter Units to Convert <input type="text" name="units">
			<select name="option">
				<option value="kmToMiles">Kilometers to Miles</option>
				<option value="milesToKm">Miles to Kilometers</option>
				<option value="celsiusToFahrenheit">Celsius to Fahrenheit</option>
				<option value="fahrenheitToCelsius">Fahrenheit to Celsius</option>
				<option value="stonesToPounds">Stones to Pounds</option>
				<option value="poundsToStones">Pounds to Stones</option>
				<option value="poundsToKg">Pounds to Kilograms</option>
				<option value="kgToPounds">Kilograms to Pounds</option>
				<option value="stonesToKg">Stones to Kilograms</option>
				<option value="kgToStones">Kilograms to Stones</option>
			</select>
			<br>
			<button formaction="result.php" class="button">Test</button>
		</form>
	</body>
</html>