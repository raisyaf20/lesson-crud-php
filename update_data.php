<?php
include('conection.php');
$id_siswa     = $_POST['id_siswa'];
$nisn         = $_POST['nisn'];
$name = $_POST['nm'];
$alamat       = $_POST['alamat'];

$query = "UPDATE siswa SET nisn = '$nisn', full_name = '$name', addres = '$alamat' WHERE id_siswa = '$id_siswa'";

if ($conn->query($query)) {
    header("location: index.php");
} else {
    echo "Data Gagal Diupate!";
}
