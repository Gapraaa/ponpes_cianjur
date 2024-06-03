<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily News | Ponpes AR-RISALAH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
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
    @include('navbar')
    <main>
        <img src="{{ asset('asset/img/manasik.jpg') }}" class="d-block w-100 mt-5" style="color: #00763a4d" alt="..." />
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <h1>Berita Hari Ini</h1>
        </div>

        <section id="thumbnail">
            <div class="card bg-dark text-white">
                <div class="card-img-overlay">
                    <h1 class="card-title text-white text-bold">Berita Hari Ini</h1>
                </div>
            </div>
        </section>
        
        <!-- Daily News -->
        <section class="container" id="Dailynews">
            <div class="row g-4 mx-auto p-5">
                @foreach($beritas as $berita)
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card flex-fill">
                        <img src="{{ Storage::url($berita->image) }}" class="card-img-top" style="height: 200px" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">{{ $berita->title }}</h6>
                            <br>
                            <p class="card-text"><small class="text-muted">{{ $berita->created_at->format('d M Y') }}</small></p>
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
    @include('footer')
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
