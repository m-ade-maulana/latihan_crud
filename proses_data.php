<?php

include "koneksi.php";

$id = rand(111111, 999999);

$nama = $_POST['nama_ptk'];
$nuptk = $_POST['nuptk'];
$jabatan = $_POST['jabatan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$status_ptk = $_POST['status_ptk'];
$tmt = $_POST['tmt'];
$ijazah_terakhir = $_POST['ijazah_terakhir'];
$tahun_lulus = $_POST['tahun_lulus'];
$mata_pelajaran = $_POST['mata_pelajaran'];

$query = "INSERT INTO data_guru SET id='$id', nama_ptk='$nama', nuptk='$nuptk', jabatan='$jabatan', jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', status_ptk='$status_ptk', tmt='$tmt', ijazah_terakhir='$ijazah_terakhir', tahun_lulus='$tahun_lulus', mata_pelajaran='$mata_pelajaran'";

$execution = mysqli_query($koneksi, $query);

if ($execution) {
    echo "Data Berhasil Masuk";
} else {
    echo "Data Gagal Masuk";
}
