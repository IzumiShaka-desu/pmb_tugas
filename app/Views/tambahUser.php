<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        //pesan alert saat User Berhasil Ditambahkan
        function tambah() {
            // alert('User Berhasil Ditambahkan!')
        }
    </script>
</head>

<body>
    <?php
    //  include 'navbar.php'; 
    ?>
    <div class="container" style="padding-top:50px;">
        <h3> Silahkan Masukkan User</h3>
        <table class="center">
            <tr>
                <form action="<?= base_url(); ?>/user/create" method="post">
                    <div class="form-group row">
                        <label for="Nama">Nama</label>
                        <div class="form-group col-md-6">
                            <input id="Nama" class="form-control" name="Nama" type="text" required="required" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Password">Password</label>
                        <div class="form-group col-md-6">
                            <input id="Password" class="form-control" name="Password" type="password" required="required" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Hak_Akses">Hak_Akses</label>
                        <div class="form-group col-md-6">
                            <select id="Hak_Akses" name="Hak_Akses">
                                <option disabled selected>--Hak Akses--</option>
                                <option value="Pemilik">Pemilik</option>
                                <option value="Teknisi">Teknisi</option>
                                <option value="Customer">Customer</option>
                                <option value="Teller">Teller</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Manager">Manager</label>
                        <div class="form-group col-md-6">
                            <input id="Manager" class="form-control" name="Manager" type="text" required="required" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <!--<input onclick="javascript:tambah()" class="btn btn-succes" type="submit" name="Edit" value="Edit">-->
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
                </form>
            </tr>
        </table>
    </div>
</body>

</html>