<?php
include 'koneksi.php';
$id=$_POST['barang'];
$jumlah=$_POST['jumlah'];
$bayar=$_POST['bayar'];

$data=mysqli_query($conn,"SELECT * FROM barang WHERE id='$id'");
$d=mysqli_fetch_array($data);

$total=$d['harga']*$jumlah;
$kembalian=$bayar-$total;

mysqli_query($conn,"INSERT INTO transaksi (nama_barang,harga,jumlah,total,bayar,kembalian) VALUES ('{$d['nama_barang']}','{$d['harga']}','$jumlah','$total','$bayar','$kembalian')");
?>

<h3>STRUK</h3>
<?= $d['nama_barang']; ?><br>
Total: <?= $total; ?><br>
Kembalian: <?= $kembalian; ?>
