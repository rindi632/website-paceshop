<!DOCTYPE html>
<html>
<head>
    <title>Laporan Pelanggan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script>
        function printReport() {
            window.print();
        }
    </script>
</head>
<body>

<div class="container">
    <h1>Laporan Pelanggan</h1>
    <button onclick="printReport()">Cetak Laporan</button>

    <?php
    try {
        $conn = new PDO("mysql:host=localhost;dbname=paceshop", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT id, nama_customer, email, total_beli, alamat, kelamin FROM pelanggan";
        $result = $conn->query($sql);

        echo "<h2>Data Pelanggan</h2>";
        if ($result->rowCount() > 0) {
            echo "<div class='table-container'>";
            echo "<table class='styled-table'>";
            echo "<thead><tr><th>ID</th><th>Nama Customer</th><th>Email</th><th>Total Beli</th><th>Alamat</th><th>Kelamin</th></tr></thead>";
            echo "<tbody>";
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr><td>" . htmlspecialchars($row["id"]) . "</td><td>" . htmlspecialchars($row["nama_customer"]) . "</td><td>" . htmlspecialchars($row["email"]) . "</td><td>" . htmlspecialchars($row["total_beli"]) . "</td><td>" . htmlspecialchars($row["alamat"]) . "</td><td>" . htmlspecialchars($row["kelamin"] == 'L' ? 'Laki-laki' : 'Perempuan') . "</td></tr>";
            }
            echo "</tbody>";
            echo "</table>";
            echo "</div>";
        } else {
            echo "<p class='no-data'>Tidak ada data pelanggan.</p>";
        }
    } catch (Exception $e) {
        echo "Koneksi atau query bermasalah: " . $e->getMessage();
    }

    $conn = null;
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

    button {
        padding: 10px 20px;
        font-size: 16px;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
        border-radius: 4px;
        float: right;
        margin-top: -40px;
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
