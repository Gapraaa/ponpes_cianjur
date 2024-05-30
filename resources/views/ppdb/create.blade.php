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
    <style>
        .carousel-caption {
            z-index: 2;
            position: absolute;
            top: 33%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
    </style>
</head>

<body>

    @include('navbar')

    <main>
        <img src="{{ asset('asset/img/ppdb1.jpg') }}" class="d-block w-100" alt="..." />
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <h2>Penerimaan Peserta Didik Baru</h2>
            <hr class="col-5 mx-auto border border-light opacity-100 border-2">
            <h2>Tahun Ajaran 2024/2025</h2>
        </div>
        <div class="container mt-5">

            <div class="row justify-content-center">

                <div class="col-md-8 col-lg-10">
                    <h2 class="mb-5">Formulir Pendaftaran Peserta Didik Baru (PPDB)</h2>
                    <div class="card form-container mb-5">
                        <div class="card-body">
                            <form id="ppdbForm">
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
                                    <button type="submit" class="col-lg-2 btn btn-success btn-lg fs-5 ">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#ppdbForm').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: "{{ route('ppdb.store') }}",
                    data: $(this).serialize(),
                    success: function(response) {
                        alert('Formulir berhasil dikirim!');
                        // Reset form setelah pengiriman sukses
                        $('#ppdbForm')[0].reset();
                    },
                    error: function(error) {
                        alert('Terjadi kesalahan. Silakan coba lagi.');
                    }
                });
            });
        });
    </script>
</body>

</html>
