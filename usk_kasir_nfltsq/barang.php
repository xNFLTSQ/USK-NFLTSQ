<?php include 'koneksi.php'; ?>
<form method="POST">
<input name="nama">
<input name="harga">
<input name="stok">
<button name="tambah">Tambah</button>
</form>

<?php
if(isset($_POST['tambah'])){
mysqli_query($conn,"INSERT INTO barang (nama_barang,harga,stok) VALUES ('$_POST[nama]','$_POST[harga]','$_POST[stok]')");
}
?>

<table border=1>
<?php
$data=mysqli_query($conn,"SELECT * FROM barang");
while($d=mysqli_fetch_array($data)){
echo "<tr><td>$d[nama_barang]</td><td>$d[harga]</td><td>$d[stok]</td></tr>";
}
?>
</table>
