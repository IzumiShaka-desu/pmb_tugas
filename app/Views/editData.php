<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!--<script type="text/javascript">
        //pesan alert saat User Berhasil Ditambahkan
        function tambah(){
            alert('User Berhasil Diedit!')
        }
    </script>-->
</head>
<body>
    <?php include 'navbar.php';?>
    <div class="container">
    <h3> Silahkan Update User</h3>
    </div>
    <div class="container">
    <table>
        <tr>
            <form action="<?= base_url(); ?>/userController/edit/ <?=$user[0]['IDUser']?>" method="post">
        <div class="form-group row">
        <label for="Nama">Nama</label>
        <div class="form-group col-md-6">
                <input id="Nama" class="form-control" name="Nama" type="text"required="required" value="<?=$user[0]['Nama']?>">
        </div>
        </div>
        <div class="form-group row">
            <label for="Password">Password</label>
        <div class="form-group col-md-6">
                <input id="Password" class="form-control" name="Password" type="password" required="required"value="<?=$user[0]['Password']?>">
        </div>
        </div>
        <div class="form-group row">
            <label for="Hak_Akses">Hak_Akses</label>
        <div class="form-group col-md-6">
                <select id="Hak_Akses" name="Hak_Akses">
                <option disabled selected>--Hak Akses--</option>
                <option value="Pemilik" <?=$user[0]['Hak_Akses'] == "Pemilik" ? 'selected' : ''  ?>>Pemilik</option>
                <option value="Teknisi" <?=$user[0]['Hak_Akses'] == "Teknisi" ? 'selected' : ''  ?>>Teknisi</option>
                <option value="Customer" <?=$user[0]['Hak_Akses'] == "Customer" ? 'selected' : ''  ?>>Customer</option>
                <option value="Teller" <?=$user[0]['Hak_Akses'] == "Teller" ? 'selected' : ''  ?>>Teller</option>
                </select>
        </div>
        </div>
        <div class="form-group row">
            <label for="Manager">Manager</label>
            <div class="form-group col-md-6">
                <input id="Manager" class="form-control" name="Manager" type="text"  required="required" value="<?=$user[0]['Nama']?>">
            </div>
        </div>
        <div class="form-group row">
        <div class="form-group col-md-6">
                <!--<input onclick="javascript:tambah()" class="btn btn-succes" type="submit" name="Edit" value="Edit">-->
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
        </tr>
    </table>
</body>
</html>