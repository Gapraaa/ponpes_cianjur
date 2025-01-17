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
                <h1>Edit Campaign</h1>
            
                <form action="{{ route('campaign.update', $campaign->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Campaign Name</label>
                        <textarea class="form-control" id="title" name="title" required>{{ $campaign->title }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" required>{{ $campaign->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="target_amount" class="form-label">Target Amount</label>
                        <input type="number" class="form-control" id="target_amount" name="target_amount" value="{{ $campaign->target_amount }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Campaign Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                        @if($campaign->image)
                            <img src="{{ asset('storage/' . $campaign->image) }}" alt="Campaign Image" class="mt-2" style="max-width: 200px;">
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Update Campaign</button>
                </form>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('layout.footer')
