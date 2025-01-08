<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .carousel-inner img {
            width: 100%;
            height: auto; /* Maintain aspect ratio */
        }
    </style>
</head>
<body>
    <div class="text-center py-3">
        <h1>Selamat Datang Di Website Dinamis Alfian</h1>
        <p>Mahasiswa | Teknik Informatika</p>
    </div>
    
    <!-- Bootstrap Carousel Slider -->
    <div id="carouselExample" class="carousel slide mx-auto" style="max-width: 600px;" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/img1.jpg" class="d-block w-100" alt="Gambar 1">
            </div>
            <div class="carousel-item">
                <img src="images/img2.jpg" class="d-block w-100" alt="Gambar 2">
            </div>
            <div class="carousel-item">
                <img src="images/img3.jpg" class="d-block w-100" alt="Gambar 3">
            </div>
        </div>
        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="text-center mt-3">
        <p>Sedikit Foto-foto karya sendiri</p>
    </div>

    <!-- Bootstrap JS (required for carousel functionality) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
