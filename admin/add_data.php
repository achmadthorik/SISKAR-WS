
<?php include "../koneksi.php";
date_default_timezone_set('Asia/Jakarta');

$asap = $_GET['asap'];
$api = $_GET['api'];
echo $asap,$api;

if ($asap == 1 && $api == 1) {
  $status = 'KEBAKARAN';
}else{
  $status = 'AMAN';
}
  
  $q = "INSERT INTO `api` (`id`, `asap`, `api`, `status`, `waktu`) VALUES (NULL, '$asap', '$api', '$status', CURRENT_TIMESTAMP);";
 // $hapus = "DELETE from api ORDER BY id asc LIMIT 3"
  $ck= mysqli_query($conn,$q);

 
