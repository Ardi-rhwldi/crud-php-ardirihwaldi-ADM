<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM mahasiswa WHERE id=$id";
$result = $conn -> query($sql);
$data = $result -> fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Edit Data Mahasiswa</h2>
    <FORM action="proses_edit.php" method="POST">
        <table border="1">
            <tr>
                <td>
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    Nama: <input type="text" name="nama" value="<?php echo $data['nama']; ?>"><br>
                </td>
                <td>
                    NIM: <input type="text" name="nim" value="<?php echo $data['nim']; ?>"><br>
                </td>
                <td>
                    Email: <input type="text" name="email" value="<?php echo $data['email']; ?>"><br>
                </td>
                <td>
                    Nomor: <input type="text" name="nomor" value="<?php echo $data['nomor']; ?>"><br>
                </td>
                <td>   
                    Jurusan: <input type="text" name="jurusan" value="<?php echo $data['jurusan']; ?>"><br>
                </td>
            </tr>
        </table>
        <input type="submit" value="Simpan">
    </FORM>
</body>
</html>
