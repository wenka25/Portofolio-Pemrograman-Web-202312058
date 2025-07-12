<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk Baru</title>
    <link rel="stylesheet" href="CSS/tambah.css">
</head>
<body>
    <div class="form-container">
        <h2>Tambah Produk Baru</h2>
        <form action="proses_tambah.php" method="post">
            <div class="form-group">
                <label for="nama_produk">Nama Produk:</label>
                <input type="text" id="nama_produk" name="nama_produk" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="number" id="harga" name="harga" required min="0">
            </div>
            <div class="form-group">
                <label for="stok">Stok:</label>
                <input type="number" id="stok" name="stok" required min="0">
            </div>
            <button type="submit" class="btn">Simpan</button>
        </form>
    </div>
</body>
</html>