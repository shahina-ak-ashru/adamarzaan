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
                <h3 class="card-title">Add Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form action="{{route('admin.product.save')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" name="price" placeholder="Enter Price">
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select name="category_id" id="" class="form-control">
                            <option value="">Select Option</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <input type="radio"  value="1" id="" name="status"/>Active
                        <input type="radio"  value="0" id="" name="status"/>Inactive
                    </div>
                    <div class="form-group">
                        <label>Is Favourite</label>
                        <input type="radio"  value="1" id="" name="is_favourite"/>Yes
                        <input type="radio"  value="0" id="" name="is_favourite"/>No
                    </div>
                    <div class="form-group">
                    <label>File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image">
                        <label class="custom-file-label" >Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>

                    </div>
                <!-- /.card-body -->

                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
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
