<?php

function to_week($hari = '') {
	if ($hari < 1 || $hari == '') {
		return false;
	}
			
	if ($hari < 7) {
		return $hari . " hari";
	} else {
		$a = $hari % 7;
		$b = $hari / 7;

		if ($a == 0) {
			return floor($b) . " minggu";
		} else {
			return floor($b) . " minggu dan " . $a . " hari";
		}      
	}
}

?>