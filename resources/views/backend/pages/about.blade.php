@extends('backend.app')
@section('content')
  <div class="page-inner">
      <div class="page-title">
          <div class="page-breadcrumb">
              <ol class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="active">About</li>
              </ol>
          </div>
      </div>

      <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">About</h4>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('about.store') }}" method="post">
                            @csrf
                            <input type="hidden" value="about" name="type">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                <label for="question_en">Description</label>
                                <textarea name="desc" class="form-control" id="" cols="30" rows="10">{{ page('about')->desc ?? '' }}</textarea>
                              </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">SUBMIT</button>
                    </form>
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
                        <h4 class="panel-title">Our Mission</h4>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-md-12">
                        <form action="{{ route('mission.store') }}" method="post">
                            @csrf
                            <input type="hidden" value="mission" name="type">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                <label for="question_en">Description</label>
                                <textarea name="desc" class="form-control" id="" cols="30" rows="10">{{ page('mission')->desc ?? '' }}</textarea>
                              </div>
                            </div>
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

      </div><!-- Main Wrapper -->


      <div class="page-footer">
          <p class="no-s">Made with <i class="fa fa-heart"></i> {{env('APP_NAME')}}</p>
      </div>
  </div><!-- Page Inner -->
@endsection
