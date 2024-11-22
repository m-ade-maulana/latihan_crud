<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "sekolah";

$koneksi = mysqli_connect($hostname, $username, $password, $database);

if (!$koneksi) {
    echo "<script>alert('Koneksi gagal')</script>";
}
