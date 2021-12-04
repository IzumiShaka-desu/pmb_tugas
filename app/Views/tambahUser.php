<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript">
        //pesan alert saat User Berhasil Ditambahkan
        function tambah(){
            alert('User Berhasil Ditambahkan!')
        }
    </script>
</head>
<body>
    <?php include 'navbar.php';?>
    <div class="container">
    <h3> Silahkan Masukkan User</h3>
    </div>
    <table>
        <tr>
            <form action="<?= base_url(); ?>/userController/create" method="post">
        <div class="form-group row">
        <label for="Nama">Nama</label>
            <div class="col-sm-12">
                <input id="Nama" name="Nama" type="text"required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="Password">Password</label>
            <div class="col-sm-12">
                <input id="Password" name="Password" type="password" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="Hak_Akses">Hak_Akses</label>
            <div class="col-sm-12">
                <select id="Hak_Akses" name="Hak_Akses">
                <option disabled selected>--Hak Akses--</option>
                <option>Pemilik</option>
                <option>Teknisi</option>
                <option>Customer</option>
                <option>Teller</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="Manager">Manager</label>
            <div class="col-sm-12">
                <input id="Manager" name="Manager" type="text"  required="required">
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