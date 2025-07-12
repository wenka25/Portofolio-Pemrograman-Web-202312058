<?php
function sapa($nama, $waktu) {
    $waktu = strtolower($waktu); // Konversi ke lowercase untuk konsistensi
    $pesan = "";
    
    switch ($waktu) {
        case 'pagi':
            $pesan = "Selamat Pagi";
            break;
        case 'siang':
            $pesan = "Selamat Siang";
            break;
        case 'sore':
            $pesan = "Selamat Sore";
            break;
        case 'malam':
            $pesan = "Selamat Malam";
            break;
        default:
            $pesan = "Halo";
    }
    
    return $pesan . ", " . $nama . "!";
}

// Contoh penggunaan
echo sapa("pesal", "Pagi");
echo "<br>";
echo sapa("riski", "Malam");
echo "<br>";
echo sapa("ojan", "Siang");
?>