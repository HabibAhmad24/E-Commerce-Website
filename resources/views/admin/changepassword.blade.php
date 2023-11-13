@extends('admin.layout.app')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Category</h1>
                </div>

            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
<section class="content">
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
      <strong>{{$message}}</strong>
    <!-- Default box --> @endif
    <div class="container-fluid">
        <h3>{{$catagory->name}}</h3>
        <form action="{{route('admin.catagories.update',$catagory->id)}}" method="POST" enctype="multipart/form-data" name="catagoryform" id="catagoryform"> @csrf
            @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $catagory->name) }}" class="form-control" placeholder="Name">
                            @if ($errors->has('name'))
                            <span class="text-danger">{{$error->first('name')}}</span>
                          @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="email">Price</label>
                            <input type="number" name="price" id="price" value="{{ old('price', $catagory->price) }}" class="form-control" placeholder="Price">
                            @if ($errors->has('price'))
                            <span class="text-danger">{{$error->first('price')}}</span>
                          @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Image</label>
                            <input type="file" class="form-control" placeholder="Image" value="{{ old('image') }}" name="image">
                            @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                        <img src="{{ asset('admin/catagories/' . $catagory->image) }}" height="100" width="100" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="pb-5 pt-3">
            <button class="btn btn-primary" type="submit" name="submit">Update</button>
        </div>
    </form>
    </div>
    <!-- /.card -->
</section>
@endsection

@section('customjs')
<script>

</script>
@endsection
