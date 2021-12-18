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
    <h1 id="gudangdata" class="display-3"> Tabel Masukan Data Identitas Motor </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-strip table-hover table-xs-responsive">
            <a class="btn btn-primary" href="<?= base_url('/IdentitasMotor/createUser') ?>">Tambah Data</a>
            <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col">ID User</th>
                    <th scope="col">No Registrasi</th>
                    <th scope="col">Nama Pemilik</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No Rangka</th>
                    <th scope="col">No Mesin</th>
                    <th scope="col">Plat Nomer</th>
                    <th scope="col">Merk Motor</th>
                    <th scope="col">Type Motor</th>
                    <th scope="col">Model Motor</th>
                    <th scope="col">Tahun Pembuatan</th>
                    <th scope="col">Isi Silinder</th>
                    <th scope="col">Bahan Bakar</th>
                    <th scope="col">Warna TNKB</th>
                    <th scope="col">Tahun Registrasi</th>
                    <th scope="col">NO BPKB</th>
                    <th scope="col">Kode Lokasi</th>
                    <th scope="col">Masa Berlaku STNK</th>
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
                    foreach ($identitas_motor as $item) {
                    ?>
                        <!--query untuk menampilkan Data Identitas Motor-->
                        <tr>
                            <td><?= $item['ID'] ?></td>
                            <td><?= $item['NoRegistrasi'] ?></td>
                            <td><?= $item['NamaPemilik'] ?></td>
                            <td><?= $item['Alamat'] ?></td>
                            <td><?= $item['NoRangka'] ?></td>
                            <td><?= $item['NoMesin'] ?></td>
                            <td><?= $item['PlatNO'] ?></td>
                            <td><?= $item['Merk'] ?></td>
                            <td><?= $item['Type'] ?></td>
                            <td><?= $item['Model'] ?></td>
                            <td><?= $item['TahunPembuatan'] ?></td>
                            <td><?= $item['IsiSilinder'] ?></td>
                            <td><?= $item['BahanBakar'] ?></td>
                            <td><?= $item['WarnaTNKB'] ?></td>
                            <td><?= $item['TahunRegistrasi'] ?></td>
                            <td><?= $item['NoBPKB'] ?></td>
                            <td><?= $item['KodeLokasi'] ?></td>
                            <td><?= $item['MasaBerlakuSTNK'] ?></td>
                            <?php
                            if ($level == "pemilik") { ?>


                                <?php

                                $level = strtolower(session()->get('user')["level"]); ?> <td> <a class="btn btn-sm btn-outline-secondary" href="<?= base_url('/IdentitasMotor/editItem/' . $item['ID']) ?>">Edit</a> |
                                    <a href="<?= base_url('/IdentitasMotor/delete/' . $item['ID']) ?>" class="btn btn-sm btn-outline-danger">Hapus</a>
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