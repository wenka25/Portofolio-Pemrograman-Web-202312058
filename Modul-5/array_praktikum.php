<?php
// Indexed array berisi nama teman sekelas
$teman_sekelas = [
    "pesal",
    "riski",
    "ojan"
];

// Menampilkan daftar nama menggunakan foreach
echo "<h3>Daftar Teman Sekelas:</h3>";
echo "<ul>";
foreach ($teman_sekelas as $teman) {
    echo "<li>$teman</li>";
}
echo "</ul>";
?>