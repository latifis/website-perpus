<?php

include("connect.php");

    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $penerbit = $_POST['penerbit'];
    $pengarang = $_POST['pengarang'];
    $tglbuat = $_POST['tglbuat'];
    $id_jenis = $_POST['id_jenis'];

    $sql = "UPDATE databuku SET judul='$judul', penerbit='$penerbit',  pengarang='$pengarang', tglbuat='$tglbuat', id_jenis='$id_jenis' WHERE id=$id";
    $query = mysqli_query($db, $sql);
   
    if( $query ) {
        header('Location: output.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }

?>