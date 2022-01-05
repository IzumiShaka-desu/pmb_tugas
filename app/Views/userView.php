<!DOCTYPE html>
<html lang="en">
<?php

$level = strtolower(session()->get('user')["level"]); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Halaman untuk Menampilkan Data User-->
    <title>Halaman User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">

    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet"> -->
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="top-wrapper">
        <div class="container">
            <h1 id="gudangdata" class="display-3"> Tabel User </h1>
            <!--<form action="tambah_data.php" method="POST">-->
            <div class="table-responsive">
                <table id="example" class="table table-bordered table-strip table-hover table-xs-responsive">

                    <?php
                    if ($level == "pemilik") { ?>
                        <a class="btn btn-primary" href="<?= base_url('/user/createUser') ?>">Tambah</a>
                    <?php
                    }
                    ?>
                    <div class="table-responsive" style="margin-top: 10px;">

                        <thead class="thead-dark">
                            <tr class="text-center">
                                <th scope="col">ID User</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Hak Akses</th>
                                <th scope="col">Manager</th>
                                <th scope="col">Tanggal Buat</th>
                                <?php
                                if ($level == "pemilik") { ?>
                                    <th scope="col">Aksi</th><?php } ?>
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
                                        <?php
                                        if ($level == "pemilik") { ?>
                                            <td> <a class="btn btn-sm btn-outline-secondary" href="<?= base_url('/user/editUser/' . $item['IDUser']) ?>">Edit</a> |
                                                <a href="<?= base_url('user/delete/' . $item['IDUser']) ?>" class="btn btn-sm btn-outline-danger">Hapus</a>
                                            </td><?php } ?>
                                    </tr>
                                <?php
                                } ?>
                        </tbody>
                </table>
            </div>
            <?php include 'footer.php'; ?>
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>

            <script>
                $(document).ready(function() {
                    $('#example').DataTable();
                });
            </script>
            <script>
            </script>

</body>

</html>