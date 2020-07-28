@extends('backend.app')
@section('content')
  <div class="page-inner">
      <div class="page-title">
          <div class="page-breadcrumb">
              <ol class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="active">Slider</li>
              </ol>
          </div>
      </div>

      <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Slider</h4>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <input type="file" name="slider" id="slider" class="form-control" required>
                                <label for="slider">Active now?</label>
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
                    </div>
                </div>
            </div>

        </div>


        <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Sliders</h4>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                            <div class="col-md-12">
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
                                                        <img src="{{ filePath($slider->slider) }}" style="width: 10%" alt="">
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn-sm btn-primary">
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
