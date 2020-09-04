@extends('Backend.main')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{route('admin::addSlider')}}" class="btn btn-primary">Add</a>
                                <h3 class="card-title"></h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
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
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($getSliders as $getSlider)
                                    <tr>
                                        <td>{{isset($getSlider->id) ? $getSlider->id : ''}}</td>
                                        <td><img src="{{url('/')}}/uploads/slider/{{$getSlider->image}}" alt="Girl in a jacket" width="80" height="80"></td>
                                        <td>{{isset($getSlider->title) ? $getSlider->title : ''}}</td>
                                        <td>{{$getSlider->created_at->diffForHumans()}} </td>
                                        <td>
                                            <a href="{{route('admin::editSlider',$getSlider->id)}}" class="btn btn-primary">Edit</a>
                                            <a href="{{route('admin::deleteSlider',$getSlider->id)}}" class="btn btn-danger">Delete</a>
                                        </td>
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
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    </div>
    <!-- /.content-wrapper -->

@endsection
