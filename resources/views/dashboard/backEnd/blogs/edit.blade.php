@extends('dashboard.layouts.main')
@section('title') Edit Blog @endsection
@section('main-content')
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Edit Blog</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Blog</li>
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
                    <form class="needs-validation" action="{{ route('blog.update', $single_blog->id) }}" method="post" enctype="multipart/form-data" novalidate>
                        @csrf

                        <div class="col-md-8 mb-3">
                                <label for="title">Title*</label>
                                <input type="text" id="title" name="title"  value="{{ $single_blog->title }}" class="form-control" placeholder="Blog Title" required>
                                    <div class="invalid-tooltip">
                                Please choose a unique and valid username.
                                </div>
                              </div>
                           
                                <div class="col-md-12 mb-3">
                                <label for="description">Blog Description*</label>
                                <textarea required name="description" id="description" class="form-control summernote" cols="30" rows="10" placeholder="Blog Description">{{ $single_blog->description }}</textarea>
                                    <div class="invalid-tooltip">
                                Please choose a unique and valid username.
                                </div>
                            </div>
                           
                                <div class="col-md-4 mb-3">
                                <label for="thumbnail">Thumbnail*</label>
                                <img src="{{ filePath($single_blog->thumbnail) }}" alt="">
                                <input type="hidden" class="form-control" value="{{ $single_blog->thumbnail }}" name="oldThumbnail" id="thumbnail">
                                <input type="file" class="form-control" name="thumbnail" id="thumbnail">
                                    <div class="invalid-tooltip">
                                Please choose a unique and valid username.
                                </div>
                            </div>
                           
                                <div class="col-md-4 mb-3">
                                <label for="category">Category*</label>
                                <select name="category_id" class="form-control" id="category">
                                    <option value="">Select category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ $single_blog->category_id == $category->id ? 'selected' : ''  }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-tooltip">
                                Please choose a unique and valid username.
                                </div>
                                </div>
                           
                                <div class="col-md-8 mb-3">
                                <label for="meta_title">Meta Title</label>
                                    <input type="text" id="meta_title" name="meta_title" value="{{ $single_blog->meta_title }}" class="form-control" placeholder="Meta Title">
                                    <div class="invalid-tooltip">
                                Please choose a unique and valid username.
                                </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                <label for="meta_description">Meta Description</label>
                                <textarea name="meta_description" id="meta_description" class="form-control summernote" cols="30" rows="6" placeholder="Meta Description">{{ $single_blog->meta_description }}</textarea>
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
