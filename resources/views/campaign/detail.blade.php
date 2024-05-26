<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Detail Donasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        .carousel-caption {
            z-index: 2;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
    </style>
</head>
<body>
    @include('navbar')
    <main>
        <img src="{{ Storage::url($campaign->image) }}" class="d-block w-100 mt-5" style="color: #00763a4d" alt="..." />
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <h2>Donasi Pembangunan Pondok</h2>
            <h2 style="margin-right: 100px;">Pesantren AR-RISALAH</h2>
        </div>
        <div class="container my-5">
            <div class="row">
                <div class="col-12">
                    <h3>{{ $campaign->title }}</h3>
                    <h4>Rp. {{ number_format($campaign->target_amount, 0, ',', '.') }}</h4>
                    <p>Terkumpul Dari: <strong>Rp. {{ number_format($campaign->amount, 0, ',', '.') }}</strong></p>
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="{{ ($campaign->amount / $campaign->target_amount) * 100 }}"
                                aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-success" style="width: {{ ($campaign->amount / $campaign->target_amount) * 100 }}%">
                                </div>
                            </div>
                            <div class="button-group" style="text-align: right;">
                                <button type="button" class="btn btn-primary btn-lg mt-3" style="background-color: #1D3EB3;">
                                    <a href="#" class="text-white text-decoration-none">
                                        <i class="fas fa-share-alt"></i> Bagikan
                                    </a>
                                </button>
                                <button type="button" class="btn btn-success btn-lg mt-3">
                                    <a href="pembayaran.html" class="text-white text-decoration-none">
                                        <svg width="20" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M29.1667 24.7917C30.0028 24.7917 30.7077 25.0833 31.2813 25.6667C31.8549 26.25 32.1369 26.9305 32.1271 27.7083L20.4167 32.0833L10.2084 29.1667V16.0417H13.0521L23.6542 19.9646C24.4126 20.266 24.7917 20.8104 24.7917 21.5979C24.7917 22.0548 24.6264 22.4535 24.2959 22.7937C23.9653 23.134 23.5473 23.3139 23.0417 23.3333H18.9584L16.4063 22.3562L15.9251 23.7271L18.9584 24.7917H29.1667ZM23.3334 4.71041C24.3639 3.51457 25.6765 2.91666 27.2709 2.91666C28.5931 2.91666 29.7112 3.40277 30.6251 4.37499C31.5389 5.34721 32.0251 6.46527 32.0834 7.72916C32.0834 8.73055 31.5973 9.92638 30.6251 11.3167C29.6528 12.7069 28.6952 13.8687 27.7521 14.8021C26.8091 15.7354 25.3362 17.1208 23.3334 18.9583C21.3112 17.1208 19.8237 15.7354 18.8709 14.8021C17.9181 13.8687 16.9605 12.7069 15.998 11.3167C15.0355 9.92638 14.5639 8.73055 14.5834 7.72916C14.5834 6.40693 15.0549 5.28888 15.998 4.37499C16.941 3.4611 18.0785 2.97499 19.4105 2.91666C20.966 2.91666 22.2737 3.51457 23.3334 4.71041ZM1.43506 16.0417H7.29173V32.0833H1.43506V16.0417Z" fill="white" />
                                        </svg>
                                     Donasi
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Terkumpul Dana -->
            <div class="row mb-4"></div>
            <hr>
            <!-- Cerita Penggalang -->
            <div class="row mb-4">
                <div class="col-12">
                    <h4>Cerita Penggalangan Dana</h4>
                    <p>{{ $campaign->created_at->format('d M Y') }}</p>
                    <p>{{ $campaign->description }}</p>
                </div>
            </div>
            <hr>
            <!-- Informasi Penggalangan Dana -->
            <div class="row mb-4">
                <div class="col-12">
                    <h4>Informasi Penggalangan Dana</h4>
                    <ul class="list-group">
                        <li class="list-group-item"><img src="{{ asset('asset/img/bannerpasantren.jpg')}}" alt=""
                                style="width: 120px;"> Pondok Pesantren AR-RISALAH</li>
                    </ul>
                </div>
            </div>
            <hr>
            <!-- Riwayat Donasi -->
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
                        <button type="button" data-bs-target="#cardSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center">
                                    <div class="card" style="width: 18rem;">
                                        <img src="{{ asset('asset/img/profileorangbaik.jpg')}}"
                                            class="card-img-top rounded-circle img-fluid mx-auto mt-3" alt="Foto Profil"
                                            style="width: 100px; height: 100px; object-fit: cover;">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Orang Baik</h5>
                                            <p class="card-text">Berdonasi Sebesar</p>
                                            <p class="card-text"><b>Rp. 15.000</b></p>
                                            <p class="card-text">2 menit yang lalu</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Repeat similar structure for other donors as needed -->
                            </div>
                        </div>
                        <!-- Repeat similar structure for other carousel items as needed -->
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
        </div>
    </main>
    <footer class="text-white pt-5 pb-5" style="background-color: #00763a;">
        <div class="container">
            <div class="row pb-3">
                <div class="col-md-4">
                    <h5>Pondok Pesantren Ar-Risalah Safi’iyah</h5>
                    <p><b>Alamat</b>: Kp.Paseban RT / RW 07 / 01, Desa Hegarmanah,  Kecamatan Sukaluyu,  Kabupaten Cianjur</p>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <p><i class="fas fa-envelope"></i> <a href="mailto:email@example.com" class="text-white text-decoration-none">email@example.com</a></p>
                    <p><i class="fas fa-phone"></i> <a href="tel:+123456789" class="text-white text-decoration-none">+123456789</a></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz4fnFO9gybBogGzOg6nv/nu5R3LrC8jjV+0FQ1KpC1i1TVVQ0sKTAtGf9" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-qI1vQyTskveBz3BRTA1a4zO8LVRnB4rtohXZk3uE8IKb+2FMna0RbK6FlkRybW9G" crossorigin="anonymous"></script>
</body>
</html>
