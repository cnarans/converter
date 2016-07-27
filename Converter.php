<?php

class Converter{

	function __construct(){}

	function milesToKm($miles){
		return $miles*1.60934;
	}

	function kmToMiles($km){
		return $km/1.60934;
	}

	function fahrenheitToCelsius($fahrenheit){
		return ($farhenheit-32)/1.8;
	}

	function celsiusToFahrenheit($celsius){
		return $celsius*1.8+32;
	}

	function poundsToStones($pounds){
		return $pounds/14;
	}

	function stonesToPounds($stones){
		return $stones*14;
	}

	function poundsToKg($pounds){
		return $pounds/2.20462;
	}

	function kgToPounds($kg){
		return $kg*2.20462;
	}

	function stonesToKg($stones){
		return $stones*6.35029;
	}

	function kgToStones($kg){
		return $kg/6.35029;
	}

	function decider($option, $units){
		if($option=="milesToKm"){
			return $this->milesToKm($units);
		}
		elseif($option=="kmToMiles"){
			return $this->kmToMiles($units);
		}
		elseif($option=="fahrenheitToCelsius"){
			return $this->fahrenheitToCelsius($units);
		}
		elseif($option=="celsiusToFahrenheit"){
			return $this->celsiusToFahrenheit($units);
		}
		elseif($option=="poundsToStones"){
			return $this->poundsToStones($units);
		}
		elseif($option=="stonesToPounds"){
			return $this->stonesToPounds($units);
		}
		elseif($option=="poundsToKg"){
			return $this->poundsToKg($units);
		}
		elseif($option=="kgToPounds"){
			return $this->kgToPounds($units);
		}
		elseif($option=="stonesToKg"){
			return $this->stonesToKg($units);
		}
		elseif($option=="kgToStones"){
			return $this->kgToStones($units);
		}
	}

}

?>