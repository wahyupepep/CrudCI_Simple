<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKM Pemograman Web</title>
</head>
<body>
    <h1>Selmat Datang di UKM Pemograman Web</h1>
    <h3>Universitas Dian Nuswantoro</h3>
    <a href="<?php echo base_url()."index.php/Ukmpemogramanweb/fpendaftaran"; ?>">Tambah Data</a>
    <table border="1">
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kode Prodi</th>
            <th>Aksi</th>
        </tr>
        <?php
            foreach($dataMhs as $dataini){
        ?>  
            <tr>
            <td> <?php echo $dataini['nim'];?></td> 
            <td> <?php echo $dataini['nama'];?></td> 
            <td> <?php echo $dataini['alamat'];?></td> 
            <td> <?php echo $dataini['kode_prodi'];?></td>
            <td>
                <a href="<?php echo base_url()."index.php/Ukmpemogramanweb/edit_data_mhs/".$dataini['nim'];?>">EDIT</a> | 
                <a href="<?php echo base_url()."index.php/Ukmpemogramanweb/hapus_data_mhs/".$dataini['nim'];?>">HAPUS</a>
            </td> 
            </tr>
        <?php } ?>
    </table>

    <br><br>
                <h1>Login admin</h1>
                <form action="<?php echo base_url()."index.php/Ukmpemogramanweb/proses_login_admin" ?>" method="POST">
                    <p> Username : <input type="text" name="user"></p>
                    <p> Password : <input type="password" name="pass"></p>  

                    <input type="submit" value="Login">

                </form>
</body>
</html>