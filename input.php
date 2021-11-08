<?php

include("connect.php");

    $judul = $_POST['judul'];
    $penerbit = $_POST['penerbit'];
    $pengarang = $_POST['pengarang'];
    $tglbuat = $_POST['tglbuat'];
    $id_jenis = $_POST['id_jenis'];

    $query = mysqli_query($db, "insert into databuku values('', '$judul', '$penerbit', '$pengarang','$tglbuat', '$id_jenis')");

    if ($query) {
	header("location:output.php");
        } 
    else {
	echo "Proses input gagal!";
        }
?>