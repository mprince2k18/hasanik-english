@extends('dashboard.layouts.main')
@section('title') Enroll Form @endsection
@section('main-content')
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Enroll Form</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Enroll Form</li>
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
                            <div class="card-header">
                                <h5 class="card-title">Enroll Form</h5>
                            </div>
                            <div class="card-body">
                                {{-- --------------------- --}}
                          <form action="{{ route('form.question.store') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $questions->id ?? '' }}">
                            <div class="row">
                              <div class="col-md-6">
                                  
                                <div class="form-group">
                                <label for="question_en_1" class="col-form-label text-md-right">Q: {{ $questions->question_en_1 ?? '' }}</label>
                                <input type="text" value="{{ $questions->question_en_1 ?? '' }}" name="question_en_1" class="form-control" id="question_en_1" aria-describedby="emailHelp" placeholder="Enter Question (EN)">
                                <small id="emailHelp" class="form-text text-muted">Question (EN)</small>
                              </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                <label for="question_bn_1">Q: {{ $questions->question_bn_1 ?? ''}}</label>
                                <input type="text" value="{{ $questions->question_bn_1 ?? ''}}" name="question_bn_1" class="form-control" id="question_bn_1" aria-describedby="emailHelp" placeholder="Enter Question (BN)">
                                <small id="emailHelp" class="form-text text-muted">Question (BN)</small>
                              </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                <label for="question_en_2">Q: {{ $questions->question_en_2 ?? ''}}</label>
                                <input type="text" value="{{ $questions->question_en_2 ?? ''}}" name="question_en_2" class="form-control" id="question_en_2" aria-describedby="emailHelp" placeholder="Enter Question (EN)">
                                <small id="emailHelp" class="form-text text-muted">Question (EN)</small>
                              </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                <label for="question_bn_2">Q: {{ $questions->question_bn_2 ?? ''}}</label>
                                <input type="text" value="{{ $questions->question_bn_2 ?? ''}}" name="question_bn_2" class="form-control" id="question_bn_2" aria-describedby="emailHelp" placeholder="Enter Question (BN)">
                                <small id="emailHelp" class="form-text text-muted">Question (BN)</small>
                              </div>
                              </div>
                            </div>


                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                <label for="question_en_3">Q: {{ $questions->question_en_3 ?? ''}}</label>
                                <input type="text" value="{{ $questions->question_en_3 ?? ''}}" name="question_en_3" class="form-control" id="question_en_3" aria-describedby="emailHelp" placeholder="Enter Question (EN)">
                                <small id="emailHelp" class="form-text text-muted">Question (EN)</small>
                              </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                <label for="question_bn_3">Q: {{ $questions->question_bn_3 ?? ''}}</label>
                                <input type="text" value="{{ $questions->question_bn_3 ?? ''}}" name="question_bn_3" class="form-control" id="question_bn_3" aria-describedby="emailHelp" placeholder="Enter Question (BN)">
                                <small id="emailHelp" class="form-text text-muted">Question (BN)</small>
                              </div>
                              </div>
                            </div>



                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                <label for="question_en_4">Q: {{ $questions->question_en_4 ?? ''}}</label>
                                <input type="text" value="{{ $questions->question_en_4 ?? ''}}" name="question_en_4" class="form-control" id="question_en_4" aria-describedby="emailHelp" placeholder="Enter Question (EN)">
                                <small id="emailHelp" class="form-text text-muted">Question (EN)</small>
                              </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                <label for="question_bn_4">Q: {{ $questions->question_bn_4 ?? ''}}</label>
                                <input type="text" value="{{ $questions->question_bn_4 ?? ''}}" name="question_bn_4" class="form-control" id="question_bn_4" aria-describedby="emailHelp" placeholder="Enter Question (BN)">
                                <small id="emailHelp" class="form-text text-muted">Question (BN)</small>
                              </div>
                              </div>
                            </div>



                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                <label for="question_en_5">Q: {{ $questions->question_en_5 ?? ''}}</label>
                                <input type="text" value="{{ $questions->question_en_5 ?? ''}}" name="question_en_5" class="form-control" id="question_en_5" aria-describedby="emailHelp" placeholder="Enter Question (EN)">
                                <small id="emailHelp" class="form-text text-muted">Question (EN)</small>
                              </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                <label for="question_bn_5">Q: {{ $questions->question_bn_5 ?? ''}}</label>
                                <input type="text" value="{{ $questions->question_bn_5 ?? ''}}" name="question_bn_5" class="form-control" id="question_bn_5" aria-describedby="emailHelp" placeholder="Enter Question (BN)">
                                <small id="emailHelp" class="form-text text-muted">Question (BN)</small>
                              </div>
                              </div>
                            </div>


                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                <label for="question_en_6">Q: {{ $questions->question_en_6 ?? ''}}</label>
                                <input type="text" value="{{ $questions->question_en_6 ?? ''}}" name="question_en_6" class="form-control" id="question_en_6" aria-describedby="emailHelp" placeholder="Enter Question (EN)">
                                <small id="emailHelp" class="form-text text-muted">Question (EN)</small>
                              </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                <label for="question_bn_6">Q: {{ $questions->question_bn_6 ?? ''}}</label>
                                <input type="text" value="{{ $questions->question_bn_6 ?? ''}}" name="question_bn_6" class="form-control" id="question_bn_6" aria-describedby="emailHelp" placeholder="Enter Question (BN)">
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
                    <!-- End col -->
                </div>

            </div>
    </div>
@endsection
