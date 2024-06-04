@include('layout.header')

@include('layout.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->

            <!-- /.row -->
            <!-- Main row -->
            <div class="container">
                <div class="card mb-3">
                    <img src="{{ Storage::url($campaigns->image) }}" class="card-img-top" alt="image"
                        style="width: 100; height: 20rem;">
                    <div class="card-body">
                        <h1 class="m-0"><strong>{{ $campaigns->title }}</strong></h1>
                        <label class="mt-2">Sudah Terkumpul Sebanyak Rp.
                            {{ number_format($campaigns->amount, 0, ',', '.') }}</label>
                        <h4 class="mt-2">Rp. {{ number_format($campaigns->target_amount, 0, ',', '.') }}</h4>
                        <p class="card-text mt-2">{{ $campaigns->description }}</p>
                        <p class="card-text">
                        <small class="text-body-secondary">{{ $campaigns->created_at->format('d M Y') }}</small></p>
                        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                            data-bs-target="#donationModal">Create Donasi</button>
                    </div>
                </div>
                <h1 class="ml-3"><strong>Riwayat Donasi</strong></h1>
                {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#donationModal">Create Donasi</button>
                </div> --}}
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nominal</th>
                                <th>Bukti Donasi</th>
                                <th>Nama Lengkap</th>
                                <th>No Telpn / Email</th>
                                <th>Pesan</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($campaigns->donations as $donation)
                                <tr>
                                    <td>{{ $donation->id }}</td>
                                    <td>Rp. {{ number_format($donation->nominal_donasi, 0, ',', '.') }}</td>
                                    <td><img src="{{ Storage::url($donation->bukti_donasi) }}" alt="Bukti Donasi"
                                            width="80" height="100" data-bs-toggle="modal"
                                            data-bs-target="#imageModal"
                                            data-src="{{ Storage::url($donation->bukti_donasi) }}"></td>
                                    <td>{{ $donation->nama_lengkap }}</td>
                                    <td>{{ $donation->phone_email }}</td>
                                    <td>{{ $donation->message }}</td>
                                    <td>{{ $donation->status }}</td>
                                    <td>
                                        {{-- <form action="{{ route('donation.destroy', $donation) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form> --}}
                                        <form action="{{ route('donation.accept', $donation) }}" method="POST"
                                            style="display:inline-block;">
                                            @csrf
                                            <button type="submit" class="btn btn-success btn-sm">Accept</button>
                                        </form>
                                        <form action="{{ route('donation.reject', $donation) }}" method="POST"
                                            style="display:inline-block;">
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">Reject</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- <div class="content-wrapper">
                    <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1 class="m-0">Donations for {{ $campaign->title }}</h1>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active">Donations</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <section class="content">
                        <div class="container-fluid">
                            <div class="card-body table-responsive p-0">
                                @if ($campaign->donations->isEmpty())
                                    <p>No donations found for this campaign.</p>
                                @else
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($campaign->donations as $donation)
                                                <tr>
                                                    <td>{{ $donation->id }}</td>
                                                    <td>Rp. {{ number_format($donation->amount, 0, ',', '.') }}</td>
                                                    <td>{{ $donation->date }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @endif
                            </div>
                        </div>
                    </section>
                </div> --}}

            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('layout.footer')

<!-- Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Bukti</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img id="modalImage" src="" alt="Gambar Donasi" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<!-- Modal Form Donasi-->
<div class="modal fade" id="donationModal" tabindex="-1" aria-labelledby="donationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="donationModalLabel"><strong>{{ $campaigns->title }}</strong></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('donation.adminstore', $campaigns) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <h5 for="nominal_donasi" class="form-label"><strong>Isi Nominal Donasi</strong></h5>
                        <div class="input-group input-group-lg mb-3 mt-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Rp.</span>
                            <input type="number" step="0.01" class="form-control" id="nominal_donasi"
                                name="nominal_donasi" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        {{-- <h5 for="bukti_donasi" class="form-label">Bukti Donasi</h5> --}}
                        <div class="input-group input-group-lg mb-3">
                            <input type="file" class="form-control" id="bukti_donasi" name="bukti_donasi"
                                placeholder="Bukti Pembayaran">
                            <label class="input-group-text" for="bukti_donasi">
                                <svg width="30" height="30" viewBox="0 0 46 46" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M24.9167 36.4167C24.9167 37.7583 25.1658 39.0425 25.5875 40.25H9.58333C8.56667 40.25 7.59165 39.8461 6.87276 39.1272C6.15387 38.4084 5.75 37.4333 5.75 36.4167V9.58333C5.75 7.475 7.475 5.75 9.58333 5.75H36.4167C37.4333 5.75 38.4084 6.15387 39.1272 6.87276C39.8461 7.59165 40.25 8.56667 40.25 9.58333V25.5875C39.0425 25.1658 37.7583 24.9167 36.4167 24.9167V9.58333H9.58333V36.4167H24.9167ZM26.7567 23.5558L21.4858 30.3408L17.7292 25.8175L12.4583 32.5833H25.5875C26.3542 30.4367 27.7342 28.5775 29.5167 27.2358L26.7567 23.5558ZM38.3333 34.5V28.75H34.5V34.5H28.75V38.3333H34.5V44.0833H38.3333V38.3333H44.0833V34.5H38.3333Z"
                                        fill="black" />
                                </svg>
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <h5 for="nama_lengkap" class="form-label">Masuk atau Lengkapi data dibawah ini</h5>
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                            placeholder="Nama Lengkap" required>
                    </div>
                    <div class="mb-3">
                        {{-- <h5 for="phone_email" class="form-label">Phone/Email</h5> --}}
                        <input type="text" class="form-control" id="phone_email" name="phone_email"
                            placeholder="Nomor Ponsel Atau Email" required>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <h5 for="message" class="form-label">Sertakan Doa atau dukungan (Opsional)</h5>
                        <div class="input-group input-group-lg mb-3 mt-3">
                            <textarea class="form-control" id="message" name="message" rows="4"
                                placeholder="Tulis doa untuk Penggalang dana atau dirimu agar bisa di Amini oleh orang baik lainnya."></textarea>
                        </div>
                    </div>
                    <input type="hidden" name="status" value="accepted">
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-success p-3">Kirim Donasi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<!-- JavaScript for handling image click event -->
<script>
    document.querySelectorAll('[data-bs-toggle="modal"]').forEach((element) => {
        element.addEventListener('click', (event) => {
            const modalImage = document.getElementById('modalImage');
            modalImage.src = event.target.getAttribute('data-src');
        });
    });
</script>
