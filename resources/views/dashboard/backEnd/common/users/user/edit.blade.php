@extends('dashboard.layouts.main')
@section('title')
    User Update
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
                    <h3 class="card-title">Update User</h3>

                    <div class="float-right">
                        <div class="">
                            <a class="btn btn-success" href="{{ route("users.index") }}">
                                User List
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-2">
                    <form action="{{route('users.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$user->id}}"/>
                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input type='file' name="avatar" id="imageUpload" accept=".png, .jpg, .jpeg"/>
                                <label for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview"
                                     style="background-image: url({{filePath($user->avatar)}});">
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ $user->name}}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail
                                    Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ $user->email}}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Phone number</label>

                                <div class="col-md-6">
                                    <input id="name" type="tel"
                                           class="form-control @error('tel_number') is-invalid @enderror"  name="tel_number"
                                           value="{{ $user->tel_number}}"  autocomplete="name" autofocus>

                                    @error('tel_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Select Gender</label>
                                <div class="col-md-6">
                                    <select class="form-control select2 w-100 @error('genders') is-invalid @enderror" required name="genders">
                                        <option value=""></option>
                                        <option value="Male" {{$user->genders == "Male" ? 'selected': null}}>
                                            Male)
                                        </option>
                                        <option value="Female" {{$user->genders == "Female" ? 'selected': null}}>
                                            Female)
                                        </option>
                                        <option value="Other" {{$user->genders == "Other" ? 'selected': null}}>
                                            Other)
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Select Groups</label>
                                <div class="col-md-6">
                                    <select class="form-control select2 w-100" name="group_id[]" multiple required>
                                        @foreach($groups as $item)
                                            <option value="{{$item->id}}"
                                            @foreach($user->groups as $item1)
                                                {{$item1->id == $item->id ? 'selected' : null}}
                                                @endforeach
                                            >{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary m-2" type="submit">Update</button>
                    </form>
                </div>

            </div>
    </div>

@endsection
