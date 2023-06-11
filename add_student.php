<?php
include('conection.php');

$nisn = $_POST['nisn'];
$name = $_POST['nama'];
$alamat = $_POST['adrres'];

$query = "INSERT INTO siswa (nisn,full_name,addres) VALUES ('$nisn', '$name', '$alamat')";

if ($conn->query($query)) {
    header("location: index.php");
} else {
    echo "Failed to save";
}
