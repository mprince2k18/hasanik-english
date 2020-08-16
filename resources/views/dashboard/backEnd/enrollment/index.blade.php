@extends('dashboard.layouts.main')
@section('title') Enroll List @endsection
@section('main-content')
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">title</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Enroll List</li>
                    </ol>
                </div>
            </div>
            {{-- <div class="col-md-4 col-lg-4">
                <div class="widgetbar">
                    <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- End Breadcrumbbar -->
    <div class="contentbar">
            <div class="card">
                
                <!-- /.card-header -->
                <div class="card-body p-2">
                    <!-- Start col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Enrolled Students List</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel & Note.</h6>
                                <div class="table-responsive">
                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>S/L</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Gender</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                    @foreach ($enrolls as $enroll)
                                        <tr>
                                            <td>{{ $loop->index++ + 1 }}</td>
                                            <td>{{ $enroll->name }}</td>
                                            <td>
                                              <a href="mailto:{{ $enroll->email }}">{{ $enroll->email }}</a>
                                            </td>
                                            <td>
                                              <a href="tel:{{ $enroll->phone }}">{{ $enroll->phone }}</a>
                                            </td>
                                            <td>{{ $enroll->gender }}</td>
                                            <td>{{ $enroll->created_at->diffForHumans() }}</td>
                                            <td>
                                              <a href="#!"  onclick="forModal('{{route('enrollment.view', $enroll->id) }}','View')">VIEW</a>
                                              <a href="{{ route('enrollment.destroy') }}" class="btn-sm btn-danger">Trash</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                </div>

            </div>
    </div>
@endsection
