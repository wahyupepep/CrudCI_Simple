<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
</head>
<body>
    <h1>Selamat Datang di Dashboard Admin</h1>
    ini dashboard admin <?php echo $this->session->userdata('no'); ?>
    <br><br>
    <a href="<?php echo base_url()."index.php/dashbordadmin/logout"; ?>">Logout</a>
</body>
</html>