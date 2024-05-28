<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily News | Ponpes AR-RISALAH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>

<body>
    @include('navbar')
    <main>
        <img src="{{ asset('asset/img/manasik.jpg') }}" class="d-block w-100 mt-5" style="color: #00763a4d" alt="..." />
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <h2>Berita Hari Ini</h2>
        </div>

        <section id="thumbnail">
            <div class="card bg-dark text-white">
                <div class="card-img-overlay">
                    <h5 class="card-title text-white text-bold">Berita Hari Ini</h5>
                </div>
            </div>
        </section>
        
        <!-- Daily News -->
        <section class="container" id="Dailynews">
            <div class="row g-4 mx-auto p-5">
                @foreach($beritas as $berita)
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card flex-fill">
                        <img src="{{ Storage::url($berita->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">{{ $berita->title }}</h6>
                            <br>
                            <p class="card-text"><small class="text-muted">20 Juli 2019</small></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <section class="mx-auto">
                <nav aria-label="Page navigation example">
                    <ul class="pagination d-flex justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="{{ $beritas->previousPageUrl() }}" aria-label="Previous" onclick="showPage('prev')">
                                <span aria-hidden="true">Previous</span>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="{{ $beritas->nextPageUrl() }}" aria-label="Next" onclick="showPage('next')">
                                <span aria-hidden="true">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </section>
        </section>
    </main>
    
    <footer class="text-white pt-5 pb-5" style="background-color: #00763a;">
        <div class="container">
            <div class="row pb-3">
                <div class="col-md-4">
                    <h5>Pondok Pesantren Ar-Risalah Safi’iyah</h5>
                    <p><b>Alamat</b>: Kp.Paseban RT / RW 07 / 01, Desa Hegarmanah, Kecamatan Sukaluyu, Kabupaten Cianjur</p>
                </div>
                <div class="col-md-4">
                </div>
                <div class="col-md-4 d-flex flex-column align-items-end">
                    <ul class="list-unstyled mb-2">
                        <li><i class="fas fa-phone-alt font-sans"> </i> 081214192627</li>
                    </ul>
                    <div class="mx-0">
                        <a href="#" class="text-white mr-1"><h5 class="fab fa-facebook"></h5></a>
                        <a href="#" class="text-white mr-1"><h5 class="fab fa-instagram"></h5></a>
                        <a href="#" class="text-white mr-1"><h5 class="fab fa-whatsapp"></h5></a>
                        <a href="#" class="text-white mr-1"><h5 class="fab fa-youtube"></h5></a>
                    </div>
                </div>
            </div>
            <hr class="my-3 bg-white">
        </div>
    </footer>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
