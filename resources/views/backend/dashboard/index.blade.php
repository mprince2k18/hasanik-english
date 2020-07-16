@extends('backend.app')
@section('content')
  <div class="page-inner">
    <div class="page-title">
      <div class="page-breadcrumb">
        <ol class="breadcrumb">
          <li><a href="{{ route('homepage') }}">Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </div>
    </div>

    <div class="container mt-20">
      <div class="row">
        <div class="col-md-2">
          <div class="panel panel-purple">
            <div class="panel-heading">
              <h3 class="panel-title">Total Enrolled</h3>
            </div>
            <div class="panel-body">
              <h2>{{ $enroll_count }}</h2>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="panel panel-purple">
            <div class="panel-heading">
              <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
              <code>.panel-purple</code>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="panel panel-purple">
            <div class="panel-heading">
              <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
              <code>.panel-purple</code>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="panel panel-purple">
            <div class="panel-heading">
              <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
              <code>.panel-purple</code>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="panel panel-purple">
            <div class="panel-heading">
              <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
              <code>.panel-purple</code>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="panel panel-purple">
            <div class="panel-heading">
              <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
              <code>.panel-purple</code>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div id="main-wrapper">
      <div class="row">
        <div class="col-md-6">
          <div class="panel panel-white">
            <div class="panel-heading clearfix">
              <h3 class="panel-title">Sales</h3>
              <div class="panel-control">
                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-reload" data-original-title="Reload"><i class="icon-reload"></i></a>
              </div>
            </div>
            <div class="panel-body">
              <div class="panel-header-stats">
                <div class="row">
                  <div class="col-md-3 col-xs-6">
                    <i class="icon-basket"></i>
                    <h4 class="no-m">$14,213</h4>
                  </div>
                  <div class="col-md-3 col-xs-6">
                    <i class="icon-globe"></i>
                    <h4 class="no-m">$374,700</h4>
                  </div>
                  <div class="col-md-3 col-xs-6">
                    <i class="icon-credit-card"></i>
                    <h4 class="no-m">$2,134</h4>
                  </div>
                  <div class="col-md-3 col-xs-6">
                    <i class="icon-shield"></i>
                    <h4 class="no-m">907</h4>
                  </div>
                </div>
              </div>
              <div>
                <canvas id="chart1" height="165"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="panel panel-white">
            <div class="panel-heading clearfix">
              <h3 class="panel-title">Visitors</h3>
              <div class="panel-control">
                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-reload" data-original-title="Reload"><i class="icon-reload"></i></a>
              </div>
            </div>
            <div class="panel-body">
              <div class="panel-header-stats">
                <div class="row">
                  <div class="col-md-3 col-xs-6">
                    <i class="icon-users"></i>
                    <h4 class="no-m">Total: 4500</h4>
                  </div>
                  <div class="col-md-3 col-xs-6">
                    <i class="icon-user"></i>
                    <h4 class="no-m">Male: 2600</h4>
                  </div>
                  <div class="col-md-3 col-xs-6">
                    <i class="icon-user-female"></i>
                    <h4 class="no-m">Female: 1900</h4>
                  </div>
                  <div class="col-md-3 col-xs-6">
                    <i class="icon-user-follow"></i>
                    <h4 class="no-m">Avg: 2250</h4>
                  </div>
                </div>
              </div>
              <div>
                <canvas id="chart2" height="165"></canvas>
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
