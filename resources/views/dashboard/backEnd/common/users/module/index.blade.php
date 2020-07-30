@extends('dashboard.layouts.main')
@section('title') Module List @endsection
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
                    <h2 class="card-title">Module Permission List</h2>
                </div>
                <div class="card-body">
                    <!--begin: Datatable -->
                    <table class="table data-table">
                        <thead>
                        <tr>
                            <th>S/L</th>
                            <th>Name</th>
                            <th>Permissions</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($modules as $item)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$item->name}}</td>
                                <td>
                                    @forelse($item->permissions as $permission)
                                        <span class="badge badge-info">{{$permission->permission->name}}</span>
                                    @empty
                                        <span class="badge badge-danger">No permission</span>
                                    @endforelse
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info btn-flat">Action</button>
                                        <button type="button" class="btn btn-info btn-flat dropdown-toggle"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu p-2" role="menu">
                                            <li><a href="#!"
                                                   onclick="forModal('{{route('modules.edit',$item->id)}}','Module permission edit')">Edit)</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#!"
                                                   onclick="confirm_modal('{{route('modules.destroy',$item->id)}}')">Delete)</a>
                                            </li>
                                        </ul>
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
                    <h3 class="card-title">Module Setup</h3>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" enctype="multipart/form-data"
                          action="{{ route('modules.store') }}"
                          method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="">
                                <label class="control-label">Name <span class="text-danger">*</span></label>
                            </div>
                            <div class="">
                                <input type="text" class="form-control" name="name" required
                                       placeholder="Ex: For category)">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Select permissions <span
                                    class="text-danger">*</span></label>
                            <div class="">
                                <select class="form-control select2" name="p_id[]" multiple required>
                                    <option value=""></option>
                                    @foreach($permissions as $permission)
                                        <option value="{{$permission->id}}"> {{$permission->name}}</option>
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
    <!--there are the main content-->
    </div>

@endsection


