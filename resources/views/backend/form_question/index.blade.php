@extends('backend.app')
@section('content')
  <div class="page-inner">
      <div class="page-title">
          <div class="page-breadcrumb">
              <ol class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="active">Form Questions</li>
              </ol>
          </div>
      </div>

      <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Form Questions</h4>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                          {{-- --------------------- --}}
                          <form action="{{ route('form.question.store') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $questions->id ?? '' }}">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                <label for="question_en">{{ $questions->question_en_1 ?? '' }}</label>
                                <input type="text" value="{{ $questions->question_en_1 ?? '' }}" name="question_en_1" class="form-control" id="question_en" aria-describedby="emailHelp" placeholder="Enter Question (EN)">
                                <small id="emailHelp" class="form-text text-muted">Question (EN)</small>
                              </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                <label for="question_bn">{{ $questions->question_bn_1 ?? ''}}</label>
                                <input type="text" value="{{ $questions->question_bn_1 ?? ''}}" name="question_bn_1" class="form-control" id="question_bn" aria-describedby="emailHelp" placeholder="Enter Question (BN)">
                                <small id="emailHelp" class="form-text text-muted">Question (BN)</small>
                              </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                <label for="question_en">{{ $questions->question_en_2 ?? ''}}</label>
                                <input type="text" value="{{ $questions->question_en_2 ?? ''}}" name="question_en_2" class="form-control" id="question_en" aria-describedby="emailHelp" placeholder="Enter Question (EN)">
                                <small id="emailHelp" class="form-text text-muted">Question (EN)</small>
                              </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                <label for="question_bn">{{ $questions->question_bn_2 ?? ''}}</label>
                                <input type="text" value="{{ $questions->question_bn_2 ?? ''}}" name="question_bn_2" class="form-control" id="question_bn" aria-describedby="emailHelp" placeholder="Enter Question (BN)">
                                <small id="emailHelp" class="form-text text-muted">Question (BN)</small>
                              </div>
                              </div>
                            </div>


                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                <label for="question_en">{{ $questions->question_en_3 ?? ''}}</label>
                                <input type="text" value="{{ $questions->question_en_3 ?? ''}}" name="question_en_3" class="form-control" id="question_en" aria-describedby="emailHelp" placeholder="Enter Question (EN)">
                                <small id="emailHelp" class="form-text text-muted">Question (EN)</small>
                              </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                <label for="question_bn">{{ $questions->question_bn_3 ?? ''}}</label>
                                <input type="text" value="{{ $questions->question_bn_3 ?? ''}}" name="question_bn_3" class="form-control" id="question_bn" aria-describedby="emailHelp" placeholder="Enter Question (BN)">
                                <small id="emailHelp" class="form-text text-muted">Question (BN)</small>
                              </div>
                              </div>
                            </div>



                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                <label for="question_en">{{ $questions->question_en_4 ?? ''}}</label>
                                <input type="text" value="{{ $questions->question_en_4 ?? ''}}" name="question_en_4" class="form-control" id="question_en" aria-describedby="emailHelp" placeholder="Enter Question (EN)">
                                <small id="emailHelp" class="form-text text-muted">Question (EN)</small>
                              </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                <label for="question_bn">{{ $questions->question_bn_4 ?? ''}}</label>
                                <input type="text" value="{{ $questions->question_bn_4 ?? ''}}" name="question_bn_4" class="form-control" id="question_bn" aria-describedby="emailHelp" placeholder="Enter Question (BN)">
                                <small id="emailHelp" class="form-text text-muted">Question (BN)</small>
                              </div>
                              </div>
                            </div>



                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                <label for="question_en">{{ $questions->question_en_5 ?? ''}}</label>
                                <input type="text" value="{{ $questions->question_en_5 ?? ''}}" name="question_en_5" class="form-control" id="question_en" aria-describedby="emailHelp" placeholder="Enter Question (EN)">
                                <small id="emailHelp" class="form-text text-muted">Question (EN)</small>
                              </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                <label for="question_bn">{{ $questions->question_bn_5 ?? ''}}</label>
                                <input type="text" value="{{ $questions->question_bn_5 ?? ''}}" name="question_bn_5" class="form-control" id="question_bn" aria-describedby="emailHelp" placeholder="Enter Question (BN)">
                                <small id="emailHelp" class="form-text text-muted">Question (BN)</small>
                              </div>
                              </div>
                            </div>


                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                <label for="question_en">{{ $questions->question_en_6 ?? ''}}</label>
                                <input type="text" value="{{ $questions->question_en_6 ?? ''}}" name="question_en_6" class="form-control" id="question_en" aria-describedby="emailHelp" placeholder="Enter Question (EN)">
                                <small id="emailHelp" class="form-text text-muted">Question (EN)</small>
                              </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                <label for="question_bn">{{ $questions->question_bn_6 ?? ''}}</label>
                                <input type="text" value="{{ $questions->question_bn_6 ?? ''}}" name="question_bn_6" class="form-control" id="question_bn" aria-describedby="emailHelp" placeholder="Enter Question (BN)">
                                <small id="emailHelp" class="form-text text-muted">Question (BN)</small>
                              </div>
                              </div>
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
