@extends('backend.app')
@section('content')
  <div class="page-inner">
      <div class="page-title">
          <div class="page-breadcrumb">
              <ol class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="active">Course</li>
              </ol>
          </div>
      </div>

      <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Add New Course</h4>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                            {{-- --------------------- --}}
                          <form action="{{ route('course.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                           
                              <div class="form-group">
                                <label for="name">Name*</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Course Name" required>
                              </div>
                           
                                <div class="form-group">
                                <label for="short_desc">Short Description*</label>
                                <textarea required name="short_desc" id="short_desc" class="form-control" cols="30" rows="10" placeholder="Short Description"></textarea>
                              </div>
                           
                                <div class="form-group">
                                <label for="big_desc">Big Description*</label>
                                <textarea required name="big_desc" id="big_desc" class="form-control" cols="30" rows="10" placeholder="Big Description"></textarea>
                              </div>
                           
                                <div class="form-group">
                                <label for="thumbnail">Thumbnail*</label>
                                <input type="file" required class="form-control" name="thumbnail" id="thumbnail">
                                </div>

                                <div class="form-group">
                                <label for="price">Price*</label>
                                <input type="number" id="price" name="price" class="form-control" placeholder="Course Price" required>
                              </div>

                               <div class="form-group">
                                   <input type="checkbox" id="is_discount" name="is_discount">
                                <label for="is_discount">Has discount?</label>
                              </div>

                              <div class="form-group">
                                <label for="discount_price">Discount Price</label>
                                <input type="number" id="discount_price" name="discount_price" class="form-control" placeholder="Discount Price">
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

      <div class="page-footer">
          <p class="no-s">Made with <i class="fa fa-heart"></i> {{env('APP_NAME')}}</p>
      </div>
  </div><!-- Page Inner -->
@endsection
