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
                            <th>Description</th>
                            <th>Target Amount</th>
                            <th>Amount</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($campaigns as $campaign)
                            <tr>
                                <td>{{ $campaign->id }}</td>
                                <td><img src="{{ Storage::url($campaign->image) }}" alt="image" width="80" height="100"></td>
                                <td>{{ $campaign->title }}</td>
                                <td>{{ $campaign->description }}</td>
                                <td>{{ $campaign->target_amount }}</td>
                                <td>{{ $campaign->amount }}</td>
                                <td>
                                    <a href="{{ route('campaign.show')}}" class="btn btn-primary">View</a>
                                    <!-- Add other actions like edit and delete if needed -->
                                    <form action="{{ route('campaign.delete', $campaign->id) }}" method="POST" style="display:inline;">
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
