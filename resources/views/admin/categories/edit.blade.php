@extends('admin.layout.master')
@section('content')
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">

        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">General Form</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Category</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
              <form action="{{route('admin.category.update')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" class="form-control" value="{{encrypt($category->id)}}" name="category_id">
                  <div class="card-body">
                  <div class="form-group">
                      <label>Category Name</label>
                      <input type="text" class="form-control" value="{{$category->name}}" name="name" placeholder="Enter Name">
                  </div>

                  </div>
              <!-- /.card-body -->

                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                  </div>
              </form>
          </div>

        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  @endsection
