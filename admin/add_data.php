
<?php include "../koneksi.php";
date_default_timezone_set('Asia/Jakarta');

$asap = $_GET['asap'];
$api = $_GET['api'];
echo $asap,$api;

if ($api == 1) {
  $status = 'KEBAKARAN';
}
elseif ($asap > 450 && $api == 0) {
$status = "TERDETEKSI ASAP";
}

/*
elseif ($asap > 200 && $asap < 5000) {
	$status
}*/





else{
  $status = 'AMAN';
}
  
  $q = "INSERT INTO `api` (`id`, `asap`, `api`, `status`, `waktu`) VALUES (NULL, '$asap', '$api', '$status', CURRENT_TIMESTAMP);";
 // $hapus = "DELETE from api ORDER BY id asc LIMIT 3"
  $ck= mysqli_query($conn,$q);

 
