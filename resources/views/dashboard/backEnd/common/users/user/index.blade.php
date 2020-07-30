@extends('dashboard.layouts.main')
@section('title')
    User List
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
            <h3 class="card-title">User List</h3>

            <div class="float-right">
                <a class="btn btn-success" href="{{ route("users.create") }}">
                    Add User
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
                    <th>Avatar</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Groups</th>
                    <th>Last Login</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $item)
                    <tr>
                        <td>
                            {{$loop->index+1}}
                        </td>
                        <td>
                            <img src="{{filePath($item->avatar)}}" width="80" height="80" class="img-circle">
                        </td>
                        <td>Name : {{$item->name}} <br>
                        <strong>{{$item->gendear}}</strong>
                        </td>
                        <td> Email : <a href="Mail:{{$item->email}}" class="text-info">{{$item->email}}</a><br>
                            Phone : <a href="Tel:{{$item->tel_number}}" class="text-info">{{$item->tel_number}}</a>
                        <td>
                            @foreach($item->groups as $items)
                                <span class="badge badge-success">{{$items->name}}</span>,
                            @endforeach
                        </td>
                        <td>
                            @if($item->login_time != null)
                                <span class="badge badge-info">{{\Carbon\Carbon::parse($item->login_time)->diffForHumans() ?? ''}}</span>
                            @endif
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
                                    @if(\Illuminate\Support\Facades\Auth::id() == $item->id)
                                        <li><a href="{{ route('users.edit') }}">Profile)</a></li>
                                    @endif
                                    <li><a href="{{ route('users.show', $item->id) }}">Show</a></li>
                                    @if(\Illuminate\Support\Facades\Auth::id() != $item->id)
                                        <li class="divider"></li>
                                        <li><a href="#!"
                                               onclick="confirm_modal('{{ route('users.banned',$item->id) }}')">Delete</a>
                                        </li>
                                    @endif
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
                    <th>Groups</th>
                    <th>Action</th>
                </tr>
                </tfoot>
            </table>
        </div>

    </div>
    </div>

@endsection
