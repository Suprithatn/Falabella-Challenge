<?php
	
	echo (challenge(1, 100));
	
	function challenge( $start, $end ){
		$returnString = "";
		for( $i = $start; $i<= $end; $i++ ){
			$value = $i;
			$value = check($value, 5, 3, 'Linianos');
			$value = check($value, 3, 1, 'Linio');
			$value = check($value, 5, 1, 'IT');
			$returnString.= $value . "<br>";
		}
		return $returnString;
	}
	
	function check( $num, $da, $db, $return ){
		if ( (is_numeric($num)) && ($num % $da == 0) && ($num % $db == 0) ){
			return $return;
		}
		return $num;
	}
?>