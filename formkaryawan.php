<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Gaji Karyawan</title>
</head>

<body>
    <fieldset>
        <legend>Form Gaji</legend>
        <form action="hitunggaji.php" method="post">

            <p>
                <label for="">Nama :</label>
                <input type="text" name="nama">
            </p>
            <p>
                <label for="">Jenis Kelamin :</label>
                <select name="jk" id="">
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                </select>
            </p>
            <p>
                <label for="">Status Perkawinan :</label>
                <select name="status" id="">
                    <option value="Kawin">Kawin</option>
                    <option value="Jomblo">Jomblo</option>
                </select>
            </p>
            <p>
                <label for="">Status Kepegawaian :</label>
                <select name="pegawai" id="">
                    <option value="Tetap">Tetap</option>
                    <option value="Kontrak">Kontrak</option>
                </select>
            </p>
            <p>
                <label for="">Gaji Pokok :</label>
                <input type="number" name="gapok">
            </p>
            <button type="submit">Hitung Gaji</button>
        </form>
    </fieldset>

</body>

</html>