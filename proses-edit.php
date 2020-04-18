<?php

$connect = mysqli_connect("localhost","root","","siperpus");

session_start();

if(isset($_POST["btnPinjam"])){
$id=$_POST["id_anggota"];
$nama=$_POST["nama"];
$telp=$_POST["telp"];
$kelas=$_POST["kelas"];
$username=$_POST["username"];
$password=$_POST["password"];
$query=mysqli_query($connect,"UPDATE anggota SET nama='$nama',telp='$telp',kelas='$kelas',username='$username',password='$password' where id_anggota='$id' ");

if(isset($query)){
    header("location : index.php");
    exit;
}
else{
    header("location : form-edit.php");
    exit;
}
}
?>