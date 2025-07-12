<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Produk</title>
    <link rel="stylesheet" href="CSS/index.css">
</head>
<body>
    <h1>Manajemen Produk Toko Online</h1>
    <a href="tambah.php" class="btn btn-tambah">Tambah Produk Baru</a>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>ID Produk</th>
                <th>Nama Produk</th>
                <th>Harga (Rp)</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $sql = "SELECT * FROM produk";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row['id_produk']."</td>";
                    echo "<td>".$row['nama_produk']."</td>";
                    echo "<td>".number_format($row['harga'], 0, ',', '.')."</td>";
                    echo "<td>".$row['stok']."</td>";
                    echo "<td>
                            <a href='edit.php?id=".$row['id_produk']."' class='btn btn-edit'>Edit</a>
                            <a href='hapus.php?id=".$row['id_produk']."' class='btn btn-hapus' onclick='return confirm(\"Yakin ingin menghapus?\")'>Hapus</a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Tidak ada data produk</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>