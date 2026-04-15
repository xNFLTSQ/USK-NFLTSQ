<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
}
include 'koneksi.php';
?>

<h2>Kasir</h2>
<p>Login sebagai: <?= $_SESSION['username']; ?> (<?= $_SESSION['role']; ?>)</p>

<a href="index.php">Kasir</a> |
<a href="barang.php">Barang</a> |
<?php if ($_SESSION['role'] == 'admin'): ?>
<a href="transaksi.php">Data Penjualan</a> |
<?php endif; ?>
<a href="logout.php">Logoutt</a>
<hr>

<form action="proses.php" method="POST">
<select name="barang">
<?php
$data=mysqli_query($conn,"SELECT * FROM barang");
while($d=mysqli_fetch_array($data)){
echo "<option value='{$d['id']}'>{$d['nama_barang']} - Rp{$d['harga']}</option>";
}
?>
</select><br><br>
<input type="number" name="jumlah" placeholder="Jumlah" required><br><br>
<input type="number" name="bayar" placeholder="Bayar" required><br><br>
<button>Proses</button>
</form>
