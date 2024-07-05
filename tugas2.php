<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Data Registrasi</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $pendidikan = $_POST['pendidikan'];
        
        echo "<p>Nama: $nama</p>";
        echo "<p>Alamat: $alamat</p>";
        echo "<p>Tempat Lahir: $tempat_lahir</p>";
        echo "<p>Tanggal Lahir: $tanggal_lahir</p>";
        echo "<p>Jenis Kelamin: $jenis_kelamin</p>";
        echo "<p>Pendidikan: $pendidikan</p>";
    } else {
        echo "<p>Data belum di-submit.</p>";
    }
    ?>
    <br>
    <a href="home.php">Back to Home</a>
</body>
</html>