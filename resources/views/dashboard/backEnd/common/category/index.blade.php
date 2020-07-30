@extends('dashboard.layouts.main')
@section('title') Categories @endsection
@section('parentPageTitle', 'All Category')
@section('main-content')
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Category</h4>
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
                    <a href="#!"
                       onclick="forModal('{{ route('categories.create') }}', 'Category Create')"
                       class="btn btn-primary-rgba">
                        <i class="feather icon-plus mr-2"></i>
                        Add New Category
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbbar -->
    <!-- Start Contentbar -->
    <div class="contentbar">
        <!-- Start row -->
    <div class="card m-2">
        <div class="card-header">
            <div class="float-left">
                <h2 class="card-title">Categories List</h2>
            </div>
            <div class="float-right">
                <div class="row">
                    <div class="col">
                        <form method="get" action="">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control col-12"
                                       placeholder="Category Name)" value="{{Request::get('search')}}">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-striped- table-bordered table-hover text-center">
                <thead>
                <tr>
                    <th>S/L)</th>
                    <th class="text-left">Category</th>
                    <th>Action)</th>
                </tr>
                </thead>
                <tbody>
                @forelse($categories as  $item)
                    <tr>
                        <td>{{ ($loop->index+1) + ($categories->currentPage() - 1)*$categories->perPage() }}</td>
                        <td class="text-left">{{$item->name}}</td>
                        
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info btn-flat">Action</button>
                                <button type="button" class="btn btn-info btn-flat dropdown-toggle"
                                        data-toggle="dropdown" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu p-2" role="menu">
                                    <li><a  href="#!" onclick="forModal('{{ route('categories.edit', $item->id) }}', 'Category Edit)')">Edit</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#!"
                                           onclick="confirm_modal('{{ route('categories.destroy', $item->id) }}')">Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        
                    </tr>
                @empty
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr>
                        <td><h3 class="text-center">No Data Found</h3></td>
                    </tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                @endforelse
                </tbody>
                <div class="float-left">
                    {{ $categories->links() }}
                </div>
            </table>
        </div>
    </div>
    </div>

@endsection
