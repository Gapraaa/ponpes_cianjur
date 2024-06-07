<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily News | Ponpes AR-RISALAH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"
</head>

<body>
    @include('navbar')
    <main class="mt-5">
        <div class="position-relative mt-5">
            <img src="{{ asset('asset/img/manasik.jpg') }}" class="d-block w-100 mt-5" alt="..." />
            <div class="position-absolute bottom-0 start-0 p-2 text-white">
                <h2>Berita Hari Ini</h2>
            </div>
        </div>

        <!-- Daily News -->
        <section class="container" id="Dailynews">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mx-auto p-5">
                @foreach($beritas as $berita)
                <div class="col d-flex align-items-stretch">
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
                            <a class="page-link" href="{{ $beritas->previousPageUrl() }}" aria-label="Previous">
                                <span aria-hidden="true">Previous</span>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="{{ $beritas->nextPageUrl() }}" aria-label="Next">
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
