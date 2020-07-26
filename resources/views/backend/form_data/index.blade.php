@extends('backend.app')
@section('content')
  <div class="page-inner">
      <div class="page-title">
          <div class="page-breadcrumb">
              <ol class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="active">Form Data</li>
              </ol>
          </div>
      </div>

      <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Form Data</h4>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-md-2">

                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Occupations">
                            Occupations
                          </button>

                        </div>
                        <div class="col-md-2">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#schedule">
                            Class Schedule
                          </button>
                        </div>
                        <div class="col-md-2">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#payment">
                            Payment Gateways
                          </button>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="panel panel-white">
            <div class="panel-heading clearfix">
              <h4 class="panel-title">Occupations</h4>
            </div>
            <div class="panel-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($occupations as $occupation)
                    <tr>
                      <th scope="row">{{ $occupation->name }}</th>
                      <td>
                        <a href="#">
                          <span class="menu-icon icon-pencil"></span>
                        </a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          </div>
          <div class="col-md-4">
            <div class="panel panel-white">
            <div class="panel-heading clearfix">
              <h4 class="panel-title">Class Schedules</h4>
            </div>
            <div class="panel-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($schedules as $schedule)
                    <tr>
                      <th scope="row">{{ $schedule->name }}</th>
                      <td>
                        <a href="#">
                          <span class="menu-icon icon-pencil"></span>
                        </a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          </div>
          <div class="col-md-4">
            <div class="panel panel-white">
            <div class="panel-heading clearfix">
              <h4 class="panel-title">Payments Gateways</h4>
            </div>
            <div class="panel-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($payments as $payment)
                    <tr>
                      <th scope="row">{{ $payment->name }}</th>
                      <td>
                        <a href="#">
                          <span class="menu-icon icon-pencil"></span>
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

      </div><!-- Main Wrapper -->


      <!-- Occupations -->
      <div class="modal fade" id="Occupations" tabindex="-1" role="dialog" aria-labelledby="Occupations" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Add Occupation</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              {{-- ---------------- --}}
              <form id="occupation_form" action="{{ route('occupation.store') }}" method="post">
                @csrf
                  <div class="form-group">
                    <label for="occupation_name">Name</label>
                    <input type="text" name="name" class="form-control" id="occupation_name" aria-describedby="emailHelp" placeholder="Enter Occupation">
                  </div>
                </form>
              {{-- ---------------- --}}
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary occupation">Save</button>
            </div>
          </div>
        </div>
      </div>

      <!-- schedule -->
      <div class="modal fade" id="schedule" tabindex="-1" role="dialog" aria-labelledby="schedule" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Add Class Schedule</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              {{-- ---------------- --}}
              <form id="schedule_form" action="{{ route('schedule.store') }}" method="post">
                @csrf
                  <div class="form-group">
                    <label for="schedule_name">Name</label>
                    <input type="text" class="form-control" name="name" id="schedule_name" aria-describedby="emailHelp" placeholder="Enter Class Schedule">
                  </div>
                </form>
              {{-- ---------------- --}}
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary schedule">Save</button>
            </div>
          </div>
        </div>
      </div>

      <!-- payment -->
      <div class="modal fade" id="payment" tabindex="-1" role="dialog" aria-labelledby="payment" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Add Payment gateway</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              {{-- ---------------- --}}
              <form id="payment_form" action="{{ route('payment.store') }}" method="post">
                @csrf
                  <div class="form-group">
                    <label for="payment_name">Name</label>
                    <input type="text" name="name" class="form-control" id="payment_name" aria-describedby="emailHelp" placeholder="Enter Payment gateway">
                  </div>
                </form>
              {{-- ---------------- --}}
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary payment">Save</button>
            </div>
          </div>
        </div>
      </div>


      <div class="page-footer">
          <p class="no-s">Made with <i class="fa fa-heart"></i> {{ getSystemSetting('type_name')->value }}</p>
      </div>
  </div><!-- Page Inner -->
@endsection
