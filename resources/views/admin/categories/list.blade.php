@extends('admin.layout.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Categories({{$categories->total()}})</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Category</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                    <!-- /.card-header -->
                        <div class="card-header">
                            <a href="{{route('admin.category.create')}}" class="btn btn-primary">Add Category</a>
                            @if(session()->has('message'))<h4 class="flashMessage">{{session()->get('message')}}</h4>@endif
                        </div>
                        <!-- /.card-header -->
                        <!-- /.card-body -->
                        <div class="card-body">
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th style="width: 10px">No</th>
                                <th>Category Name</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td>{{$categories->firstItem()+$loop->index}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>
                                        <a href="{{route('admin.category.edit',encrypt($category->id))}}" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{route('admin.category.delete',encrypt($category->id))}}" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            {{$categories->links()}}
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->

            </div><!-- /.row -->

        </div><!-- /.container-fluid -->

    </section><!-- /.content -->

@endsection
