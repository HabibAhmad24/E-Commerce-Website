@extends('admin.layout.app')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Category</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="categories.html" class="btn btn-primary">Back</a>
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
        <form action="{{ Route('admin.catagories.store') }}" method="post" enctype="multipart/form-data" name="catagoryform" id="catagoryform">@csrf
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control" placeholder="Name">
                            @if ($errors->has('name'))
                            <span class="text-danger">{{$error->first('name')}}</span>
                          @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 form-group">
                            <label for="email">Price</label>
                            <input type="number" name="price" id="price" value="{{old('price')}}" class="form-control" placeholder="Price">
                            @if ($errors->has('price'))
                            <span class="text-danger">{{$error->first('price')}}</span>
                          @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 form-group">
                            <label for="email">Upload Image</label>
                            <input type="file" name="image" id="image" value="{{old('image')}}" class="form-control" placeholder="Uplod Image">
                            @if ($errors->has('image'))
                            <span class="text-danger">{{$error->first('image')}}</span>
                          @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pb-5 pt-3">
            <button class="btn btn-primary" type="submit" name="submit">Create</button>

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
