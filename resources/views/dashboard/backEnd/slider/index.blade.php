@extends('dashboard.layouts.main')
@section('title') Slider Setup @endsection
@section('main-content')
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Slider Setup</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Slider Setup</li>
                    </ol>
                </div>
            </div>
            {{-- <div class="col-md-4 col-lg-4">
                <div class="widgetbar">
                    <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- End Breadcrumbbar -->
    <div class="contentbar">
            <div class="card">
                
                <!-- /.card-header -->
                <div class="card-body p-2">
                    <!-- Start col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-body">
                                {{-- --------------------- --}}
                                <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-body">
                     <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="Upload">Upload Slider</label>
                                <input type="file" name="slider" id="Upload" class="form-control" required>
                              </div>

                            <div class="form-group">
                                <label for="slider">Slider Position</label>
                                <select name="type" required class="form-control">
                                    <option value="">Select Position</option>
                                    <option value="aside">Aside</option>
                                    <option value="top">Top</option>
                                    <option value="bottom">bottom</option>
                                </select>
                            </div>

                        <div class="form-group">
                            <input type="checkbox" id="is_active" name="is_active">
                            <label for="is_active">Active now?</label>
                        </div>


                        <button class="btn btn-primary" type="submit">SUBMIT</button>
                    </form>

                </div>
            </div>
        </div>
                                {{-- --------------------- --}}
                            </div>
                            <div class="card-body">
                                {{-- --------------------- --}}
                                <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-body">
                      <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Activation</th>
                                            <th>Slider</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($sliders as $slider)
                                            <tr>
                                                    <td scope="row">
                                                        <div class="form-group">
                                                            <input type="checkbox"  data-id="{{ $slider->id }}" data-url="{{ route('slider.activation') }}" id="is_active" class="is_active" name="is_active" {{ $slider->is_active == '0' ? 'checked' : null }}>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <img src="{{ filePath($slider->slider) }}" style="width: 50%" alt="">
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('slider.destroy', $slider->id) }}" class="btn-sm btn-primary">
                                                            Remove
                                                        </a>
                                                    </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                </div>
            </div>
        </div>
                                {{-- --------------------- --}}
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                </div>

            </div>
    </div>
@endsection
