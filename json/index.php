<?php

//membuat format json dengan array
// contoh yang ingin dibuat : {"status":1,"pegawai":[{"nik":0},{"nik":1},{"nik":2},{"nik":3},{"nik":4},{"nik":5},{"nik":6},{"nik":7},{"nik":8},{"nik":9}]}

$data['status'] = 1;
		
for ($i = 0; $i <10; $i++) {
	$data['pegawai']['nik'] = $i;
}
		
//echo json_encode($data);

//hasil {"status":1,"pegawai":{"nik":9}}
//hanya menampilkan nik terakhir


//gunakan cara ini
$data['status'] = 1;
		
for ($i = 0; $i <10; $i++) {
	//jangan lupa tambahkan indeks [$i]
	$data['pegawai'][$i]['nik'] = $i;
}

$arr = json_encode($data);
		
echo $arr;

foreach ($data['pegawai'] as $k => $v) {
	echo  $v['nik'] . "<br>";
}



//hasil {"status":1,"pegawai":[{"nik":0},{"nik":1},{"nik":2},{"nik":3},{"nik":4},{"nik":5},{"nik":6},{"nik":7},{"nik":8},{"nik":9}]}