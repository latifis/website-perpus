<?php

include("connect.php");

    $id = $_GET['id'];

    $sql = "DELETE FROM databuku WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: output.php');
    } else {
        die("gagal menghapus...");
    }

?>