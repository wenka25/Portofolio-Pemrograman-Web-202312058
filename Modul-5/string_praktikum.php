<?php
$kalimat = "STITEK Bontang adalah kampus IT terbaik";

// Menampilkan kalimat asli
echo "Kalimat asli: " . $kalimat . "<br><br>";

// Menggunakan strtoupper() untuk mengubah semua teks menjadi huruf kapital
$kalimat_kapital = strtoupper($kalimat);

// Menampilkan hasil setelah diubah ke huruf kapital
echo "Kalimat kapital: " . $kalimat_kapital . "<br><br>";

// Tetap mempertahankan fungsi-fungsi sebelumnya seperti diminta
echo "Panjang kalimat: " . strlen($kalimat_kapital) . "<br>";
echo "Jumlah kata: " . str_word_count($kalimat_kapital) . "<br>";
echo "Mengganti kata: " . str_replace("TERBAIK", "FAVORIT", $kalimat_kapital);
?>