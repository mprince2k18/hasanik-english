@extends('dashboard.layouts.main')
@section('title') About Us @endsection
@section('main-content')
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">About Us</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
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
                          <!-- Start col -->
                            <div class="col-lg-12">
                                <div class="card m-b-30">
                                    <div class="card-header">
                                        <h5 class="card-title">About {{ env('APP_NAME') }}</h5>
                                    </div>
                                    <div class="col-md-12">

                            <form action="{{ route('about.store') }}" method="post">
                                @csrf
                                <input type="hidden" value="about" name="type">
                                    
                                    <div class="card-body">
                                        <textarea name="desc" class="form-control summernote">{{ page('about')->desc ?? '' }}</textarea>
                                    </div>
                                <div class="text-right">
                                    <button class="btn btn-primary" type="submit">Save Change</button>
                                </div>
                            </form>
                                </div>
                            </div>
                            <!-- End col -->
                          {{-- --------------------- --}}
                                {{-- --------------------- --}}
                          <!-- Start col -->
                            <div class="col-lg-12">
                                <div class="card m-b-30">
                                    <div class="card-header">
                                        <h5 class="card-title">{{ env('APP_NAME') }}'s Misson</h5>
                                    </div>
                                    <div class="card-body">
                                    <form action="{{ route('mission.store') }}" method="post">
                                        @csrf
                                        <input type="hidden" value="mission" name="type">
                                        <textarea name="desc" class="form-control summernote" id="" cols="30" rows="10">{{ page('mission')->desc ?? '' }}</textarea>
                                        <div class="text-right">
                                            <button class="btn btn-primary" type="submit">Save Change</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End col -->
                          {{-- --------------------- --}}
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                </div>

            </div>
    </div>
@endsection
