<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <title>Galeri Motor</title>
</head>

<body>
  <!-- Menu -->
  <div class="row">
    <?php
    foreach ($identitas_motor as $item) {
    ?>
      <div class="col-md-3 mt-4">
        <div class="card brder-dark">
          <img src="<?php echo $item['Gambar_Motor'] ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title font-weight-bold"><?php echo $item['Merk'] . ' ' . $item['Model'] . ' ' . $item['IsiSilinder'] ?></h5>
            <p class="small text-muted mb-0"><?php echo $item['TahunPembuatan']; ?></p>
            <p></p>
            <label class="card-text harga"><strong>Harga Jual Rp.</strong> <?php echo number_format($item['Harga_Jual']); ?></label><br>
            <!-- <div class="row" style="padding: 0px 100px 0px 100px;"> -->
            <center><a type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">Beli Motor</a></center>
            <!-- </div> -->
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">Lokasi</span></p>
              <div class="badge badge-danger px-3 rounded-pill font-weight-normal"><?php echo $item['Alamat']; ?></div>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
  <!-- Akhir Galeri Motor -->

</body>

</html>