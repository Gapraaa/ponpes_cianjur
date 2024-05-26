<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pembayaran|Ponpes AR-RISALAH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        .form-control[type="file"] {
            color: transparent;
            position: relative;
        }

        .form-control[type="file"]::-webkit-file-upload-button {
            visibility: hidden;
        }

        .form-control[type="file"]::before {
            content: attr(placeholder);
            color: #6c757d;
            position: absolute;
            left: 10px;
            top: 10px;
            pointer-events: none;
        }

        .custom-file-label {
            display: flex;
            align-items: center;
            cursor: pointer;
            padding: 10px;
            background-color: #e9ecef;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            margin-left: -1px;
        }

        .custom-file-label:hover {
            background-color: #d6d8db;
        }

        .input-group-lg .form-control[type="file"] {
            height: auto;
            padding: .375rem .75rem;
        }

        .form-control[type="file"]::before {
            top: 50%;
            transform: translateY(-50%);
        }
    </style>
</head>

<body>
    @include('navbar')
    <main>
        <section id="thumbnail">
            <div class="card bg-dark text-white">
                <img src="asset/img/pembayaran1.JPG" class="card-img" alt="Donasi">
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-10 mx-auto mt-3">
                    <h3 class="">Donasi Pembangunan Pondok Pesantren</h3>
                    <h3>AR-RISALAH</h3>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-10 mx-auto">
                    <form action="{{ route('donation.store', $campaign) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <h5 for="nominal_donasi" class="form-label">Nominal Donasi</h5>
                            <div class="input-group input-group-lg mb-3 mt-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Rp.</span>
                                <input type="number" step="0.01" class="form-control" id="nominal_donasi" name="nominal_donasi" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <h5 for="bukti_donasi" class="form-label">Bukti Donasi</h5>
                            <div class="input-group input-group-lg mb-3">
                                <input type="file" class="form-control" id="bukti_donasi" name="bukti_donasi">
                                <label class="input-group-text" for="bukti_donasi">
                                    <svg width="30" height="30" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M24.9167 36.4167C24.9167 37.7583 25.1658 39.0425 25.5875 40.25H9.58333C8.56667 40.25 7.59165 39.8461 6.87276 39.1272C6.15387 38.4084 5.75 37.4333 5.75 36.4167V9.58333C5.75 7.475 7.475 5.75 9.58333 5.75H36.4167C37.4333 5.75 38.4084 6.15387 39.1272 6.87276C39.8461 7.59165 40.25 8.56667 40.25 9.58333V25.5875C39.0425 25.1658 37.7583 24.9167 36.4167 24.9167V9.58333H9.58333V36.4167H24.9167ZM26.7567 23.5558L21.4858 30.3408L17.7292 25.8175L12.4583 32.5833H25.5875C26.3542 30.4367 27.7342 28.5775 29.5167 27.2358L26.7567 23.5558ZM38.3333 34.5V28.75H34.5V34.5H28.75V38.3333H34.5V44.0833H38.3333V38.3333H44.0833V34.5H38.3333Z" fill="black" />
                                    </svg>
                                </label>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-3">
                            <h5 for="nama_lengkap" class="form-label">Nama Lengkap</h5>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                        </div>
                        <div class="mb-3">
                            <h5 for="phone_email" class="form-label">Phone/Email</h5>
                            <input type="text" class="form-control" id="phone_email" name="phone_email" required>
                        </div>
                        <hr>
                        <div class="mb-3">
                            <h5 for="message" class="form-label">Sertakan Doa atau dukungan (Opsional)</h5>
                            <div class="input-group input-group-lg mb-3 mt-3">
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Tulis doa untuk Penggalang dana atau dirimu agar bisa di Amini oleh orang baik lainnya."></textarea>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-success p-3">Kirim Donasi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <br>
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
