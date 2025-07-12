<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Buku Tamu Digital STITEK Bontang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Buku Tamu Digital STITEK Bontang</h1>

        <?php
        $nama = $email = $pesan = "";
        $errors = [];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["nama"])) {
                $errors[] = "Nama Lengkap tidak boleh kosong.";
            } else {
                $nama = htmlspecialchars($_POST["nama"]);
            }

            if (empty($_POST["email"])) {
                $errors[] = "Alamat Email tidak boleh kosong.";
            } else {
                $email = htmlspecialchars($_POST["email"]);
            }

            if (empty($_POST["pesan"])) {
                $errors[] = "Pesan/Komentar tidak boleh kosong.";
            } else {
                $pesan = htmlspecialchars($_POST["pesan"]);
            }

            if (empty($errors)) {
                echo "<div class='success'>";
                echo "<h3>Pesan Anda telah terkirim!</h3>";
                echo "<p><strong>Nama:</strong> $nama</p>";
                echo "<p><strong>Email:</strong> $email</p>";
                echo "<p><strong>Pesan:</strong> $pesan</p>";
                echo "</div>";
            }
        }

        if (!empty($errors)) {
            echo "<div class='error'>";
            foreach ($errors as $e) {
                echo "<p>$e</p>";
            }
            echo "</div>";
        }
        ?>

        <form method="POST" action="">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" value="<?= htmlspecialchars($nama) ?>">

            <label for="email">Alamat Email:</label>
            <input type="email" id="email" name="email" value="<?= htmlspecialchars($email) ?>">

            <label for="pesan">Pesan / Komentar:</label>
            <textarea id="pesan" name="pesan" rows="4"><?= htmlspecialchars($pesan) ?></textarea>

            <button type="submit">Kirim Pesan</button>
        </form>
    </div>
</body>
</html>
