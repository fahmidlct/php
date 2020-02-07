<?php

function to_week($hari = '') {

  if ($hari < 1 || $hari == '') {
    $hasil =  false;
  }
			
  if ($hari < 7) {
    $hasil =  $hari . " hari";
  } else {
    $jml_hari = $hari % 7;
    $jml_minggu = $hari / 7;

    if ($jml_hari == 0) {
      $hasil =  floor($jml_minggu) . " minggu";
    } else {
      $hasil =  floor($jml_minggu) . " minggu dan " . $jml_hari . " hari";
    }      
  }
  return $hasil;
}


//cara penggunaan
echo to_week(27);

//hasil : 3 minggu 6 hari

?>