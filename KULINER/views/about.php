<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alfian Nur Rizki</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- Font Awesome -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .card {
            border: 18px solid black;
            border-radius: 10px;
            box-shadow: none;
        }

        .card-body {
            padding: 18px;
            background-color: black;
            color: yellow;
        }

        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 0 auto 20px;
        }

        .btn-primary, .social-button {
            background-color: #ffff00;
            border: none;
            border-radius: 18px;
            padding: 10px 20px;
            color: black;
            text-decoration: none;
            margin: 5px 0;
        }

        .btn-primary:hover, .social-button:hover {
            background-color: #000000;
            color: white;
        }

        .social-button i {
            margin-right: 8px; /* Space between icon and text */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1>About Me</h1>
                        <img src="images/me2.png" alt="Profile Image" class="profile-image">
                        <p>Perkenalkan Nama Saya Alfian Nur Rizki</p>
                        <button class="btn btn-primary" onclick="window.location.href='https://www.linkedin.com/in/alfian-nur-rizki-969ab1265/'">Kontak Saya</button>
                        <hr>
                        <h2>Tentang Saya</h2>
                        <p>Saya seorang Mahasiswa aktif di Universitas Pelita Bangsa jurusan Teknik Informatika, saat ini sedang menempuh semester 3.</p>
                        <p>Saya lahir di Cikarang 21 Agustus tahun 2005.</p>
                        
                        <!-- Social Media Links -->
                        <hr>
                        <h3>Follow Me</h3>
                        <button class="social-button" onclick="window.location.href='https://www.linkedin.com/in/alfian-nur-rizki-969ab1265/'">
                            <i class="fab fa-linkedin"></i> LinkedIn
                        </button>
                        <button class="social-button" onclick="window.location.href='https://www.instagram.com/5nurrf_/'">
                            <i class="fab fa-instagram"></i> Instagram
                        </button>
                        <button class="social-button" onclick="window.location.href='https://www.youtube.com/@TeaBotl/'">
                            <i class="fab fa-youtube"></i> Youtube
                        </button>
                        <button class="social-button" onclick="window.location.href='https://spotify.com/melophilehttps://open.spotify.com/user/e7mu72wgmk6w157bpgezbmpe1?si=3d0423b22d294118/'">
                            <i class="fab fa-spotify"></i> Spotify
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-4fmsUCfNR2Z9qcrQykDjWrNmbrKyyEyPRteiCaVkFnb5wFA9HpnP2Z8lYFoqeFY" crossorigin="anonymous"></script>
</body>
</html>
