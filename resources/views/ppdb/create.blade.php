<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir PPDB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="asset/style.css" rel="stylesheet" />
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
              <a class="nav-link text-light" href="home.html">Home</a>
              <a class="nav-link text-light" href="donasi1.html">Donasi Online</a>
              <a class="nav-link text-light" href="berita.html">Daily News</a>
              <a class="nav-link text-light" href="ppdb.html">PPDB</a>
              <a class="nav-link text-light" href="galery.html">Gallery</a>
            </div>
          </div>
        </div>
      </nav>

    <main>
        <img src="{{ asset('asset/img/ppdb1.jpg') }}" class="d-block w-100" alt="..." />
        <div class="container mt-5">

            <div class="row justify-content-center">

                <div class="col-md-8 col-lg-10">
                    <h2>Formulir Pendaftaran Peserta Didik Baru (PPDB)</h2>
                    <div class="card form-container mb-5">
                        <div class="card-body">
                            <form action="{{ route('ppdb.store')}}" method="POST">
                                @csrf
                                <h3>DATA PESERTA DIDIK</h3>
                                <div class="mb-3">
                                    <label for="nama_siswa" class="form-label">Nama calon peserta didik:</label>
                                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" required>
                                </div>
                                <div class="mb-3">
                                    <label for="ttg_siswa" class="form-label">Tempat tanggal lahir:</label>
                                    <input type="text" class="form-control" id="ttg_siswa" name="ttg_siswa" required>
                                </div>
                                <div class="mb-3">
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label>
                                    <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                                        <option value="">Pilih jenis kelamin</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="nisn" class="form-label">NISN:</label>
                                    <input type="number" class="form-control" id="nisn" name="nisn" required>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat_siswa" class="form-label">Alamat:</label>
                                    <textarea class="form-control" id="alamat_siswa" name="alamat_siswa" rows="3" required></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="anak" class="form-label">Anak ke:</label>
                                        <input type="number" class="form-control" id="anak" name="anak" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="saudara" class="form-label">Dari (saudara):</label>
                                        <input type="number" class="form-control" id="saudara" name="saudara" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="tlpn_siswa" class="form-label">No telephone:</label>
                                    <input type="number" class="form-control" id="tlpn_siswa" name="tlpn_siswa" required>
                                </div>
                                <h3>DATA ORANG TUA/WALI</h3>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="nama_ayah" class="form-label">Nama Ayah/Wali:</label>
                                        <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="nama_ibu" class="form-label">Nama Ibu:</label>
                                        <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat_ortu" class="form-label">Alamat Orang Tua/Wali:</label>
                                    <textarea class="form-control" id="alamat_ortu" name="alamat_ortu" rows="3" required></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="pekerjaan_ayah" class="form-label">Pekerjaan Ayah/Wali:</label>
                                        <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="pekerjaan_ibu" class="form-label">Pekerjaan Ibu:</label>
                                        <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="tlpn_ayah" class="form-label">No telephone Ayah/Wali:</label>
                                        <input type="number" class="form-control" id="tlpn_ayah" name="tlpn_ayah" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="tlpn_ibu" class="form-label">No telephone Ibu:</label>
                                        <input type="number" class="form-control" id="tlpn_ibu" name="tlpn_ibu" required>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="submit" class="btn btn-success">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
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
                <div class="col-md-4">
                </div>
                <div class="col-md-4 d-flex flex-column align-items-end">
                    <ul class="list-unstyled mb-2">
                        <li><i class="fas fa-phone-alt font-sans"> </i>   081214192627</li>
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
</body>

</html>