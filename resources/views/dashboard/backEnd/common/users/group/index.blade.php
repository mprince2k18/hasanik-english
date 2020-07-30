@extends('dashboard.layouts.main')
@section('title') Group List @endsection
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
                <h3 class="card-title">Group List</h3>

                <div class="float-right">
                    <a class="btn btn-success" href="{{ route("groups.create") }}">
                        Add Group
                    </a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-2">

                <!-- there are the main content-->
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>S/L</th>
                            <th>Name</th>
                            <th>Permission</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($groups as $item)
                        <tr>
                            <td> {{$loop->index+1}}</td>
                            <td>Name) : {{$item->name}} <br> Slug) : {{$item->slug}}</td>
                            <td>
                                @foreach($item->permissions as $items)
                                    <span class="badge badge-success">{{$items->name}}</span>,
                                @endforeach
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
                                        <li><a  href="{{ route('groups.edit', $item->id) }}">Edit</a></li>
                                        <li><a href="{{ route('groups.show', $item->id) }}">Show</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#!"
                                               onclick="confirm_modal('{{route('modules.destroy',$item->id)}}')">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                    <tr>
                        <th>S/L</th>
                        <th>Name</th>
                        <th>Permission</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>

@endsection
