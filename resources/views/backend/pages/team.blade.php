@extends('backend.app')
@section('content')
  <div class="page-inner">
      <div class="page-title">
          <div class="page-breadcrumb">
              <ol class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="active">Team</li>
              </ol>
          </div>
      </div>

      <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Add Team</h4>
                    </div>
                    <div class="panel-body">
                      {{-- --------------------- --}}
                          <form action="{{ route('team.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                                <div class="form-group">
                                    <label for="question_en">Name</label>
                                <input type="text" value="{{ old('name') }}" name="name" class="form-control" id="question_en" aria-describedby="emailHelp" placeholder="Enter Question (EN)">
                                </div>

                                <div class="form-group">
                                    <label for="question_en">Position</label>
                                <input type="text" value="{{ old('position') }}" name="position" class="form-control" id="question_en" aria-describedby="emailHelp" placeholder="Enter Question (EN)">
                                </div>

                                <div class="form-group">
                                    <label for="question_en">Photo</label>
                                <input type="file" value="{{ old('photo') }}" name="photo" class="form-control" id="question_en">
                                </div>

                                <div class="form-group">
                                    <label for="question_bn">Facebook Link</label>
                                <input type="text" value="{{ old('fb') }}" name="fb" class="form-control" id="question_bn" aria-describedby="emailHelp" placeholder="Enter Question (BN)">
                               </div>

                                <div class="form-group">
                                    <label for="question_bn">Twitter Link</label>
                                    <input type="text" value="{{ old('tw') }}" name="tw" class="form-control" id="question_bn" aria-describedby="emailHelp" placeholder="Enter Question (BN)">
                               </div>

                                <div class="form-group">
                                    <label for="question_bn">Skype Link</label>
                                    <input type="text" value="{{ old('skype') }}" name="skype" class="form-control" id="question_bn" aria-describedby="emailHelp" placeholder="Enter Question (BN)">
                               </div>

                                <div class="form-group">
                                    <label for="question_bn">Linkedin Link</label>
                                    <input type="text" value="{{ old('linked') }}" name="linked" class="form-control" id="question_bn" aria-describedby="emailHelp" placeholder="Enter Question (BN)">
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
@endsection
