@extends('admin.layout.app')
@section('content')
<section class="content-header">
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Categories</h1>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="container-fluid">
        <div class="card">
            <div class="card-body table-responsive p-0">
                <a href="{{route('admin.catagories.create')}}"><button class="btn btn-success mb-5 mt-5 mx-5">Add Products</button></a>
<table class="table table-striped table-bordered">
    <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Image</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach  ($catagories as $catagory )
        <tr>
            <td>{{ $catagory->id }}</td>
            <td>{{ $catagory->name }}</td>
            <td>{{ $catagory->price }}</td>
            <td><img src="{{$catagory->image}}" height="100" width="100" alt=""></td>
            <td>
                <a href="{{route('admin.catagories.del', $catagory->id)}}">
                    <button class="btn btn-sm btn-danger">Del</button>
                </a>
                <a href="{{route('admin.catagories.edit', $catagory->id)}}">
                <button class="btn btn-sm btn-primary">Edit</button>
            </a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
            </div>
        </div>
    </div>
    <!-- /.card -->
</section>
@endsection

@section('customjs')
<script>

</script>
@endsection
