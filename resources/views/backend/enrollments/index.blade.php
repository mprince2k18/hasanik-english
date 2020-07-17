@extends('backend.app')
@section('content')


            <div class="page-inner">
                <div class="page-title">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Enrollments</li>
                        </ol>
                    </div>
                </div>

                <div id="main-wrapper">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="panel panel-white">
                              <div class="panel-heading clearfix">
                                  <h4 class="panel-title">Enroll Lists</h4>
                              </div>
                              <div class="panel-body">
                                 <div class="table-responsive">
                                  <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                      <thead>
                                          <tr>
                                              <th>S/L</th>
                                              <th>Name</th>
                                              <th>Email</th>
                                              <th>Phone</th>
                                              <th>Gender</th>
                                              <th>Created At</th>
                                              <th>Action</th>
                                          </tr>
                                      </thead>
                                      <tfoot>
                                          <tr>
                                            <th>S/L</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Gender</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                          </tr>
                                      </tfoot>
                                      <tbody>
                                        @foreach ($enrolls as $enroll)
                                          <tr>
                                            <td>{{ $loop->index++ + 1 }}</td>
                                            <td>{{ $enroll->name }}</td>
                                            <td>
                                              <a href="mailto:{{ $enroll->email }}">{{ $enroll->email }}</a>
                                            </td>
                                            <td>
                                              <a href="tel:{{ $enroll->phone }}">{{ $enroll->phone }}</a>
                                            </td>
                                            <td>{{ $enroll->gender }}</td>
                                            <td>{{ $enroll->created_at->diffForHumans() }}</td>
                                            <td>
                                              <a href="#!" onclick="quickView('{{ route('quick.view',$enroll->id) }}')">VIEW</a>
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

                </div><!-- Main Wrapper -->
                <div class="page-footer">
                    <p class="no-s">Made with <i class="fa fa-heart"></i> {{env('APP_NAME')}}</p>
                </div>
            </div><!-- Page Inner -->
@endsection
