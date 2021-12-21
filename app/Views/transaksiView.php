<!DOCTYPE html>
<html lang="en">
<?php $level = strtolower(session()->get('user')["level"]); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>
    <!-- <div class="container"> -->
    <h1 id="gudangdata" class="display-3"> Tabel Transaksi Motor </h1>
    <div class="table-responsive">
        <table id="example" class="table table-bordered table-strip table-hover table-xs-responsive">
            <!-- <a class="btn btn-primary" href="<base_url('/Transaction/createUser') ?>">Tambah Data</a> -->
            <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col">ID Transaksi</th>
                    <th scope="col">Tanggal Transaksi</th>
                    <th scope="col">ID Customer</th>
                    <th scope="col">ID Kendaraan</th>
                    <th scope="col">Nama Pembeli</th>
                    <th scope="col">Nama Penjual</th>
                    <th scope="col">Kendaraan</th>
                    <th scope="col">Alamat Penjual</th>
                    <th scope="col">Harga Jual</th>
                    <th scope="col">Harga Jual Asli</th>
                    <?php
                    if ($level == "pemilik") { ?>

                        <!-- <th scope="col">Aksi</th> -->
                    <?php
                    }
                    ?>
                </tr>
            </thead>
            <tbody class="text-center">
                <div class="tabledata">
                    <?php
                    foreach ($transaksi_motor as $item) {
                        // var_dump($item);
                    ?>
                        <!--query untuk menampilkan Data Transaksi Motor-->
                        <tr>
                            <td><?= $item['IdTrsk'] ?></td>
                            <td><?= $item['Tgl_Trsk'] ?></td>
                            <td><?= $item['Id_cust'] ?></td>
                            <td><?= $item['Id_Kendaraan'] ?></td>
                            <td><?= $item['Nama_Cust'] ?></td>
                            <td><?= $item['NamaPemilik'] ?></td>
                            <td><?= "" . $item["Merk"] . " " . $item["Model"] . "(" . $item["TahunPembuatan"] . ")" ?></td>
                            <td><?= $item["Alamat"] ?></td>
                            <td><?= $item['Harga_Jual'] ?></td>
                            <td><?= $item['Harga_Jual_real'] ?></td>

                            <?php
                            if ($level == "pemilik") { ?>


                                <?php

                                // $level = strtolower(session()->get('user')["level"]); 

                                ?>
                                <!-- <td> <a class="btn btn-sm btn-outline-secondary" href="<base_url('/IdentitasMotor/editItem/' . $item['ID']) ?>">Edit</a> | -->
                                <!-- //     <a href="<base_url('/Transaction/delete/' . $item['ID']) ?>" class="btn btn-sm btn-outline-danger">Hapus</a> -->

                                <!-- </td> -->
            </tbody>
        </table>
    </div>
    <!-- </div> -->

<?php
                            }
?>
</tr>
<?php
                    } ?>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
</body>

</html>