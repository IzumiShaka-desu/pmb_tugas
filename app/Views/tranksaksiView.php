<!DOCTYPE html>
<html lang="en">
<?php $level = strtolower(session()->get('user')["level"]); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include 'header.php'; ?>
    <!-- <div class="container"> -->
    <h1 id="gudangdata" class="display-3"> Tabel Transaksi Motor </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-strip table-hover table-xs-responsive">
            <a class="btn btn-primary" href="<?= base_url('/Transaction/createUser') ?>">Tambah Data</a>
            <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col">ID Transaksi</th>
                    <th scope="col">Tanggal Transaksi</th>
                    <th scope="col">ID Customer</th>
                    <th scope="col">ID Kendaraank</th>
                    <th scope="col">Harga Jual</th>
                    <th scope="col">Harga Jual Asli</th>
                    <?php
                    if ($level == "pemilik") { ?>

                        <th scope="col">Aksi</th>
                    <?php
                    }
                    ?>
                </tr>
            </thead>
            <tbody class="text-center">
                <div class="tabledata">
                    <?php
                    foreach ($transaksi_motor as $item) {
                    ?>
                        <!--query untuk menampilkan Data Transaksi Motor-->
                        <tr>
                            <td><?= $item['IdTrsk'] ?></td>
                            <td><?= $item['Tgl_Trsk'] ?></td>
                            <td><?= $item['Id_cust'] ?></td>
                            <td><?= $item['Id_Kendaraan'] ?></td>
                            <td><?= $item['Harga_Jual'] ?></td>
                            <td><?= $item['Harga_Jual_real'] ?></td>
                            <?php
                            if ($level == "pemilik") { ?>


                                <?php

                                $level = strtolower(session()->get('user')["level"]); ?> <td> <a class="btn btn-sm btn-outline-secondary" href="<?= base_url('/IdentitasMotor/editItem/' . $item['ID']) ?>">Edit</a> |
                                    <a href="<?= base_url('/Transaction/delete/' . $item['ID']) ?>" class="btn btn-sm btn-outline-danger">Hapus</a>
                                </td>

                            <?php
                            }
                            ?>
                        </tr>
                    <?php
                    } ?>

            </tbody>
        </table>
    </div>
    <!-- </div> -->
    <?php include 'footer.php'; ?>

    <script>
    </script>
</body>

</html>
