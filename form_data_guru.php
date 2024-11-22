<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="proses_data.php" method="post">
        <label for="nama_ptk">Nama PTK</label>
        <input type="text" name="nama_ptk" id="nama_ptk" required>

        <br><br>

        <label for="nuptk">NUPTK</label>
        <input type="num" name="nuptk" id="nuptk">

        <br><br>

        <label for="jabatan">Jabatan</label>
        <input type="text" name="jabatan" id="jabatan" require>

        <br><br>

        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select name="jenis_kelamin" id="jenis_kelamin">
            <option value="laki-laki">Laki - Laki</option>
            <option value="perempuan">Perempuan</option>
        </select>

        <br><br>

        <label for="tempat_lahir">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" id="tempat_lahir" require>

        <br><br>

        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir" require>

        <br><br>

        <label for="status_ptk">Status PTK</label>
        <input type="text" name="status_ptk" id="status_ptk" require>

        <br><br>

        <label for="tmt">TMT</label>
        <input type="num" name="tmt" id="tmt" require>

        <br><br>

        <label for="ijazah_terakhir">Ijazah Terakhir</label>
        <input type="text" name="ijazah_terakhir" id="ijazah_terakhir" require>

        <br><br>

        <label for="tahun_lulus">Tahun Lulus</label>
        <input type="num" name="tahun_lulus" id="tahun_lulus" require>

        <br><br>

        <label for="mata_pelajaran">Mata Pelajaran</label>
        <input type="text" name="mata_pelajaran" id="mata_pelajaran" require>

        <br><br>

        <button type="submit">Isi Data</button>
    </form>

</body>

</html>