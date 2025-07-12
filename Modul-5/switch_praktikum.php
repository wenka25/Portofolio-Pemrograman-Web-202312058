<?php
$ukuran_baju = "L"; // Anda bisa mengganti nilai ini dengan "S", "L", "XL", atau lainnya

switch ($ukuran_baju) {
    case "S":
        echo "Ukuran baju: Small (Kecil)";
        break;
    case "M":
        echo "Ukuran baju: Medium (Sedang)";
        break;
    case "L":
        echo "Ukuran baju: Large (Besar)";
        break;
    case "XL":
        echo "Ukuran baju: Extra Large (Sangat Besar)";
        break;
    default:
        echo "Ukuran baju tidak tersedia";
}
?>