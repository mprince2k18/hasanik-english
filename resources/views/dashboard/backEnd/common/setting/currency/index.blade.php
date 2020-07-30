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
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="card m-2">
                <div class="card-header">
                    <h2 class="card-title">Setup Currency Setting</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('currencies.default')}}">
                        @csrf

                        <label class="label">Select Default</label>
                        <input type="hidden" value="default_currencies" name="type_default">
                        <select class="form-control select2" name="default">
                            <option value=""></option>
                            @foreach($dCurrencies as $item)
                                <option
                                    value="{{$item->id}}" {{getSystemSetting('default_currencies') == $item->id ? 'selected' : null}}>{{$item->symbol}} {{$item->code}}</option>
                            @endforeach
                        </select>
                        <div class="m-2 float-right">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="card m-2">
        <div class="card-header">
            <div class="float-left">
                <h2 class="card-title">Currency List</h2>
            </div>
            <div class="float-right">
                <a href="javascript:void()"
                   onclick="forModal('{{route('currencies.create') }}','Create Currency')"
                   class="btn btn-primary">
                    <i class="la la-plus"></i>
                    Create A Currency
                </a>
            </div>
        </div>
        <div class="card-body">
            <!-- there are the main content-->
            <table class="table table-striped- table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Symbol</th>
                    <th>Code</th>
                    <th>Flag</th>
                    <th>Rate</th>
                    <th>Align</th>
                    <th>Publish</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse($currencies as $item)
                    <tr>

                        <td>{{$loop->index+1}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->symbol}}</td>
                        <td>{{$item->code}}</td>
                        <td>
                            <img
                                src="{{asset('images/lang/'.$item->image)}}" class="" height="30px"
                                alt=""/>
                        </td>
                        <td>{{$item->rate}}</td>
                        <td>


                            <div class="mid">
{{--                                <label class="rocker rocker-small">--}}
{{--                                    <input type="checkbox" data-id="{{$item->id}}"--}}
{{--                                           data-url="{{route('currencies.align')}}" {{$item->align == true ? 'checked':null}}>--}}
{{--                                    <span class="switch-right">Right)</span>--}}
{{--                                    <span class="switch-left">Left)</span>--}}
{{--                                </label>--}}
                                <label class="rocker rocker-small">
                                    <input type="checkbox" data-id="{{$item->id}}" data-url="{{route('currencies.align')}}" {{$item->align == true ? 'checked':null}}>
                                    <span class="switch-left">Left</span>
                                    <span class="switch-right">Right</span>
                                </label>
                            </div>

                        </td>
                        <td>
                            <div class="form-group">
                                <div
                                    class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                    <input data-id="{{$item->id}}"
                                           {{$item->is_published == true ? 'checked':null}}  data-url="{{route('currencies.published')}}"
                                           type="checkbox" class="custom-control-input"
                                           id="customSwitch{{$item->id}}">
                                    <label class="custom-control-label" for="customSwitch{{$item->id}}"></label>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group-vertical">
                                <a class="btn btn-info"
                                   href="#!"
                                   onclick="confirm_modal('{{ route('currencies.destroy', $item->id) }}')">Delete</a>
                                <a class="btn btn-warning" href="#!"
                                   onclick="forModal('{{ route('currencies.edit', $item->id) }}','Currency Update)')">
                                    Edit</a>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td><h3 class="text-center">No data Found</h3></td>
                    </tr>
                @endforelse

                </tbody>
            </table>
        </div>
    </div>
    </div>

@endsection



