<?php
session_start();
include 'koneksi.php';
$username=$_POST['username'];
$password=md5($_POST['password']);
$data=mysqli_query($conn,"SELECT * FROM user WHERE username='$username' AND password='$password'");
$d=mysqli_fetch_array($data);
if($d){
$_SESSION['username']=$d['username'];
$_SESSION['role']=$d['role'];
header("location:index.php");
}else{
echo "Login gagal";
}
?>
