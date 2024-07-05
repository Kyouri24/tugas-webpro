<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hasil Input Nilai Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Hasil Input Nilai Mahasiswa</h1>
    <?php
    if (isset($_POST['nama'], $_POST['nim'], $_POST['kelas'], $_POST['mata_kuliah'], $_POST['nilai'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $kelas = $_POST['kelas'];
        $mata_kuliah = $_POST['mata_kuliah'];
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        $grade = '';

        if ($nilai1 >= 0 && $nilai1 < 50) {
            $grade = "E";
        } elseif ($nilai1 >= 50 && $nilai1 < 60) {
            $grade = "D";
        } elseif ($nilai1 >= 60 && $nilai1 < 75) {
            $grade = "C";
        } elseif ($nilai1 >= 75 && $nilai1 < 85) {
            $grade = "B";
        } elseif ($nilai1 >= 85 && $nilai1 <= 100) {
            $grade = "A";
        } else {
            $grade = "Nilai Anda di luar jangkauan";
        }

        if ($nilai2 >= 0 && $nilai2 < 50) {
            $grade = "E";
        } elseif ($nilai2 >= 50 && $nilai2 < 60) {
            $grade = "D";
        } elseif ($nilai2 >= 60 && $nilai2 < 75) {
            $grade = "C";
        } elseif ($nilai2 >= 75 && $nilai2 < 85) {
            $grade = "B";
        } elseif ($nilai2 >= 85 && $nilai2 <= 100) {
            $grade = "A";
        } else {
            $grade = "Nilai Anda di luar jangkauan";
        }

        echo "<div class='alert alert-success' role='alert'>";
        echo "Nama: $nama<br>";
        echo "NIM: $nim<br>";
        echo "Kelas: $kelas<br>";
        echo "Mata Kuliah: $mata_kuliah<br>";
        echo "nilai1: $nilai1, dikonversi menjadi Grade: $grade";
        echo "nilai2: $nilai2, dikonversi menjadi Grade: $grade";
        echo "</div>";
    } else {
        echo "<div class='alert alert-warning' role='alert'>";
        echo "Silakan isi form dan submit data.";
        echo "</div>";
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>