<?php
session_start();
if($_SESSION['role']!='admin'){ die("Akses ditolak"); }
include 'koneksi.php';
?>

<h2>Data Penjualan</h2>
<table border=1>
<?php
$data=mysqli_query($conn,"SELECT * FROM transaksi ORDER BY id DESC");
while($d=mysqli_fetch_array($data)){
echo "<tr><td>$d[nama_barang]</td><td>$d[total]</td><td>$d[tanggal]</td></tr>";
}
?>
</table>
