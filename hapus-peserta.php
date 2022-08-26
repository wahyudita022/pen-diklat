<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM sekolah WHERE id='$id'";

if($connection->query($query)) {
    header("location: list-diklat.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>