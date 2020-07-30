@extends('dashboard.install.app')
@section('content')
@if($message = Session::get('success'))

  <div class="card-body">
      <h3 class="text-lg-center p-3">
          Import Sql</h3>
      <p>
          If You Click this button Sql File auto Save in Database</p>
      <a href="{{route('org.create')}}" class="btn btn-block btn-success">
          Import Sql</a>
  </div>

@endif

@if($message = Session::get('wrong'))

  <div class="card-body">
      <p>
          Check the Database connection</p>
      <a href="{{route('create')}}" class="btn btn-block btn-danger">
          Go to the Database Setup</a>
  </div>

@endif
@endsection
