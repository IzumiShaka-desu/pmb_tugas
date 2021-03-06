<!DOCTYPE html>
<html>
<?php $level = strtolower(session()->get('user')["level"]); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            font-family: "Lato", sans-serif;
        }

        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidebar a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            color: #f1f1f1;
        }

        .sidebar .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        .openbtn {
            font-size: 20px;
            cursor: pointer;
            background-color: #111;
            color: white;
            padding: 10px 15px;
            border: none;
        }

        .openbtn:hover {
            background-color: #444;
        }

        #main {
            transition: margin-left .5s;
            padding: 16px;
        }

        /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
        @media screen and (max-height: 450px) {
            .sidebar {
                padding-top: 15px;
            }

            .sidebar a {
                font-size: 18px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">??</a>
        <a href="<?= base_url() ?>/Galeri">Galeri Motor</a>
        <a href="<?= base_url() ?>/Transaction">Transaksi</a>
        <?php if ($level == "pemilik" || $level == "teller") { ?>
            <a href="<?= base_url() ?>/User">User</a>
            <a href="<?= base_url() ?>/IdentitasMotor">Identitas Motor</a>
        <?php   } ?>
        <a href="/logout">Logout</a>
    </div>

    <div id="main">
        <nav class="navbar navbar-dark bg-dark">

            <button class="openbtn" onclick="openNav()"><span class="navbar-toggler-icon"></span></button>
            <span class="navbar-brand mb-0 h1">Hi, <?= session()->get('user')["Username"] ?></span>
        </nav>