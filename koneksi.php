<?php
$host="localhost"; //host server
$user="root"; //user login phpMyAdmin
$pass=""; //pass login phpMyAdmin
$db="cmart"; //nama database
$koneksi=mysqli_connect("$host","$user","$pass","$db");
mysqli_select_db($koneksi,"$db");
?>