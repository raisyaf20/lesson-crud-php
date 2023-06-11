<?php
include('conection.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM siswa WHERE id_siswa = '$id'";

if ($conn->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}
