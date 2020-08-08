@extends('dashboard.layouts.main')
@section('title') All course @endsection
@section('main-content')
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">All course</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">All course</li>
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
                            <div class="card-body">
                                {{-- --------------------- --}}
                                @foreach ($courses as $course)
                                <div class="col-md-12 col-lg-12 col-xl-12">
                                    <div class="card m-b-30">
                                    <div class="row no-gutters">
                                        <div class="col-md-7">
                                        <img src="{{ filePath($course->thumbnail) }}" class="card-img h-100" alt="Card image">
                                        </div>
                                        <div class="col-md-5">
                                        <div class="card-body">
                                            <h5 class="card-title font-18">{{ $course->name }}</h5>
                                            <p class="card-text">
                                                @php
                                                    echo $course->short_desc
                                                @endphp
                                            </p>
                                            <p class="card-text"><small class="text-muted">Last updated {{ $course->updated_at->diffForHumans() }}</small></p>
                                            <a href="{{ route('course.show', $course->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="{{ route('course.destroy', $course->id) }}" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                @endforeach
                                {{-- --------------------- --}}
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                </div>

            </div>
    </div>
@endsection
