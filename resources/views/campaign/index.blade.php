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
                <h1>Campaigns</h1>
                <a href="{{ route('campaign.create') }}" class="btn btn-primary mb-3">Create New Campaign</a>
            
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>image</th>
                            <th>Title</th>
                            <th>Target Amount</th>
                            <th>Amount</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($campaigns as $campaign)
                            <tr>
                                <td>{{ $campaign->id }}</td>
                                <td><img src="{{ Storage::url($campaign->image) }}"  alt="image" width="80" height="100" data-bs-toggle="modal" data-bs-target="#imageModal" data-src="{{ Storage::url($campaign->image) }}"></td>
                                <td>{{ $campaign->title }}</td>
                                <td>Rp. {{ number_format($campaign->target_amount, 0, ',', '.') }}</td>
                                <td>Rp. {{ number_format($campaign->amount, 0, ',', '.') }}</td>
                                <td>
                                    <form action="{{ route('campaign.admindetail', ['id' => $campaign->id]) }}" method="get">
                                        <button type="button" class="btn btn-primary" style=" width: 80px; ">
                                            <a href="{{ route('campaign.admindetail', ['id' => $campaign->id]) }}" class="text-white" style="text-decoration: none;">
                                            View
                                            </a>
                                        </button>
                                    </form>
                                    <!-- Add other actions like edit and delete if needed -->
                                    <form action="{{ route('campaign.delete', $campaign->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" style=" width: 80px; ">Delete</button>
                                    </form>
                                    <br>
                                    <form action="{{ route('campaign.edit', $campaign->id) }}" method="GET">
                                        <button type="button" class="btn btn-warning" style=" width: 80px; ">
                                            <a href="{{ route('campaign.edit', $campaign->id) }}" class="text-white" style="text-decoration: none;">
                                            Edit
                                            </a>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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
                <h5 class="modal-title" id="imageModalLabel">Image</h5>
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
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

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
