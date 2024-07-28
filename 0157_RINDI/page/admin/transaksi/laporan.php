<!DOCTYPE html>
<html>
<head>
    <title>Laporan Stok</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script>
        function printReport() {
            window.print();
        }
    </script>
</head>
<body>

<div class="container">
    <h1>Laporan Stok Tersedia dan Terjual</h1>
    <button onclick="printReport()">Cetak Laporan</button>

    <?php
    // Including the connection setup file
    try {
        $conn = new PDO("mysql:host=localhost;dbname=paceshop", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        echo "Koneksi atau query bermasalah: " . $e->getMessage() . "<br>";
        die();
    }

    // SQL query to fetch the product stock details
    $sql = "SELECT p.nama_produk, p.stok_awal, p.stok_tersedia, 
            (p.stok_awal - p.stok_tersedia) AS terjual 
            FROM produk p";
    $stmt = $conn->query($sql);

    echo "<h2>Stok Produk</h2>";
    if ($stmt->rowCount() > 0) {
        echo "<div class='table-container'>";
        echo "<table class='styled-table'>";
        echo "<thead><tr><th>Nama Produk</th><th>Stok Awal</th><th>Stok Tersedia</th><th>Terjual</th></tr></thead>";
        echo "<tbody>";
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr><td>" . htmlspecialchars($row["nama_produk"]) . "</td><td>" . htmlspecialchars($row["stok_awal"]) . "</td><td>" . htmlspecialchars($row["stok_tersedia"]) . "</td><td>" . htmlspecialchars($row["terjual"]) . "</td></tr>";
        }
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
    } else {
        echo "<p class='no-data'>Tidak ada data stok.</p>";
    }

    // Closing the database connection
    $conn = null;
    ?>

</div>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
}

.header {
    background: #343a40;
    color: #f8f9fa;
    padding: 10px 0;
    text-align: center;
    font-size: 24px;
    border-bottom: 3px solid #22bb6d;
}

.container {
    padding: 20px;
    margin: auto;
    width: 80%;
    max-width: 800px;
    background-color: #ffffff;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="date"], input[type="text"], button {
    width: calc(100% - 22px);
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
}

button {
    background-color: #22bb6d;
    color: white;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #1e9a59;
}

.news {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.news th, .news td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

.news th {
    background-color: #22bb6d;
    color: white;
}

.news tr:nth-child(even) {
    background-color: #f2f2f2;
}

.news tr:hover {
    background-color: #ddd;
}

.signature {
    margin-top: 20px;
    text-align: center;
}

.signature h3 {
    margin-bottom: 5px;
}

.signature p {
    margin: 5px 0;
}

.tombol-hijau {
    display: inline-block;
    padding: 10px 20px;
    background-color: #22bb6d;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.tombol-hijau:hover {
    background-color: #1e9a59;
}
</style>

</body>
</html>
