@extends('dashboard.layouts.main')
@section('title') Team Members @endsection
@section('main-content')
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Team Members</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Team Members</li>
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
                <div class="card-header">
                    <h5 class="card-title">Team Members</h5>
                </div>
                <div class="card-body">
                    <form class="needs-validation" action="{{ route('team.store') }}" method="post" enctype="multipart/form-data" novalidate>
                        @csrf
                        
                      <div class="form-row">
                        <div class="col-md-4 mb-3">
                          <label for="validationTooltip01">Name</label>
                          <input type="text" class="form-control" name="name" id="validationTooltip01" placeholder="Name" value="{{ old('name') }}" required>
                          <div class="invalid-tooltip">
                              Please choose a unique and valid username.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label for="validationTooltip02">Position</label>
                          <input type="text" class="form-control" name="position" id="validationTooltip02" placeholder="Position" value="{{ old('name') }}" required>
                          <div class="invalid-tooltip">
                              Please choose a unique and valid username.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label for="validationTooltipPhoto">Photo</label>
                          <div class="input-group">
                            <input type="file" class="form-control" name="photo" id="validationTooltipPhoto" placeholder="Photo" value="{{ old('name') }}" aria-describedby="validationTooltipPhoto" required>
                            <div class="invalid-tooltip">
                              Please choose a unique and valid username.
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-3 mb-3">
                          <label for="validationTooltip03">Facebook Link</label>
                          <input type="text" class="form-control" name="fb"  id="validationTooltip03" value="{{ old('name') }}" placeholder="facebook.com/hasaniklearning" required>
                          <div class="invalid-tooltip">
                            Please provide a valid city.
                          </div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="validationTooltip04">Twitter Link</label>
                          <input type="text" class="form-control" name="tw" id="validationTooltip04" value="{{ old('name') }}" placeholder="twitter.com/hasaniklearning" required>
                          <div class="invalid-tooltip">
                            Please provide a valid state.
                          </div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="validationTooltip05">Skype Link</label>
                          <input type="text" class="form-control" name="skype" id="validationTooltip05" value="{{ old('name') }}" placeholder=skype.com/hasaniklearning" required>
                          <div class="invalid-tooltip">
                            Please provide a valid zip.
                          </div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="validationTooltip05">Linkedin Link</label>
                          <input type="text" class="form-control" name="linked" id="validationTooltip05" value="{{ old('name') }}" placeholder="linkedin.com/hasaniklearning" required>
                          <div class="invalid-tooltip">
                            Please provide a valid zip.
                          </div>
                        </div>
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



     <div class="contentbar">
            <div class="card">
                
                <!-- /.card-header -->
                <div class="card-body p-2">
                    <!-- Start col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-body">
                                {{-- --------------------- --}}
                                @foreach ($teams as $team)
                                <div class="col-md-12 col-lg-12 col-xl-12">
                                    <div class="card m-b-30">
                                    <div class="row no-gutters">
                                        <div class="col-md-7">
                                        <img src="{{ filePath($team->photo) }}" class="card-img w-50" alt="{{  $team->name }} }}">
                                        </div>
                                        <div class="col-md-5">
                                        <div class="card-body">
                                            <h5 class="card-title font-18">{{ $team->name }}</h5>
                                            <p class="card-text">
                                                {{ $team->position }}
                                            </p>
                                            {{-- <a href="{{ route('course.show', $course->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="{{ route('course.destroy', $course->id) }}" class="btn btn-danger"><i class="fa fa-trash-o"></i></a> --}}
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                @endforeach
                                {{-- --------------------- --}}
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                </div>

            </div>
    </div>

@endsection
