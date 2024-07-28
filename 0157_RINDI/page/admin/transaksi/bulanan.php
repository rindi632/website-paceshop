<!DOCTYPE html>
<html>
<head>
    <title>Laporan Transaksi Bulanan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script>
        function printReport() {
            window.print();
        }
    </script>
</head>
<body>

<div class="container">
    <h1>Laporan Transaksi Bulanan</h1>
    <form method="get" id="form-input">
        <label for="bulan">Pilih Bulan:</label>
        <input type="month" id="bulan" name="bulan" value="<?php echo isset($_GET['bulan']) ? $_GET['bulan'] : date('Y-m'); ?>">
        <button type="submit">Tampilkan</button>
    </form>
    <button onclick="printReport()">Cetak Laporan</button>

    <?php
    try {
        $conn = new PDO("mysql:host=localhost;dbname=paceshop", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $bulan = isset($_GET['bulan']) ? $_GET['bulan'] : date('Y-m');

        // Query to fetch monthly transactions
        $sql = "SELECT nama_produk, jumlah FROM transaksi_bulanan WHERE bulan = '$bulan'";
        $result = $conn->query($sql);

        echo "<h2>Transaksi pada Bulan $bulan</h2>";
        if ($result->rowCount() > 0) {
            echo "<div class='table-container'>";
            echo "<table class='styled-table'>";
            echo "<thead><tr><th>Nama Produk</th><th>Jumlah</th></tr></thead>";
            echo "<tbody>";
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr><td>" . htmlspecialchars($row["nama_produk"]) . "</td><td>" . htmlspecialchars($row["jumlah"]) . "</td></tr>";
            }
            echo "</tbody>";
            echo "</table>";
            echo "</div>";
        } else {
            echo "<p class='no-data'>Tidak ada transaksi pada bulan ini.</p>";
        }
    } catch (PDOException $e) {
        echo "Koneksi atau query bermasalah: " . $e->getMessage();
    }
    ?>

</div>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
}

form {
    text-align: center;
    margin-bottom: 20px;
}

form label {
    font-weight: bold;
    margin-right: 10px;
}

form input[type=month] {
    padding: 8px;
    font-size: 16px;
}

form button {
    padding: 10px 20px;
    font-size: 16px;
    background-color: #22bb6d;
    color: #fff;
    border: none;
    cursor: pointer;
    border-radius: 4px;
}

button {
    padding: 10px 20px;
    font-size: 16px;
    background-color: #007bff;
    color: #fff;
    border: none;
    cursor: pointer;
    border-radius: 4px;
    margin-left: 10px;
}

button:hover {
    background-color: #0056b3;
}

.styled-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.styled-table th, .styled-table td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

.styled-table th {
    background-color: #22bb6d;
    color: #fff;
}

.styled-table tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

.no-data {
    text-align: center;
    margin-top: 20px;
    color: #888;
}

.table-container {
    overflow-x: auto;
}

</style>
</body>
</html>
