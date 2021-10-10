<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into students values('','$id','$name','$address')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>