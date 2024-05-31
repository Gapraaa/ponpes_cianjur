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
    @include('navbar')
    <main>
        <img src="{{ asset('asset/img/donasi1.jpg') }}" class="d-block w-100 mt-5" alt="...">
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <h2>Donasi Online</h2>
            <h5 style="margin-left: 220px;">Ayo Selamatkan Hartamu Dengan Bersedekah</h5>
        </div>
        <br>
        <div class="container mt-5">
            @foreach ($campaigns as $campaign)
                <a href="donasi2.html">
                    <div class="card mb-3" style="max-width: 1150px; height: 220px">
                </a>
                <div class="row g-0">
                    <div class="col-md-4">
                        <a href="{{ route('campaign.detail', ['id' => $campaign->id]) }}">
                            <img src="{{ Storage::url($campaign->image) }}" class="img-fluid rounded-start"
                                alt="..." style="height: 220px; width: 400px" /></a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title"> <a href="{{ route('campaign.detail', ['id' => $campaign->id]) }}" style="text-decoration: none; color: black;">
                                    {{ $campaign->title }}</a>
                            </h4>
                            <h4 class="card-text">Rp. {{ number_format($campaign->target_amount, 0, ',', '.') }}</h4>
                            <p class="card-text">
                                <small>Terkumpul Dari: Rp. {{ number_format($campaign->amount, 0, ',', '.') }}</small>
                            </p>
                            <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-success" style="width: {{ ($campaign->amount / $campaign->target_amount) * 100 }}%">
                                </div>
                            </div>
                            <div class="button-group d-flex justify-content-center align-items-center mt-2">
                                <button type="button" class="btn btn-primary btn-sm mx-2" style="background-color: #1D3EB3;">
                                    <a href="#" class="text-white" style="text-decoration: none;">
                                        <svg width="20" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M26.25 32.0833C25.0347 32.0833 24.0017 31.658 23.151 30.8073C22.3003 29.9566 21.875 28.9236 21.875 27.7083C21.875 27.5382 21.8872 27.3617 21.9115 27.1789C21.9358 26.9962 21.9722 26.8323 22.0208 26.6875L11.7396 20.7083C11.3264 21.0729 10.8646 21.3587 10.3542 21.5658C9.84375 21.7729 9.30903 21.876 8.75 21.875C7.53472 21.875 6.50174 21.4496 5.65104 20.5989C4.80035 19.7483 4.375 18.7153 4.375 17.5C4.375 16.2847 4.80035 15.2517 5.65104 14.401C6.50174 13.5503 7.53472 13.125 8.75 13.125C9.30903 13.125 9.84375 13.2285 10.3542 13.4356C10.8646 13.6427 11.3264 13.928 11.7396 14.2917L22.0208 8.31249C21.9722 8.16666 21.9358 8.00284 21.9115 7.82103C21.8872 7.63923 21.875 7.46277 21.875 7.29166C21.875 6.07638 22.3003 5.04339 23.151 4.1927C24.0017 3.342 25.0347 2.91666 26.25 2.91666C27.4653 2.91666 28.4983 3.342 29.349 4.1927C30.1997 5.04339 30.625 6.07638 30.625 7.29166C30.625 8.50693 30.1997 9.53992 29.349 10.3906C28.4983 11.2413 27.4653 11.6667 26.25 11.6667C25.691 11.6667 25.1562 11.5636 24.6458 11.3575C24.1354 11.1514 23.6736 10.8655 23.2604 10.5L12.9792 16.4792C13.0278 16.625 13.0642 16.7893 13.0885 16.9721C13.1128 17.1549 13.125 17.3308 13.125 17.5C13.125 17.6692 13.1128 17.8456 13.0885 18.0294C13.0642 18.2131 13.0278 18.3769 12.9792 18.5208L23.2604 24.5C23.6736 24.1354 24.1354 23.8501 24.6458 23.6439C25.1562 23.4378 25.691 23.3343 26.25 23.3333C27.4653 23.3333 28.4983 23.7587 29.349 24.6094C30.1997 25.4601 30.625 26.493 30.625 27.7083C30.625 28.9236 30.1997 29.9566 29.349 30.8073C28.4983 31.658 27.4653 32.0833 26.25 32.0833Z" fill="white"/>
                                        </svg>
                                        Bagikan
                                    </a>
                                </button>
                                <form action="{{ route('donation.create', ['campaign' => $campaign->id]) }}" method="get">
                                    <button type="submit" class="btn btn-success btn-sm mx-2">
                                        <svg width="20" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M29.1667 24.7917C30.0028 24.7917 30.7077 25.0833 31.2813 25.6667C31.8549 26.25 32.1369 26.9305 32.1271 27.7083L20.4167 32.0833L10.2084 29.1667V16.0417H13.0521L23.6542 19.9646C24.4126 20.266 24.7917 20.8104 24.7917 21.5979C24.7917 22.0548 24.6264 22.4535 24.2959 22.7937C23.9653 23.134 23.5473 23.3139 23.0417 23.3333H18.9584L16.4063 22.3562L15.9251 23.7271L18.9584 24.7917H29.1667ZM23.3334 4.71041C24.3639 3.51457 25.6765 2.91666 27.2709 2.91666C28.5931 2.91666 29.7112 3.40277 30.6251 4.37499C31.5389 5.34721 32.0251 6.46527 32.0834 7.72916C32.0834 8.73055 31.5973 9.92638 30.6251 11.3167C29.6528 12.7069 28.6952 13.8687 27.7521 14.8021C26.8091 15.7354 25.3362 17.1208 23.3334 18.9583C21.3112 17.1208 19.8237 15.7354 18.8709 14.8021C17.9181 13.8687 16.9605 12.7069 15.998 11.3167C15.0355 9.92638 14.5639 8.73055 14.5834 7.72916C14.5834 6.40693 15.0549 5.28888 15.998 4.37499C16.941 3.4611 18.0785 2.97499 19.4105 2.91666C20.966 2.91666 22.2737 3.51457 23.3334 4.71041ZM1.43506 16.0417H7.29173V32.0833H1.43506V16.0417Z" fill="white"/>
                                        </svg>
                                    Donasi
                                </button>                               
                             </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
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
                    @foreach ($donations->where('status', 'accepted')->chunk(3) as $index => $chunk)
                        <button type="button" data-bs-target="#cardSlider" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}" aria-current="{{ $index == 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
                    @endforeach
                </div>
                <div class="carousel-inner">
                    @foreach ($donations->where('status', 'accepted')->chunk(3) as $index => $chunk)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <div class="row">
                                @foreach ($chunk as $donation)
                                    <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center">
                                        <div class="card" style="width: 18rem;">
                                            <img src="{{ asset('asset/img/profileorangbaik.jpg') }}" class="card-img-top rounded-circle img-fluid mx-auto mt-3" alt="Foto Profil" style="width: 100px; height: 100px; object-fit: cover;">
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
                <button class="carousel-control-prev" type="button" data-bs-target="#cardSlider" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#cardSlider" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
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
