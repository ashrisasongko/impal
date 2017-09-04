<?php
include "koneksi.php";

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$KodeBarang = $_REQUEST['KodeBarang'];
$sql		= "DELETE FROM barang where KodeBarang'". $KodeBarang . "'";

mysqli_query($koneksi, $sql);
echo "delete berhasil";
?>