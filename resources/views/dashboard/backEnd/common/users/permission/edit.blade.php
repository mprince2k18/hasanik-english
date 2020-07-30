@extends('dashboard.layouts.main')
@section('title')
    Permission Update
@endsection

@section('main-content')

    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Image Crop</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Image Crop</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="widgetbar">
                    <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbbar -->
    <div class="contentbar">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Update Permission</h3>

                    <div class="float-right">
                        <a class="btn btn-success" href="{{ route("permissions.index") }}">
                            Permissions List
                        </a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-2">
                    <form action="{{route('permissions.update')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$permission->id}}"/>
                        <div class="">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name)</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ $permission->name }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Slug</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" value="{{ $permission->slug }}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Description</label>
                                <div class="mb-3 col-md-6">
                                    <textarea class="textarea sr-textarea" name="description"
                                              placeholder="Place some text here)">{{ $permission->description }}</textarea>
                                </div>
                            </div>


                        </div>
                        <button class="btn btn-primary m-2" type="submit">Update</button>
                    </form>
                </div>

            </div>
    </div>
@endsection
