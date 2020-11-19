<?php
$nama   = $_POST['nama'];
$jenkel = $_POST['jenkel'];
$status = $_POST['status'];
$kepegawaian = $_POST['kepegawaian'];
$gapok  = $_POST['gapok'];

if (($status == "Kawin") && ($kepegawaian == "tetap")) {
    $tunjangan = $gapok * 0.20;
} else {
    $tunjangan = $gapok * 0.1;
}

$gaji = $gapok + $tunjangan;

echo "Nama : " . $nama . "<br>";
echo "Jenis Kelamin : " . $jenkel . "<br>";
echo "Status : " . $status . "<br>";
echo "Status Kepegawaian : " . $kepegawaian . "<br>";
echo "Jumlah Tunjangan : " . number_format($tunjangan) . "<br>";
echo "Total Gaji : " . number_format($gaji);
