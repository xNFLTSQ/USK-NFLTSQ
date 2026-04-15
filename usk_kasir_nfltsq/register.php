<?php include 'koneksi.php'; ?>
<form method="POST">
<input name="username" placeholder="Username">
<input name="password" type="password" placeholder="Password">
<select name="role">
<option value="petugas">Petugas</option>
<option value="admin">Admin</option>
</select>
<button name="daftar">Daftar</button>
</form>

<?php
if(isset($_POST['daftar'])){
$user=$_POST['username'];
$pass=md5($_POST['password']);
$role=$_POST['role'];
mysqli_query($conn,"INSERT INTO user (username,password,role) VALUES ('$user','$pass','$role')");
echo "Berhasil daftar";
}
?>
