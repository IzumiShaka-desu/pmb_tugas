<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Identitas Motor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    $data = ($item[0]);
    //  include 'navbar.php'; 
    ?>
    <div class="container">
        <h3> Silahkan Masukkan Data Identitas Motor</h3>
    </div>
    <table>
        <tr>
            <form action="<?= base_url(); ?>/IdentitasMotor/update/<?= $data["ID"] ?>" method="post">
                <div class="form-group row">
                    <label for="NamaPemilik">Nama Pemilik</label>
                    <div class="col-sm-12">
                        <input id="NamaPemilik" name="NamaPemilik" type="text" value="<?= $data["NamaPemilik"] ?>" required=" required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="noreg">Nomor Registrasi</label>
                    <div class="col-sm-12">
                        <input id="noreg" name="noreg" type="text" value="<?= $data["NoRegistrasi"] ?>" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Alamat">Alamat</label>
                    <div class="col-sm-12">
                        <input id="Alamat" name="Alamat" type="text" value="<?= $data["Alamat"] ?>" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="NoRangka">No Rangka</label>
                    <div class="col-sm-12">
                        <input id="NoRangka" name="NoRangka" type="text" value="<?= $data["NoRangka"] ?>" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="NoMesin">No Mesin</label>
                    <div class="col-sm-12">
                        <input id="NoMesin" name="NoMesin" type="text" value="<?= $data["NoMesin"] ?>" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="PlatNO">Plat Nomer</label>
                    <div class="col-sm-12">
                        <input id="PlatNO" name="PlatNO" type="text" value="<?= $data["PlatNO"] ?>" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Merk">Merk Motor</label>
                    <div class="col-sm-12">
                        <input id="Merk" name="Merk" type="text" value="<?= $data["Merk"] ?>" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Type">Type Motor</label>
                    <div class="col-sm-12">
                        <input id="Type" name="Type" type="text" value="<?= $data["Type"] ?>" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Model">Model Motor</label>
                    <div class="col-sm-12">
                        <input id="Model" name="Model" type="text" value="<?= $data["Model"] ?>" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="TahunPembuatan">Tahun Pembuatan</label>
                    <div class="col-sm-12">
                        <input id="TahunPembuatan" name="TahunPembuatan" type="text" value="<?= $data["TahunPembuatan"] ?>" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="IsiSilinder">Isi Silinder</label>
                    <div class="col-sm-12">
                        <input id="IsiSilinder" name="IsiSilinder" type="text" value="<?= $data["IsiSilinder"] ?>" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="BahanBakar">Bahan Bakar</label>
                    <div class="col-sm-12">
                        <input id="BahanBakar" name="BahanBakar" type="text" value="<?= $data["BahanBakar"] ?>" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="WarnaTNKB">Warna TNKB</label>
                    <div class="col-sm-12">
                        <input id="WarnaTNKB" name="WarnaTNKB" type="text" value="<?= $data["WarnaTNKB"] ?>" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="TahunRegistrasi">Tahun Registrasi</label>
                    <div class="col-sm-12">
                        <input id="TahunRegistrasi" name="TahunRegistrasi" type="text" value="<?= $data["TahunRegistrasi"] ?>" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="NoBPKB">NO BPKB</label>
                    <div class="col-sm-12">
                        <input id="NoBPKB" name="NoBPKB" type="text" value="<?= $data["NoBPKB"] ?>" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="KodeLokasi">Kode Lokasi</label>
                    <div class="col-sm-12">
                        <input id="KodeLokasi" name="KodeLokasi" type="text" value="<?= $data["KodeLokasi"] ?>" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="MasaBerlakuSTNK">Masa Berlaku STNK</label>
                    <div class="col-sm-12">
                        <input id="MasaBerlakuSTNK" name="MasaBerlakuSTNK" type="text" value="<?= $data["MasaBerlakuSTNK"] ?>" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <input onclick="javascript:tambah()" class="btn btn-succes" type="submit" name="Submit" value="Submit">
                        <!--<button name="submit" type="submit" class="btn btn-success">Submit</button>-->
                    </div>
                </div>
            </form>
        </tr>
    </table>
</body>

</html>