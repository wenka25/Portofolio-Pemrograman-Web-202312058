<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM produk WHERE id_produk=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
    <link rel="stylesheet" href="CSS/edit.css">
</head>
<body>
    <div class="form-container">
        <h2>Edit Produk</h2>
        <form action="proses_edit.php" method="post">
            <input type="hidden" name="id_produk" value="<?php echo $row['id_produk']; ?>">
            <div class="form-group">
                <label for="nama_produk">Nama Produk:</label>
                <input type="text" id="nama_produk" name="nama_produk" value="<?php echo $row['nama_produk']; ?>" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="number" id="harga" name="harga" value="<?php echo $row['harga']; ?>" required min="0">
            </div>
            <div class="form-group">
                <label for="stok">Stok:</label>
                <input type="number" id="stok" name="stok" value="<?php echo $row['stok']; ?>" required min="0">
            </div>
            <button type="submit" class="btn">Update</button>
        </form>
    </div>
</body>
</html>