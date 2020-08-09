@extends('dashboard.layouts.main')
@section('title') Profile @endsection
@section('main-content')
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Profile</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
                                <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <form class="needs-validation" action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data" novalidate>
                        @csrf

                        <div class="col-md-8 mb-3">
                                <label for="title">Name*</label>
                                <input type="text" id="title" name="name"  value="{{ Auth::user()->name }}" class="form-control" placeholder="Name" required>
                                    <div class="invalid-tooltip">
                                Please choose a unique and valid username.
                                </div>
                              </div>
                           
                                <div class="col-md-12 mb-3">
                                <label for="email">Email*</label>
                                <input type="email" id="email" name="email"  value="{{ Auth::user()->email }}" class="form-control" readonly placeholder="Email" required>
                                    <div class="invalid-tooltip">
                                Please choose a unique and valid username.
                                </div>
                            </div>
                           
                                <div class="col-md-12 mb-3">
                                <label for="password">New Password*</label>
                                <input type="password" id="password" name="new_password"  class="form-control" placeholder="New Password">
                                    <div class="invalid-tooltip">
                                Please choose a unique and valid username.
                                </div>
                            </div>
                           
                           
                           


                      <button class="btn btn-primary" type="submit">Send Data</button>
                    </form>

                </div>
            </div>
        </div>
                                {{-- --------------------- --}}
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                </div>

            </div>
    </div>
@endsection
