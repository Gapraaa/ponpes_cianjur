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
                <h1>Berita</h1>
                <a href="{{ route('berita.create') }}" class="btn btn-primary mb-3">Create Berita Baru</a>
            
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($beritas as $berita)
                            <tr>
                                <td>{{ $berita->id }}</td>
                                <td>{{ $berita->title }}</td>
                                <td><img src="{{ Storage::url($berita->image) }}" alt="image" width="100" height="100"></td>
                                <td>
                                    <a href="{{ route('berita.show')}}" class="btn btn-primary">View</a>
                                    <!-- Add other actions like edit and delete if needed -->
                                    <form action="{{ route('berita.delete', $berita->id) }}" method="POST" style="display:inline;">
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
