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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data PPDB</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>TTG</th>
                                        <th>Jenis Kelamin</th>
                                        <th>NISN</th>
                                        <th>Alamat</th>
                                        <th>Anak ke</th>
                                        <th>Dari (Saudara)</th>
                                        <th>No Tlpn</th>
                                        <th>Nama Ayah/Wali</th>
                                        <th>Nama Ibu</th>
                                        <th>Alamat Ortu</th>
                                        <th>Kerja Ayah/Wali</th>
                                        <th>Kerja Ibu</th>
                                        <th>No Tlpn Ayah/Wali</th>
                                        <th>No Tlpn Ibu</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ppdb as $pp)
                                    <tr>
                                        <td>{{ $pp->id }}</td>
                                        <td>{{ $pp->nama_siswa }}</td>
                                        <td>{{ $pp->ttg_siswa }}</td>
                                        <td>{{ $pp->jenis_kelamin }}</td>
                                        <td>{{ $pp->nisn }}</td>
                                        <td>{{ $pp->alamat_siswa }}</td>
                                        <td>{{ $pp->anak }}</td>
                                        <td>{{ $pp->saudara }}</td>
                                        <td>{{ $pp->tlpn_siswa }}</td>
                                        <td>{{ $pp->nama_ayah }}</td>
                                        <td>{{ $pp->nama_ibu }}</td>
                                        <td>{{ $pp->alamat_ortu }}</td>
                                        <td>{{ $pp->pekerjaan_ayah }}</td>
                                        <td>{{ $pp->pekerjaan_ibu }}</td>
                                        <td>{{ $pp->tlpn_ayah }}</td>
                                        <td>{{ $pp->tlpn_ibu }}</td>
                                        <td>
                                            <form action="{{ route('ppdb.destroy', $pp->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@include('layout.footer')
