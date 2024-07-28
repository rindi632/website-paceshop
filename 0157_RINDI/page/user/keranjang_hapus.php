<?php
include('lib/koneksi.php');

		$id = $_GET['id'];
		try {
			$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$pdo = $conn->prepare("DELETE FROM tbl_keranjang WHERE id = :id");
			$deletedata = array(':id' => $id);
			$pdo->execute($deletedata);
      echo "<script>alert('Barang dalam keranjang berhasil dihapus');window.location='?page=beranda'</script>";
		} catch (PDOexception $e) {
			print "hapus berita gagal: " . $e->getMessage() . "<br/>";
		   die();
		}
?>
