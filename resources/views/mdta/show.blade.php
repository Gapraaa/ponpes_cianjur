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
                <h1>Paud Slider</h1>
                <a href="" class="btn btn-primary mb-3" data-bs-toggle="modal"
                data-bs-target="#paudModal">Tambah</a>
            
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Slider</th>
                            <th>image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pauds as $paud)
                            <tr>
                                <td>{{ $paud->id }}</td>
                                <td>{{ $paud->option }}</td>
                                <td><img src="{{ Storage::url($paud->image) }}" alt="image" width="100" height="100" data-bs-toggle="modal" data-bs-target="#imageModal" data-src="{{ Storage::url($paud->image) }}"></td>
                                <td>
                                    <a href="{{ route('paud.show')}}" class="btn btn-primary">View</a>
                                    <!-- Add other actions like edit and delete if needed -->
                                    <form action="{{ route('paud.destroy', $paud->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
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

<!-- Modal Form Donasi-->
<div class="modal fade" id="paudModal" tabindex="-1" aria-labelledby="paudModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paudModalLabel"><strong>Paud Slider</strong></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('paud.store')}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        {{-- <h5 for="nominal_donasi" class="form-label"><strong>Isi Nominal Donasi</strong></h5> --}}
                        <div class="input-group input-group-lg mb-3 mt-3">
                            {{-- <span class="input-group-text" id="inputGroup-sizing-default">Rp.</span> --}}
                            <select name="option" id="option" class="form-control" required>
                                <option value="" disabled selected>Select an option</option>
                                <option value="HeaderSlider">HeaderSlider</option>
                                <option value="KegiatanSlider">KegiatanSlider</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        {{-- <h5 for="bukti_donasi" class="form-label">Bukti Donasi</h5> --}}
                        <div class="input-group input-group-lg mb-3">
                            <input type="file" class="form-control" id="image" name="image"
                                placeholder="Masukan Gambar">
                            <label class="input-group-text" for="image">
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
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary p-3">Submit</button>
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
