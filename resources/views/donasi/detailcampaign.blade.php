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
                </div><!-- /.col -->
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
                <h1>DATA DONASI</h1>
                <div class="card-body table-responsive p-0">
                    <div class="container mt-5">
                        @foreach ($campaigns as $campaign)
                            <a href="donasi2.html">
                                <div class="card mb-3" style="max-width: 1150px; height: 220px">
                            </a>
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <a href="{{ route('donation.campaign', ['id' => $campaign->id]) }}">
                                        <img src="{{ Storage::url($campaign->image) }}" class="img-fluid rounded-start"
                                            alt="..." style="height: 220px; width: 400px" /></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h4 class="card-title"> <a href="{{ route('donation.campaign', ['id' => $campaign->id]) }}" style="text-decoration: none; color: black;">
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
                                            <form action="{{ route('donation.campaign', ['id' => $campaign->id]) }}" method="get">
                                                <button type="button" class="btn btn-primary btn-sm mx-2" style="background-color: #1D3EB3;">
                                                    <a href="{{ route('donation.campaign', ['id' => $campaign->id]) }}" class="text-white" style="text-decoration: none;">
                                                        <svg width="20" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M26.25 32.0833C25.0347 32.0833 24.0017 31.658 23.151 30.8073C22.3003 29.9566 21.875 28.9236 21.875 27.7083C21.875 27.5382 21.8872 27.3617 21.9115 27.1789C21.9358 26.9962 21.9722 26.8323 22.0208 26.6875L11.7396 20.7083C11.3264 21.0729 10.8646 21.3587 10.3542 21.5658C9.84375 21.7729 9.30903 21.876 8.75 21.875C7.53472 21.875 6.50174 21.4496 5.65104 20.5989C4.80035 19.7483 4.375 18.7153 4.375 17.5C4.375 16.2847 4.80035 15.2517 5.65104 14.401C6.50174 13.5503 7.53472 13.125 8.75 13.125C9.30903 13.125 9.84375 13.2285 10.3542 13.4356C10.8646 13.6427 11.3264 13.928 11.7396 14.2917L22.0208 8.31249C21.9722 8.16666 21.9358 8.00284 21.9115 7.82103C21.8872 7.63923 21.875 7.46277 21.875 7.29166C21.875 6.07638 22.3003 5.04339 23.151 4.1927C24.0017 3.342 25.0347 2.91666 26.25 2.91666C27.4653 2.91666 28.4983 3.342 29.349 4.1927C30.1997 5.04339 30.625 6.07638 30.625 7.29166C30.625 8.50693 30.1997 9.53992 29.349 10.3906C28.4983 11.2413 27.4653 11.6667 26.25 11.6667C25.691 11.6667 25.1562 11.5636 24.6458 11.3575C24.1354 11.1514 23.6736 10.8655 23.2604 10.5L12.9792 16.4792C13.0278 16.625 13.0642 16.7893 13.0885 16.9721C13.1128 17.1549 13.125 17.3308 13.125 17.5C13.125 17.6692 13.1128 17.8456 13.0885 18.0294C13.0642 18.2131 13.0278 18.3769 12.9792 18.5208L23.2604 24.5C23.6736 24.1354 24.1354 23.8501 24.6458 23.6439C25.1562 23.4378 25.691 23.3343 26.25 23.3333C27.4653 23.3333 28.4983 23.7587 29.349 24.6094C30.1997 25.4601 30.625 26.493 30.625 27.7083C30.625 28.9236 30.1997 29.9566 29.349 30.8073C28.4983 31.658 27.4653 32.0833 26.25 32.0833Z" fill="white"/>
                                                        </svg>
                                                    Check Donasi
                                                    </a>
                                                </button>
                                            </form>
                                            
                                            {{-- <form action="{{ route('donation.create', ['campaign' => $campaign->id]) }}" method="get"> --}}
                                                <button type="button" class="btn btn-success btn-sm mx-2" data-bs-toggle="modal" data-bs-target="#donationModal" data-campaign-id="{{ $campaign->id }}">
                                                    <svg width="20" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M29.1667 24.7917C30.0028 24.7917 30.7077 25.0833 31.2813 25.6667C31.8549 26.25 32.1369 26.9305 32.1271 27.7083L20.4167 32.0833L10.2084 29.1667V16.0417H13.0521L23.6542 19.9646C24.4126 20.266 24.7917 20.8104 24.7917 21.5979C24.7917 22.0548 24.6264 22.4535 24.2959 22.7937C23.9653 23.134 23.5473 23.3139 23.0417 23.3333H18.9584L16.4063 22.3562L15.9251 23.7271L18.9584 24.7917H29.1667ZM23.3334 4.71041C24.3639 3.51457 25.6765 2.91666 27.2709 2.91666C28.5931 2.91666 29.7112 3.40277 30.6251 4.37499C31.5389 5.34721 32.0251 6.46527 32.0834 7.72916C32.0834 8.73055 31.5973 9.92638 30.6251 11.3167C29.6528 12.7069 28.6952 13.8687 27.7521 14.8021C26.8091 15.7354 25.3362 17.1208 23.3334 18.9583C21.3112 17.1208 19.8237 15.7354 18.8709 14.8021C17.9181 13.8687 16.9605 12.7069 15.998 11.3167C15.0355 9.92638 14.5639 8.73055 14.5834 7.72916C14.5834 6.40693 15.0549 5.28888 15.998 4.37499C16.941 3.4611 18.0785 2.97499 19.4105 2.91666C20.966 2.91666 22.2737 3.51457 23.3334 4.71041ZM1.43506 16.0417H7.29173V32.0833H1.43506V16.0417Z" fill="white"/>
                                                    </svg>
                                                Tambah Donasi
                                            </button>                               
                                         {{-- </form> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach                                      
                </div>
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
                <h5 class="modal-title" id="donationModalLabel">Buat Donasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Donation form goes here -->
                <form action="{{ route('donation.adminstore', ['campaign' => $campaign->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <h5 for="nominal_donasi" class="form-label"><strong>Isi Nominal Donasi</strong></h5>
                        <div class="input-group input-group-lg mb-3 mt-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Rp.</span>
                            <input type="number" step="0.01" class="form-control" id="nominal_donasi" name="nominal_donasi" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        {{-- <h5 for="bukti_donasi" class="form-label">Bukti Donasi</h5> --}}
                        <div class="input-group input-group-lg mb-3">
                            <input type="file" class="form-control" id="bukti_donasi" name="bukti_donasi" placeholder="Bukti Pembayaran">
                            <label class="input-group-text" for="bukti_donasi">
                                <svg width="30" height="30" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24.9167 36.4167C24.9167 37.7583 25.1658 39.0425 25.5875 40.25H9.58333C8.56667 40.25 7.59165 39.8461 6.87276 39.1272C6.15387 38.4084 5.75 37.4333 5.75 36.4167V9.58333C5.75 7.475 7.475 5.75 9.58333 5.75H36.4167C37.4333 5.75 38.4084 6.15387 39.1272 6.87276C39.8461 7.59165 40.25 8.56667 40.25 9.58333V25.5875C39.0425 25.1658 37.7583 24.9167 36.4167 24.9167V9.58333H9.58333V36.4167H24.9167ZM26.7567 23.5558L21.4858 30.3408L17.7292 25.8175L12.4583 32.5833H25.5875C26.3542 30.4367 27.7342 28.5775 29.5167 27.2358L26.7567 23.5558ZM38.3333 34.5V28.75H34.5V34.5H28.75V38.3333H34.5V44.0833H38.3333V38.3333H44.0833V34.5H38.3333Z" fill="black" />
                                </svg>
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <h5 for="nama_lengkap" class="form-label">Masuk atau Lengkapi data dibawah ini</h5>
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="mb-3">
                        {{-- <h5 for="phone_email" class="form-label">Phone/Email</h5> --}}
                        <input type="text" class="form-control" id="phone_email" name="phone_email" placeholder="Nomor Ponsel Atau Email" required>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <h5 for="message" class="form-label">Sertakan Doa atau dukungan (Opsional)</h5>
                        <div class="input-group input-group-lg mb-3 mt-3">
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Tulis doa untuk Penggalang dana atau dirimu agar bisa di Amini oleh orang baik lainnya."></textarea>
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
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

<!-- JavaScript for handling image click event -->
{{-- <script>
    // Mengubah sumber gambar modal saat gambar diklik
    document.querySelectorAll('[data-bs-toggle="modal"]').forEach((element) => {
        element.addEventListener('click', (event) => {
            const modalImage = document.getElementById('modalImage');
            modalImage.src = event.target.getAttribute('data-src');
        });
    });
</script> --}}

<script>
    // Update form action when modal is triggered
    document.querySelectorAll('[data-bs-toggle="modal"]').forEach((element) => {
        element.addEventListener('click', (event) => {
            const campaignId = event.currentTarget.getAttribute('data-campaign-id');
            const form = document.querySelector('#donationModal form');
            const action = "{{ route('donation.adminstore', ['campaign' => ':campaignId']) }}".replace(':campaignId', campaignId);
            form.setAttribute('action', action);
        });
    });
</script>
