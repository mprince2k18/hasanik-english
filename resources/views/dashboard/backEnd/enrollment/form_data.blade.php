@extends('dashboard.layouts.main')
@section('title') Form Data @endsection
@section('main-content')
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Form Data</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form Data</li>
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
                                <h5 class="card-title">Form Data</h5>
                            </div>
                            <div class="card-body">
                                

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Occupation</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Class Time</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Payment Type</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      {{-- Aside --}}
      <div class="col-lg-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">

                                            {{-- --------------------- --}}
                          <form action="{{ route('occupation.store') }}" method="post">
                            @csrf
                            <div class="row">
                              <div class="col-md-12">
                                  
                                <div class="form-group">
                                <label for="occupation" class="col-form-label text-md-right">Occupation</label>
                                <input type="text" value="{{ old('name') }}" name="name" class="form-control" id="occupation" aria-describedby="emailHelp" placeholder="Write Occupation">
                                <small id="emailHelp" class="form-text text-muted">Ex: Student</small>
                              </div>
                              </div>
                              
                            </div>

                            <button type="submit" class="btn btn-primary">SAVE</button>

                            </form>
                          {{-- --------------------- --}}

                                            <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>SL.</th>
                                                                    <th>Occupation</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                @forelse ($occupations as $occupation)
                                                                    <tr>
                                                                            
                                                                           
                                                                            <td>
                                                                                {{ $loop->index++ + 1 }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $occupation->name }}
                                                                            </td>
                                                                    </tr>
                                                                    @empty
                                                                    <tr class="text-center">
                                                                            <td colspan="3">
                                                                                No Occupation Found
                                                                            </td>
                                                                        </tr>
                                                                @endforelse
                                                            </tbody>
                                                        </table>

                                        </div>
                                    </div>
                                </div>
      {{-- Aside:END --}}
    </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <div class="col-lg-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">

                                            {{-- --------------------- --}}
                          <form action="{{ route('schedule.store') }}" method="post">
                            @csrf
                            <div class="row">
                              <div class="col-md-12">
                                  
                                <div class="form-group">
                                <label for="occupation" class="col-form-label text-md-right">Class Schedule</label>
                                <input type="text" value="{{ old('name') }}" name="name" class="form-control" id="occupation" aria-describedby="emailHelp" placeholder="Write Class Schedule">
                                <small id="emailHelp" class="form-text text-muted">Ex: Morning 9 'o' clock</small>
                              </div>
                              </div>
                              
                            </div>

                            <button type="submit" class="btn btn-primary">SAVE</button>

                            </form>
                          {{-- --------------------- --}}

                                            <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>SL.</th>
                                                                    <th>Class Schedule</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                @forelse ($schedules as $schedule)
                                                                    <tr>
                                                                            
                                                                            <td>
                                                                                {{ $loop->index++ + 1 }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $schedule->name }}
                                                                            </td>
                                                                    </tr>
                                                                    @empty
                                                                    <tr class="text-center">
                                                                            <td colspan="3">
                                                                                No Class Schedule Found
                                                                            </td>
                                                                        </tr>
                                                                @endforelse
                                                            </tbody>
                                                        </table>

                                        </div>
                                    </div>
                                </div>
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
      <div class="col-lg-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">

                                            {{-- --------------------- --}}
                          <form action="{{ route('payment.store') }}" method="post">
                            @csrf
                            <div class="row">
                              <div class="col-md-12">
                                  
                                <div class="form-group">
                                <label for="occupation" class="col-form-label text-md-right">Payment Type</label>
                                <input type="text" value="{{ old('name') }}" name="name" class="form-control" id="occupation" aria-describedby="emailHelp" placeholder="Write Payment Type">
                                <small id="emailHelp" class="form-text text-muted">Ex: bKash</small>
                              </div>
                              </div>
                              
                            </div>

                            <button type="submit" class="btn btn-primary">SAVE</button>

                            </form>
                          {{-- --------------------- --}}

                                            <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>SL.</th>
                                                                    <th>Payment Type</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                @forelse ($payments as $payment)
                                                                    <tr>
                                                                           
                                                                            <td>
                                                                                {{ $loop->index++ + 1 }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $payment->name }}
                                                                            </td>
                                                                    </tr>
                                                                    @empty
                                                                        <tr class="text-center">
                                                                            <td colspan="3">
                                                                                No Slider Found
                                                                            </td>
                                                                        </tr>
                                                                @endforelse
                                                            </tbody>
                                                        </table>

                                        </div>
                                    </div>
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
