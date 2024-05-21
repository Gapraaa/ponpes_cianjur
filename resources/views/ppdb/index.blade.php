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
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>

                            <p>New Orders</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>

                            <p>Bounce Rate</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>44</h3>

                            <p>User Registrations</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>65</h3>

                            <p>Unique Visitors</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ppdb as $pp)
                                    <tr>
                                        <td>{{$ppdb->id}}</td>
                                        <td>{{$ppdb->nama_siswa}}</td>
                                        <td>{{$ppdb->ttg_siswa}}</td>
                                        <td>{{$ppdb->jenis_kelamin}}</td>
                                        <td>{{$ppdb->nisn}}</td>
                                        <td>{{$ppdb->alamat_siswa}}</td>
                                        <td>{{$ppdb->anak}}</td>
                                        <td>{{$ppdb->saudara}}</td>
                                        <td>{{$ppdb->tlpn_siswa}}</td>
                                        <td>{{$ppdb->nama_ayah}}</td>
                                        <td>{{$ppdb->nama_ibu}}</td>
                                        <td>{{$ppdb->alamat_ortu}}</td>
                                        <td>{{$ppdb->pekerjaan_ayah}}</td>
                                        <td>{{$ppdb->pekerjaan_ibu}}</td>
                                        <td>{{$ppdb->tlpn_ayah}}</td>
                                        <td>{{$ppdb->tlpn_ibu}}</td>
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
