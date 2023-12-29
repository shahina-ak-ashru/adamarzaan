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
                <h3 class="card-title">Edit Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form action="{{route('admin.product.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" class="form-control" value="{{encrypt($product->id)}}" name="product_id">
                    <div class="card-body">
                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" class="form-control" value="{{$product->name}}" name="name" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" value="{{$product->price}}" name="price" placeholder="Enter Price">
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select name="category_id" id="" class="form-control">
                            <option value="">Select Option</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}" @selected($product->category_id == $category->id)>{{$category->name}} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <input type="radio" @checked($product->status == 1) value="1" id="" name="status"/>Active
                        <input type="radio"  @checked($product->status == 0) value="0" id="" name="status"/>Inactive
                    </div>
                    <div class="form-group">
                        <label>Is Favourite</label>
                        <input type="radio" @checked($product->is_favourite == 1) value="1" id="" name="is_favourite"/>Yes
                        <input type="radio" @checked($product->is_favourite == 0)  value="0" id="" name="is_favourite"/>No
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
                        <img src="{{url('storage/images/'.$product->image)}}" width="100"/>
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
