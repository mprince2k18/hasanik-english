@extends('backend.app')
@section('content')
  <div class="page-inner">
      <div class="page-title">
          <div class="page-breadcrumb">
              <ol class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="active">Blog</li>
              </ol>
          </div>
      </div>

      <div id="main-wrapper">

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-md-2">

                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Category">
                            Add Category
                          </button>

                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Add New Blog</h4>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                          {{-- --------------------- --}}
                          <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                           
                                <div class="form-group">
                                <label for="title">Title*</label>
                                <input type="text" name="title" class="form-control" placeholder="Blog Title" required>
                              </div>
                           
                                <div class="form-group">
                                <label for="description">Blog Description*</label>
                                <textarea required name="description" id="description" class="form-control" cols="30" rows="10" placeholder="Blog Description"></textarea>
                              </div>
                           
                                <div class="form-group">
                                <label for="thumbnail">Thumbnail*</label>
                                <input type="file" required class="form-control" name="thumbnail" id="thumbnail">
                                </div>
                           
                                <div class="form-group">
                                <label for="category">Category*</label>
                                <select name="category_id" class="form-control" id="category" required>
                                    <option value="">Select category</option>
                                    @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                </div>
                           
                                <div class="form-group">
                                <label for="meta_title">Meta Title</label>
                                    <input type="text" id="meta_title" name="meta_title" class="form-control" placeholder="Meta Title">
                                </div>

                                <div class="form-group">
                                <label for="meta_description">Meta Description</label>
                                <textarea name="meta_description" id="meta_description" class="form-control" cols="30" rows="6" placeholder="Meta Description"></textarea>
                                <small>Google standard 200 characters.</small>
                            </div>
                              

                            <button type="submit" class="btn btn-primary">Update</button>

                            </form>
                          {{-- --------------------- --}}
                      </div>
                    </div>
                </div>
            </div>
        </div>
      </div><!-- Main Wrapper -->


      <div class="modal fade" id="Category" tabindex="-1" role="dialog" aria-labelledby="Category" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Add Category</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              {{-- ---------------- --}}
              <form id="categoryForm" action="{{ route('category.store') }}" method="post">
                @csrf
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Category Name">
                  </div>
                </form>
              {{-- ---------------- --}}
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary categoryBtn">Save</button>
            </div>
          </div>
        </div>
      </div>

      <div class="page-footer">
          <p class="no-s">Made with <i class="fa fa-heart"></i> {{ getSystemSetting('type_name')->value }}</p>
      </div>
  </div><!-- Page Inner -->
@endsection
