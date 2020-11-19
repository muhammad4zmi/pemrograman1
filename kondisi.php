<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Kondisi</title>
</head>

<body>
    <form action="" method="POST">


        <p>
            <label>Input Nilai:</label>
            <input type="text" name="nilai" placeholder="masukkan nilai..." />
        </p>
        <!-- <p>
                <label>Keterangan:</label>
                <input type="text" name="keterangan" value="<?= $keterangan; ?>" />
            </p> -->

        <p>
            <input type="submit" value="Proses" />
        </p>

    </form>

</body>

</html>


<?php
$nilai = $_POST['nilai'];

if ($nilai >= 80) {
    echo $keterangan = "Keterangan Grade = A";
} elseif ($nilai >= 70) {
    echo $keterangan = "Keterangan Grade = B";
} elseif ($nilai >= 60) {
    echo $keterangan = "Keterangan Grade = C";
} else {
    echo $keterangan = "Anda Gagal!";
}
