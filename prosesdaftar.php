<?php

include("config.php");

if(isset($_POST['daftar'])){

    $id = $_POST['ID'];
    $nama = $_POST['Nama'];
    $nim = $_POST['NIM'];
    $prodi = $_POST['Prodi'];
    $angkatan = $_POST['Angkatan'];
    $nomorwa = $_POST['NomorWA'];

    $sql = "INSERT INTO mahasiswaukm (ID,nama, NIM, prodi, angkatan, nomorwa) VALUE ('id','$nama', '$email', '$prodi', '$jeniskelamin', '$provinsi')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: listdata.php?status=sukses');
    } else {
        header('Location: listdata.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>