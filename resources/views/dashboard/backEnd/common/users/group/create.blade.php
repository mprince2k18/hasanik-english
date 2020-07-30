@extends('dashboard.layouts.main')
@section('title') Group Create @endsection
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
                    <h3 class="card-title">Create Group</h3>

                    <div class="float-right">
                        <a class="btn btn-success" href="{{ route("groups.index") }}">
                            Group List
                        </a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-2">
                    <form action="{{route('groups.store')}}" method="post">
                        @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Description</label>
                                <div class="mb-3 col-md-6">
                                    <textarea class="textarea sr-textarea" name="description"
                                              placeholder="Place some text here)"></textarea>
                                </div>
                            </div>

                            <hr/>

                            <div class="form-group">
                                <label class="col-form-label text-md-right font-weight-bold">Select Permission</label>
                                <div class="col-md-12">
                                    <div class="row">
                                        @forelse($modules as $m)
                                            <div class="col-md-4 card p-5">
                                                <h2 class="card-title py-2">Module): {{$m->name}}</h2>
                                                @foreach($m->permissions as $item)
                                                    <div class="form-group">
                                                        <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                            <input type="checkbox" value="{{$item->permission->id}}"  name="permission_id[]" class="custom-control-input"
                                                                   id="customSwitch{{$item->id}}">
                                                            <label class="custom-control-label"
                                                                   for="customSwitch{{$item->id}}">{{$item->permission->name}}</label>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @empty
                                            <span class="badge badge-danger">No permission</span>
                                        @endforelse
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary" type="submit">Save</button>
                    </form>
                </div>

            </div>
    </div>
@endsection
