<?php
require "includes/config.php";
require "includes/function.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Kuliner</title>
    
    <!-- Menambahkan Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Menambahkan ikon Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        /* CSS untuk memastikan footer di bawah */
        html, body {
            height: 100%; /* Memastikan body mengambil seluruh tinggi layar */
            transition: background-color 0.5s, color 0.5s; /* Transisi halus */
        }

        body {
            display: flex;
            flex-direction: column; /* Mengatur elemen dalam kolom */
        }

        .container {
            flex: 1; /* Membuat konten mengambil sisa ruang yang ada */
        }

        /* Gaya untuk mode gelap */
        .dark-mode {
            background-color: #121212; /* Warna latar belakang gelap */
            color: #ffff00; /* Warna teks terang */
        }
    </style>

</head>
<body class="dark-mode">
    <header class="custom-header text-center py-3">
        <h1>Daftar Kuliner Tradisional</h1>
        <hr>
    </header>


    <!-- Navigasi tombol menggunakan Bootstrap -->
    <div class="container text-center my-4">
        <a href="?page=home" class="btn btn-primary mx-2">Home</a>
        <a href="?page=makanan" class="btn btn-success mx-2">Makanan</a>
        <a href="?page=minuman" class="btn btn-success mx-2">Minuman</a>
        <a href="?page=about" class="btn btn-info mx-2">About</a>
        <a href="?page=contact" class="btn btn-info mx-2">Contact</a>
    </div>

    <!-- Bagian konten utama -->
    <div class="container text-center">
        <?php require "includes/konten.php"; ?>
    </div>

    <footer>
        <div class="text-bg-dark p-3 text-center mt-5">
        Pemrograman Web 1 @ <?= date("Y"); ?>
        </div>
    </footer>

    <!-- Menambahkan Bootstrap 5 JS dan Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
