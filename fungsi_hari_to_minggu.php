<?php

function to_week($hari = '') {

  if ($hari < 1 || $hari == '') {
    return false;
  }
			
  if ($hari < 7) {
    return $hari . " hari";
  } else {
    $jml_hari = $hari % 7;
    $jml_minggu = $hari / 7;

    if ($jml_hari == 0) {
      return floor($jml_minggu) . " minggu";
    } else {
      return floor($jml_minggu) . " minggu dan " . $jml_hari . " hari";
    }      
  }
  
}

?>