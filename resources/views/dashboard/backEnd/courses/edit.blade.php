@extends('dashboard.layouts.main')
@section('title') Edit Course @endsection
@section('main-content')
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Edit Course</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Course</li>
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
                    <form class="needs-validation" action="{{ route('course.update', $single_course->id) }}" method="post" enctype="multipart/form-data" novalidate>
                        @csrf
                        
                        <div class="col-md-8 mb-3">
                                <label for="name">Name*</label>
                                <input type="text" id="name" name="name" value="{{ $single_course->name }}" class="form-control" placeholder="Course Name" required>
                                <div class="invalid-tooltip">
                              Please choose a unique and valid username.
                            </div>  
                            </div>
                           
                                <div class="col-md-12 mb-3">
                                <label for="short_desc">Short Description*</label>
                                <textarea required name="short_desc" id="short_desc" class="form-control summernote" cols="30" rows="10" placeholder="Short Description">{{ $single_course->short_desc }}</textarea>
                                    <div class="invalid-tooltip">
                              Please choose a unique and valid username.
                            </div>
                            </div>
                           
                                <div class="col-md-12 mb-3">
                                <label for="big_desc">Big Description*</label>
                                <textarea required name="big_desc" id="big_desc" class="form-control summernote" cols="30" rows="10" placeholder="Big Description">{{ $single_course->big_desc }}</textarea>
                                    <div class="invalid-tooltip">
                              Please choose a unique and valid username.
                            </div>
                            </div>
                           
                                <div class="col-md-8 mb-3">
                                <label for="thumbnail">Thumbnail*</label>
                                <img src="{{ filePath($single_course->thumbnail) }}" alt="">
                                <input type="hidden" class="form-control" value="{{ $single_course->thumbnail }}" name="oldThumbnail" id="oldThumbnail">
                                <input type="file" class="form-control" name="thumbnail" id="thumbnail">
                                    <div class="invalid-tooltip">
                              Please choose a unique and valid username.
                            </div>
                            </div>

                                <div class="col-md-4 mb-3">
                                <label for="price">Price*</label>
                                <input type="number" id="price" value="{{ $single_course->price }}" name="price" class="form-control" placeholder="Course Price" required>
                                    <div class="invalid-tooltip">
                              Please choose a unique and valid username.
                            </div>
                            </div>

                               <div class="col-md-4 mb-3">
                                   <input type="checkbox" id="is_discount" name="is_discount" {{ $single_course->is_discount == 1 ? 'checked' : null }}>
                                <label for="is_discount">Has discount?</label>
                                
                            </div>

                              <div class="col-md-4 mb-3">
                                <label for="discount_price">Discount Price</label>
                                <input type="number" id="discount_price" value="{{ $single_course->discount_price }}" name="discount_price" class="form-control" placeholder="Discount Price">
                                
                            </div>
                           
                                <div class="col-md-8 mb-3">
                                <label for="meta_title">Meta Title</label>
                                    <input type="text" id="meta_title" value="{{ $single_course->meta_title }}" name="meta_title" class="form-control" placeholder="Meta Title">
                                    
                                </div>

                                <div class="col-md-12 mb-3">
                                <label for="meta_description">Meta Description</label>
                                <textarea name="meta_description" id="meta_description" aria-valuemax="{{ $single_course->meta_description }}" class="form-control summernote" cols="30" rows="6" placeholder="Meta Description"></textarea>
                                <small>Google standard 200 characters.</small>
                            </div>
                      <button class="btn btn-primary" type="submit">Send Data</button>
                    </form>

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
