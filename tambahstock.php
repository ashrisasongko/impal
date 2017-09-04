<?php
include "koneksi.php";

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$IDAdmin			=$_REQUEST['IDAdmin'];
$KodeBarang			=$_REQUEST['KodeBarang'];
$NamaBarang    		=$_REQUEST['NamaBarang'];
$JumlahStock	 	=$_REQUEST['JumlahStock'];

  
mysqli_query($koneksi,"INSERT INTO stock (IDAdmin, KodeBarang, NamaBarang, JumlahStock)
 VALUE ('$IDAdmin', '$KodeBarang','$NamaBarang','$JumlahStock')");
echo "Input berhasil";


?>