<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran UKM Pemograman Web</title>
</head>
<body>
    <form action="<?php echo base_url()."index.php/Ukmpemogramanweb/tambah_data_mahasiswa";?>" method="POST">
        <p>Nama : <input type="text" name="nama"></p>
        <p>Nim : <input type="text" name="nim"></p>
        <p>Alamat : <textarea name="alamat"></textarea></p>
        <select name="program_studi" id="program_studi">
        <option value="">Pilih Program Studi</option>
        <?php
            foreach ($dataProdi as $dataini){
            ?>
                <option value="<?php echo $dataini['kode_prodi'];?>"><?php echo $dataini['nama_prodi'];?></option>
            <?php } ?>
        </select>
        
        <input type="submit">
    </form>
</body>
</html>