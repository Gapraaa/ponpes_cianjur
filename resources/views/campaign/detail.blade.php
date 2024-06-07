<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Detail Donasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body>
    @include('navbar')
    <main class="mt-5">
        <div class="position-relative mt-5">
            <img src="{{ Storage::url($campaign->image) }}" class="d-block w-100 mt-5 mx-auto img-fluid" style="max-height: 500px;"" alt="..." />
            <div class="position-absolute bottom-0 start-0 p-2 text-white">
                <h2>{{ $campaign->title }}</h2>
            </div>
        </div>

        <div class="container mt-5 col-9 mx-auto">
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
                            <div class="button-group d-flex justify-content-end align-items-center mt-2">
                                <button type="button" class="btn btn-primary btn-sm mx-2" style="background-color: #1D3EB3;">
                                    <a href="#" class="text-white text-decoration-none">
                                        <i class="fas fa-share"></i> Bagikan
                                    </a>
                                </button>
                                <form action="{{ route('donation.create', ['campaign' => $campaign->id]) }}" method="get">
                                    <button type="submit" class="btn btn-success btn-sm mx-2">
                                        <i class="fas fa-hand-holding-usd"></i> Donasi
                                    </button>                               
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <hr>
        <div class="container mt-5 col-9 mx-auto">
            <!-- Cerita Penggalang -->
            <div class="row mb-4">
                <div class="col-12">
                    <h4>Cerita Penggalangan Dana</h4>
                    <p>{{ $campaign->created_at->format('d M Y') }}</p>
                    <p>{{ $campaign->description }}</p>
                </div>
            </div>
        </div>
            <hr>
        <div class="container mt-5 col-9 mx-auto">
            <!-- Informasi Penggalangan Dana -->
            <div class="row mb-4">
                <div class="col-12">
                    <h4>Informasi Penggalangan Dana</h4>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col-md-3 mb-3 mb-md-0">
                                    <img src="{{ asset('asset/img/bannerpasantren.jpg')}}" alt="" style="max-width: 120px;" class="img-fluid">
                                </div>
                                <div class="col-md-9 text-md-left">
                                    <h5 class="mb-0 fs-6">Pondok Pesantren AR-RISALAH</h5>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
            <hr>
        
            <!-- Riwayat Donasi -->
            <div class="container mt-5 col-9 mx-auto">
                <div class="row mb-4">
                    <div class="col-12">
                        <h4 class="mb-0">Riwayat Donasi</h4>
                    </div>
                </div>
                <div id="cardSlider" class="carousel slide" data-bs-ride="carousel">
                    <!-- Indicators -->
                    <div class="carousel-indicators">
                        @foreach ($donations->where('status', 'accepted')->chunk(3) as $index => $chunk)
                            <button type="button" data-bs-target="#cardSlider" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}" aria-current="{{ $index == 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
                        @endforeach
                    </div>
            
                    <div class="carousel-inner">
                        @foreach ($donations->where('status', 'accepted')->chunk(3) as $index => $chunk)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <div class="row row-cols-1 row-cols-md-3">
                                    @foreach ($chunk as $donation)
                                        <div class="col mb-4">
                                            <div class="card">
                                                <img src="{{ asset('asset/img/profileorangbaik.jpg') }}" class="card-img-top rounded-circle img-fluid mx-auto mt-3 object-fit-cover" alt="Foto Profil" style="width: 100px; height: 100px;">
                                                <div class="card-body">
                                                    <h5 class="card-title text-center">{{ $donation->nama_lengkap }}</h5>
                                                    <p class="card-text text-center">Berdonasi Sebesar</p>
                                                    <p class="card-text text-center"><b>Rp. {{ number_format($donation->nominal_donasi, 0, ',', '.') }}</b></p>
                                                    <p class="card-text text-center">{{ $donation->created_at->format('d M Y') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
            
                    <!-- Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#cardSlider" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 16 16">
                                <path d="M11.354 1.646a.5.5 0 0 0-.708 0L4.5 7.793 10.646 13.94a.5.5 0 0 0 .708-.708L5.207 8l6.147-6.146a.5.5 0 0 0 0-.708z"/>
                            </svg>
                        </span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#cardSlider" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 16 16">
                                <path d="M4.646 1.646a.5.5 0 0 1 .708 0L11.5 7.793 5.354 13.94a.5.5 0 1 1-.708-.708L10.793 8 4.646 1.854a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            
                <hr>

                <div class="container mt-5 col-9 mx-auto">
                    <div class="row mb-4">
                        <div class="col-12">
                            <h4 class="mb-0">Doa-doa Orang Baik</h4>
                        </div>
                    </div>
                    <div id="cardSlider1" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @foreach ($donations->where('status', 'accepted')->chunk(2) as $index => $chunk)
                                <button type="button" data-bs-target="#cardSlider1" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}" aria-current="{{ $index == 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner">   
                            @foreach ($donations->where('status', 'accepted')->chunk(2) as $index => $chunk)
                                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                    <div class="row justify-content-center">
                                        @foreach ($chunk as $donation)
                                            <div class="col-md-6">
                                                <div class="card mb-3">
                                                    <div class="card-body d-flex flex-column align-items-center">
                                                        <div class="d-flex align-items-center me-auto">
                                                            <img src="{{ asset('asset/img/profileorangbaik.jpg') }}" class="rounded-circle img-fluid object-fit-cover" alt="Foto Profil" style="width: 65px; height: 65px;">
                                                            <div class="ms-3">
                                                                <h5 class="card-title">{{ $donation->nama_lengkap }}</h5>
                                                                <p class="card-text">{{ $donation->created_at->format('d M Y') }}</p>
                                                            </div>
                                                        </div>
                                                        <p class="card-text mt-3"><b>{{ $donation->message }}</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#cardSlider1" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 16 16">
                                    <path d="M11.354 1.646a.5.5 0 0 0-.708 0L4.5 7.793 10.646 13.94a.5.5 0 0 0 .708-.708L5.207 8l6.147-6.146a.5.5 0 0 0 0-.708z"/>
                                </svg>
                            </span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#cardSlider1" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 16 16">
                                    <path d="M4.646 1.646a.5.5 0 0 1 .708 0L11.5 7.793 5.354 13.94a.5.5 0 1 1-.708-.708L10.793 8 4.646 1.854a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                
                
                
                
                
        
    </main>
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
