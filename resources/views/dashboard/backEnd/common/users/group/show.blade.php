@extends('dashboard.layouts.main')
@section('title') Group Details @endsection
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
                    <h3 class="card-title">Group</h3>

                    <div class="float-right">
                        <a class="btn btn-success" href="{{ route("groups.index") }}">
                            Group List
                        </a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-2">
                    <form>
                        <div class="">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $group->name }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Slug</label>
                                <div class="col-md-6">
                                    <input  type="text" class="form-control" value="{{ $group->slug }}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Description</label>
                                <div class="mb-3 col-md-6">
                                    {!! $group->description !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Permission List</label>
                                <div class="mb-3 col-md-6">
                                        @foreach($group->permissions as $item)
                                            <span class="badge badge-success">{{$item->name}}</span>,
                                        @endforeach
                                </div>
                            </div>


                        </div>
                    </form>
                </div>

            </div>
    </div>

@endsection
