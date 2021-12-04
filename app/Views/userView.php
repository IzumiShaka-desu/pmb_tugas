<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Halaman untuk Menampilkan Data User-->
    <title>Halaman User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'navbar.php';?>
    <div class="top-wrapper">
    <div class="container">
    <h1 id="gudangdata" class="display-3"> Tabel User </h1>
    <!--<form action="tambah_data.php" method="POST">-->
<table class="table table-hover">
    <a class="btn btn-primary" href="<?= base_url('/userController/createUser') ?>">Tambah</a>
    <thead class="thead-dark">
    <tr class="text-center">
        <th scope="col">ID User</th>
        <th scope="col">Nama</th>
        <th scope="col">Hak Akses</th>
        <th scope="col">Manager</th>
        <th scope="col">Tanggal Buat</th>
        <th scope="col">Aksi</th>
    </tr>
</thead>
<tbody class="text-center">
<div class="tabledata">
<?php
    foreach ($user as $item) {
?>
<!--query untuk menampilkan Data User-->
    <tr>
    <td><?= $item['IDUser'] ?></td>
    <td><?= $item['Nama'] ?></td>
    <td><?= $item['Hak_Akses'] ?></td>
    <td><?= $item['Manager'] ?></td>
    <td><?= $item['Create_Date'] ?></td>
    <!--Tombol Edit dan hapus barang -->  
      <td>  <a class="btn btn-sm btn-outline-secondary" href="#">Edit</a> |
      <a href="<?= base_url('userController/delete/'.$item['IDUser']) ?>"class="btn btn-sm btn-outline-danger">Hapus</a>
    </tr>
    <?php   
    } ?>
</tbody>
</table>
<script>
</script>
</body>
</html>