<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembuat Segitiga Bintang 4 Sisi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Form Segitiga Bintang (4 Arah)</h2>
    <form method="POST" action="">
        <label for="tinggi">Masukkan Tinggi Segitiga (1 - 20):</label>
        <input type="number" id="tinggi" name="tinggi" required>
        <input type="submit" value="Tampilkan Segitiga">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tinggi = $_POST['tinggi'];

        if (filter_var($tinggi, FILTER_VALIDATE_INT) && $tinggi >= 1 && $tinggi <= 20) {
            echo "<h3>Hasil Segitiga (Tinggi: $tinggi)</h3>";

            // 1. SEGITIGA KE ATAS (Piramida Biasa)
            echo "<h4>1. Segitiga Ke Atas</h4><pre>";
            for ($i = 1; $i <= $tinggi; $i++) {
                for ($j = 0; $j < ($tinggi - $i); $j++) echo "  ";
                for ($k = 0; $k < (2 * $i - 1); $k++) echo "* ";
                echo "\n";
            }
            echo "</pre>";

            // 2. SEGITIGA KE BAWAH (Piramida Terbalik)
            echo "<h4>2. Segitiga Ke Bawah</h4><pre>";
            for ($i = $tinggi; $i >= 1; $i--) {
                for ($j = 0; $j < ($tinggi - $i); $j++) echo "  ";
                for ($k = 0; $k < (2 * $i - 1); $k++) echo "* ";
                echo "\n";
            }
            echo "</pre>";

            // 3. SEGITIGA SAMPING KANAN (Menunjuk ke Kanan)
            echo "<h4>3. Segitiga Samping Kanan</h4><pre>";
            // Bagian atas
            for ($i = 1; $i <= $tinggi; $i++) {
                for ($j = 0; $j < $i; $j++) echo "* ";
                echo "\n";
            }
            // Bagian bawah
            for ($i = $tinggi - 1; $i >= 1; $i--) {
                for ($j = 0; $j < $i; $j++) echo "* ";
                echo "\n";
            }
            echo "</pre>";

            // 4. SEGITIGA SAMPING KIRI (Menunjuk ke Kiri)
            echo "<h4>4. Segitiga Samping Kiri</h4><pre>";
            // Bagian atas
            for ($i = 1; $i <= $tinggi; $i++) {
                for ($j = 0; $j < ($tinggi - $i); $j++) echo "  ";
                for ($k = 0; $k < $i; $k++) echo "* ";
                echo "\n";
            }
            // Bagian bawah
            for ($i = $tinggi - 1; $i >= 1; $i--) {
                for ($j = 0; $j < ($tinggi - $i); $j++) echo "  ";
                for ($k = 0; $k < $i; $k++) echo "* ";
                echo "\n";
            }
            echo "</pre>";

        } else {
            echo "<p class='error'>Masukan tidak valid! Harap masukkan bilangan bulat antara 1 sampai 20.</p>";
        }
    }
    ?>
</div>

</body>
</html>