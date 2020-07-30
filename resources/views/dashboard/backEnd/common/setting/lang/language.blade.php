@extends('dashboard.layouts.main')
@section('title') Language List) @endsection
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
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Language List</h2>
                </div>
                <div class="card-body">
                    <!--begin: Datatable -->
                    <table class="table data-table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Flag</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($languages as $item)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$item->code}}</td>
                                <td>
                                    {{$item->name ?? 'N/A'}}
                                </td>
                                <td>
                                    <img
                                        src="{{asset('images/lang/'.$item->image)}}" class="" height="30px"
                                        alt=""/>
                                </td>
                                <td>
                                    <div class="btn-group-vertical">
                                        <a class="btn btn-primary"
                                           href="{{route('language.translate',$item->id)}}">Translate</a>
                                        <a class="btn btn-default"
                                           href="{{route('language.default',$item->id)}}">Set
                                            Default</a>
                                        <a class="btn btn-warning" href="#!"
                                           onclick="confirm_modal('{{ route('language.destroy', $item->id) }}')">Delete</a>

                                    </div>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!--end: Datatable -->
                </div>
            </div>

        </div>
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Language Setup</h3>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" enctype="multipart/form-data"
                          action="{{ route('language.store') }}"
                          method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="">
                                <label class="control-label">Name <span class="text-danger">*</span></label>
                            </div>
                            <div class="">
                                <input type="text" class="form-control" name="name" required
                                       placeholder="Ex: English">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <label class="control-label">Code <span class="text-danger">*</span></label>
                            </div>
                            <div class="">
                                <input type="text" class="form-control" name="code" required
                                       placeholder="Ex: en for english">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Select country flag <span
                                    class="text-danger">*</span></label>
                            <div class="">
                                <select class="form-control lang" name="image" required>
                                    <option value=""></option>
                                    @foreach(readFlag() as $item)
                                        @if ($loop->index >1)
                                            <option value="{{$item}}"
                                                    data-image="{{asset('images/lang/'.$item)}}"> {{flagRenameAuto($item)}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12 text-right">
                                <button class="btn btn-primary btn-block" type="submit">Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--there are the main content-->

@endsection


