<?php
include "koneksi.php";

$id = $_POST['deleteData'];

$sql = "delete from mahasiswa where NIM='$id'";
$hasil=mysqli_query($kon,$sql);
?>