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
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nominal</th>
                                <th>Campaign</th>
                                <th>Bukti Donasi</th>
                                <th>Nama Lengkap</th>
                                <th>No Telpn / Email</th>
                                <th>Pesan</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($donations as $donation)
                            <tr>
                                <td>{{ $donation->id }}</td>
                                <td>{{ $donation->nominal_donasi }}</td>
                                <td style="">{{ $donation->campaign->title }}</td>
                                <td><img src="{{ Storage::url($donation->bukti_donasi) }}" alt="Bukti Donasi" width="80" height="100" data-bs-toggle="modal" data-bs-target="#imageModal" data-src="{{ Storage::url($donation->bukti_donasi) }}"></td>
                                <td>{{ $donation->nama_lengkap }}</td>
                                <td>{{ $donation->phone_email }}</td>
                                <td>{{ $donation->message }}</td>
                                <td>{{ $donation->status }}</td>
                                <td>
                                    {{-- @if($donation->status === 'accepted')
                                    <form action="{{ route('donation.destroy', $donation) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                    @else --}}
                                    <form action="{{ route('donation.accept', $donation) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        <button type="submit" class="btn btn-success btn-sm">Accept</button>
                                    </form>
                                    <form action="{{ route('donation.reject', $donation) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Reject</button>
                                    </form>
                                    {{-- @endif --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>                                     
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

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

<!-- JavaScript for handling image click event -->
<script>
    // Mengubah sumber gambar modal saat gambar diklik
    document.querySelectorAll('[data-bs-toggle="modal"]').forEach((element) => {
        element.addEventListener('click', (event) => {
            const modalImage = document.getElementById('modalImage');
            modalImage.src = event.target.getAttribute('data-src');
        });
    });
</script>
