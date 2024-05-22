<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Donasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        .image-container {
            position: relative;
            display: inline-block;
        }

        .image-container img {
            display: block;
            width: 100%;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(9, 57, 9, 0.432);
            /* Green with 75% transparency */
        }

        .carousel-item .row {
            justify-content: center;
        }

        .carousel-indicators {
            bottom: -30px;
        }

        .carousel-indicators {
            bottom: -30px;
        }

        .carousel-indicators button {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            border: none;
            background-color: rgba(0, 0, 0, 0.5);
            margin: 0 4px;
            /* Jarak antara titik-titik */
        }

        .carousel-item .row {
            margin: 10px 0;
            /* Jarak antara baris kartu */
        }

        .carousel-item .col {
            margin-bottom: 20px;
            /* Jarak antara kolom kartu */
        }

        .carousel-caption {
            z-index: 2;
            position: absolute;
            top: 55%;
            left: 18%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #00763A;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('asset/img/bannerpasantren.jpg') }}" alt="Bootstrap" width="150" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link text-light" href="home-paud.html">PAUD</a>
                    <a class="nav-link text-light" href="home-mdta.html">MDTA</a>
                    <a class="nav-link text-light" href="home-smp.html">SMP</a>
                    <a class="nav-link text-light" href="home.html">PONPES</a>
                    <a class="nav-link text-light" href="donasi1.html">Donasi Online</a>
                    <a class="nav-link text-light" href="berita.html">Daily News</a>
                    <a class="nav-link text-light" href="ppdb.html">PPDB</a>
                    <a class="nav-link text-light" href="galery.html">Gallery</a>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <img src="{{ asset('asset/img/donasi1.jpg') }}" class="d-block w-100 mt-5" alt="...">
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <h2>Donasi Online</h2>
            <h5 style="margin-left: 220px;">Ayo Selamatkan Hartamu Dengan Bersedekah</h5>
        </div>
        <br>
        <div class="container">
            <h1>All Campaigns</h1>
            
            @foreach ($campaigns as $campaign)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $campaign->title }}</h5>
                    <p class="card-text"><strong>Description:</strong> {{ $campaign->description }}</p>
                    <p class="card-text"><strong>Target Amount:</strong> {{ $campaign->target_amount }}</p>
                    <p class="card-text"><strong>Current Amount:</strong> {{ $campaign->amount }}</p>
                    <!-- You can add more details as needed -->
        
                    <!-- Add a button for donating -->
                    <a href="{{ route('donation.create', $campaign) }}" class="btn btn-success">Donate</a>
                </div>
            </div>
            @endforeach
        
            <a href="{{ route('campaign.index') }}" class="btn btn-primary">Back to Campaigns</a>
        </div>
        </div>

       

        

        

        <hr style="margin-top: 30px;">

        <div class="container my-4">
            <div class="row mb-4">
                <div class="col-4">
                    <h4>Riwayat Donasi</h4>
                </div>
            </div>

            <div id="cardSlider" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#cardSlider" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#cardSlider" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center">
                                <div class="card" style="width: 18rem;">
                                    <img src="asset/img/profileorangbaik.jpg"
                                        class="card-img-top rounded-circle img-fluid mx-auto mt-3" alt="Foto Profil"
                                        style="width: 100px; height: 100px; object-fit: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Orang Baik</h5>
                                        <p class="card-text text-center">Berdonasi Sebesar</p>
                                        <p class="card-text text-center"><b>Rp. 15.000</b></p>
                                        <p class="card-text text-center">2 menit yang lalu</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center">
                                <div class="card" style="width: 18rem;">
                                    <img src="asset/img/profileorangbaik.jpg"
                                        class="card-img-top rounded-circle img-fluid mx-auto mt-3" alt="Foto Profil"
                                        style="width: 100px; height: 100px; object-fit: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Orang Baik</h5>
                                        <p class="card-text text-center">Berdonasi Sebesar</p>
                                        <p class="card-text text-center"><b>Rp. 15.000</b></p>
                                        <p class="card-text text-center">2 menit yang lalu</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center">
                                <div class="card" style="width: 18rem;">
                                    <img src="asset/img/profileorangbaik.jpg"
                                        class="card-img-top rounded-circle img-fluid mx-auto mt-3" alt="Foto Profil"
                                        style="width: 100px; height: 100px; object-fit: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Orang Baik</h5>
                                        <p class="card-text text-center">Berdonasi Sebesar</p>
                                        <p class="card-text text-center"><b>Rp. 15.000</b></p>
                                        <p class="card-text text-center">2 menit yang lalu</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center">
                                <div class="card" style="width: 18rem;">
                                    <img src="asset/img/profileorangbaik.jpg"
                                        class="card-img-top rounded-circle img-fluid mx-auto mt-3" alt="Foto Profil"
                                        style="width: 100px; height: 100px; object-fit: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Orang Baik</h5>
                                        <p class="card-text text-center">Berdonasi Sebesar</p>
                                        <p class="card-text text-center"><b>Rp. 15.000</b></p>
                                        <p class="card-text text-center">2 menit yang lalu</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center">
                                <div class="card" style="width: 18rem;">
                                    <img src="asset/img/profileorangbaik.jpg"
                                        class="card-img-top rounded-circle img-fluid mx-auto mt-3" alt="Foto Profil"
                                        style="width: 100px; height: 100px; object-fit: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Orang Baik</h5>
                                        <p class="card-text text-center">Berdonasi Sebesar</p>
                                        <p class="card-text text-center"><b>Rp. 15.000</b></p>
                                        <p class="card-text text-center">2 menit yang lalu</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center">
                                <div class="card" style="width: 18rem;">
                                    <img src="asset/img/profileorangbaik.jpg"
                                        class="card-img-top rounded-circle img-fluid mx-auto mt-3" alt="Foto Profil"
                                        style="width: 100px; height: 100px; object-fit: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Orang Baik</h5>
                                        <p class="card-text text-center">Berdonasi Sebesar</p>
                                        <p class="card-text text-center"><b>Rp. 15.000</b></p>
                                        <p class="card-text text-center">2 menit yang lalu</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#cardSlider"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#cardSlider"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


    </main>

    <footer class="text-white pt-5 pb-5" style="background-color: #00763a;">
        <div class="container">
            <div class="row pb-3">
                <div class="col-md-4">
                    <h5>Pondok Pesantren Ar-Risalah Safi’iyah</h5>
                    <p><b>Alamat</b>: Kp.Paseban RT / RW 07 / 01, Desa Hegarmanah, Kecamatan Sukaluyu, Kabupaten Cianjur
                    </p>
                </div>
                <div class="col-md-4">
                </div>
                <div class="col-md-4 d-flex flex-column align-items-end">
                    <ul class="list-unstyled mb-2">
                        <li><i class="fas fa-phone-alt font-sans"> </i> 081214192627</li>
                    </ul>
                    <div class="mx-0">
                        <a href="#" class="text-white mr-1">
                            <h5 class="fab fa-facebook"></h5>
                        </a>
                        <a href="#" class="text-white mr-1">
                            <h5 class="fab fa-instagram"></h5>
                        </a>
                        <a href="#" class="text-white mr-1">
                            <h5 class="fab fa-whatsapp"></h5>
                        </a>
                        <a href="#" class="text-white mr-1">
                            <h5 class="fab fa-youtube"></h5>
                        </a>
                    </div>
                </div>
            </div>
            <hr class="my-3 bg-white">
            <div class="row">
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
