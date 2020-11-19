<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Gaji</title>
</head>

<body>
    <h2>Form Perhitungan gaji</h2>

    <form action="hitung.php" method="post">
        <fieldset>
            <legend>Form</legend>

            <table>
                <tr>
                    <p>

                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><input type="text" name="nama" id="nama"></td>

                    </p>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><select name="jenkel" id="jenkel">
                            <option value="">--Pilih--</option>
                            <option value="Laki-Laki">Laki Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Status Perkawinan</td>
                    <td>:</td>
                    <td><select name="status" id="">
                            <option value="">--Pilih--</option>
                            <option value="Kawin">Kawin</option>
                            <option value="Belum Kawin">Belum Kawin</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Status Kepegawaian </td>
                    <td>:</td>
                    <td><select name="kepegawaian" id="">
                            <option value="">--Pilih--</option>
                            <option value="tetap">tetap</option>
                            <option value="kontrak">kontrak</option>
                        </select></td>
                </tr>

                <tr>
                    <td>Gaji Pokok</td>
                    <td>:</td>
                    <td><input type="number" name="gapok"></td>
                </tr>

            </table>
            <button type="submit">Hitung Gaji</button>
        </fieldset>


    </form>
</body>

</html>