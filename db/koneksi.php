<?php
session_start();
ob_start();
$konek=mysqli_connect("localhost:3308","root","") or die('koneksigagal');
mysqli_select_db($konek,"db_absensi") or die("gagal");
?>
