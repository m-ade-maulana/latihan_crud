<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <a href="form_data_guru.php">Form Data Guru</a>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NUPTK</th>
                <th>Jabatan</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Status PTK</th>
                <th>TMT</th>
                <th>Ijazah Terakhir</th>
                <th>Tahun Lulus</th>
                <th>Mata Pelajaran</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";

            $query = "SELECT * FROM data_guru";

            $execution = mysqli_query($koneksi, $query);

            if (mysqli_num_rows($execution) > 0) {
                $no = 1;
                foreach ($execution as $e) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $e['nama_ptk'] ?></td>
                        <td><?= $e['nuptk'] ?></td>
                        <td><?= $e['jabatan'] ?></td>
                        <td><?= $e['jenis_kelamin'] ?></td>
                        <td><?= $e['tempat_lahir'] ?></td>
                        <td><?= $e['tanggal_lahir'] ?></td>
                        <td><?= $e['status_ptk'] ?></td>
                        <td><?= $e['tmt'] ?></td>
                        <td><?= $e['ijazah_terakhir'] ?></td>
                        <td><?= $e['tahun_lulus'] ?></td>
                        <td><?= $e['mata_pelajaran'] ?></td>
                    </tr>
            <?php }
            }
            ?>
        </tbody>
    </table>
</body>

</html>