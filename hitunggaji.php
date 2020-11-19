<?php
$nama       = $_POST['nama'];
$jk         = $_POST['jk'];
$status     = $_POST['status'];
$pegawai    = $_POST['pegawai'];
$gapok      = $_POST['gapok'];


if ($status == "Kawin") {
    $tunjanganKawin = 0.2 * $gapok;
} else {
    $tunjanganKawin = 0.1 * $gapok;
}

if ($pegawai == "Tetap") {
    $tunjanganTetap = 0.1 * $gapok;
    $pajak = 0.05 * $gapok;
}

$gaji_bersih = ($gapok + $tunjanganTetap + $tunjanganKawin) - $pajak;
echo "Nama  : " . $nama . "<br>";
echo "Jenis Kelamin : " . $jk . "<br>";
echo "Status : " . $status . "<br>";
echo "Status Kepegawaian : " . $pegawai . "<br>";
echo "Gaji Pokok : Rp " . number_format($gapok) . "<br>";
echo "Tunjangan Kawin : Rp " . number_format($tunjanganKawin) . "<br>";
echo "Tunjagan Tetap : Rp " . number_format($tunjanganTetap) . "<br>";
echo "Jumlah Pajak : Rp " . number_format($pajak) . "<br>";
echo "<hr>";
echo "Gaji bersih : Rp " . number_format($gaji_bersih);

// if ($status == "Kawin") {
//     $tunjangan = 0.2 * $gapok;
// } else {
//     $tunjangan = 0.1 * $gapok;
// }

// if ($pegawai == "Tetap") {
//     $tunjangan = 0.1 * $gapok - 0.5;
// }

// $gaji_bersih = $tunjangan + $gapok;
// echo $tunjangan;
// echo $gaji_bersih;
