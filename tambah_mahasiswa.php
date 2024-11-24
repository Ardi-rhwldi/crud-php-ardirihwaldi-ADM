<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form action="proses_tambah.php" method="POST">
        <table border="1">
            <tr>
                <td>
                    <label>Nama :</label>
                    <input type="text" name="nama" required><br>
                </td>
                <td>
                    <label>NIM :</label>
                    <input type="text" name="nim" required><br>
                </td>
                <td>
                    <label>Email :</label>
                    <input type="email" name="email" required><br>
                </td>
                <td>
                    <label>Nomor :</label>
                    <input type="text" name="nomor" required><br>
                </td>
                <td>
                    <label>Jurusan</label>
                    <input type="text" name="jurusan" required><br>
                </td>
            </tr>
        </table>
        <input type="submit" value="Tambah">
    </form>
</body>

</html>