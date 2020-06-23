<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit data UKM pemograman Web</title>
</head>
<body>
    <h1>Form Edit data mahasiswa UKM pemograman Web</h1>
    <form action="<?php echo base_url()."index.php/Ukmpemogramanweb/proses_edit_mhs/".$mhs['nim']; ?>" method="POST">
    <p>Nama : <input type="text" name="nama" value="<?php echo $mhs['nama']; ?>"></p>
    <p>Nim : <input type="text" name="nim" value="<?php echo $mhs['nim']; ?>"></p>
    <p>Alamat : <textarea name="alamat" ><?php echo $mhs['alamat']; ?></textarea></p>
    Program Studi :
    <select name="program_studi" id="program_studi">
        <option value="<?php echo $mhs['kode_prodi']; ?>"><?php echo $mhs['nama_prodi']; ?></option>
        <?php
            foreach($prodi as $dataini){
            
        ?> 
            <option value="<?php echo $dataini['kode_prodi']; ?>"><?php echo $dataini['nama_prodi']; ?></option>
        <?php } ?>
    </select>
    <br><br>
    <input type="submit" value="Submit">
    </form>
</body>
</html>