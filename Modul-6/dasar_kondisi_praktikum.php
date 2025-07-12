<!DOCTYPE html>
<html>
<head>
    <title>Latihan Kondisi PHP</title>
</head>
<body>
    <h1>Cek Nilai</h1>
    <?php
    $nilai = 78;
    echo "<p>Nilai Anda: $nilai</p>";

    if ($nilai > 90) {
        echo "<p style='color:green;'>Sangat Baik</p>";
        echo "<p style='color:green;'>Selamat, Anda Lulus!</p>";
    } elseif ($nilai > 80) {
        echo "<p style='color:blue;'>Baik</p>";
        echo "<p style='color:green;'>Selamat, Anda Lulus!</p>";
    } elseif ($nilai > 70) {
        echo "<p style='color:orange;'>Cukup</p>";
        echo "<p style='color:green;'>Selamat, Anda Lulus!</p>";
    } elseif ($nilai >= 75) {
        echo "<p style='color:green;'>Selamat, Anda Lulus!</p>";
    } else {
        echo "<p style='color:red;'>Maaf, Anda perlu belajar lagi.</p>";
    }
    ?>
</body>
</html>