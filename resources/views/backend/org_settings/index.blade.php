@extends('backend.app')
@section('content')
  <div class="page-inner">
      <div class="page-title">
          <div class="page-breadcrumb">
              <ol class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="active">Organization Settings</li>
              </ol>
          </div>
      </div>

      <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Organization Settings</h4>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                          {{-- --------------------- --}}
        <div class="col-md-10 offset-md-1 px-5">
            <div class="card m-2">
                <div class="card-header">
                    <h3>Organization Setting</h3>
                </div>
                <div class="card-body mx-5">
                    <form method="post" action="{{route('org.update')}}" enctype="multipart/form-data">
                    @csrf

                    <!--logo-->
                        <label >Logo</label>
                        <input type="hidden" value="type_logo" name="type_logo">

                        <div class="avatar-upload">
                            <label for="imageUpload">Logo</label>
                            <div class="avatar-edit">
                                <input type='file' name="logo" id="imageUpload" accept=".png, .jpg, .jpeg"/>
                                <label for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview"
                                     style="background-image: url({{filePath(getSystemSetting('type_logo')->value) }});">
                                </div>
                            </div>
                        </div>
                        <!--logo end-->

                        <!--footer logo-->
                        <label >Footer Logo</label>
                        <input type="hidden" value="footer_logo" name="footer_logo">

                        <div class="avatar-upload">
                            <label for="imageUpload_f_logo">Footer Logo</label>
                            <div class="avatar-edit">
                                <input type='file' name="f_logo" id="imageUpload_f_logo" accept=".png, .jpg, .jpeg"/>
                                <label for="imageUpload_f_logo"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview_f_logo"
                                     style="background-image: url({{filePath(getSystemSetting('footer_logo')->value)}});">
                                </div>
                            </div>
                        </div>
                        <!--footer logo end-->

                        <!--favicon icon-->
                        <label >Favicon Icon</label>
                        <input type="hidden" value="favicon_icon" name="favicon_icon">


                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input type='file' name="f_icon" id="imageUpload_f_icon" accept=".png, .jpg, .jpeg"/>
                                <label for="imageUpload_f_icon"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview_f_icon"
                                     style="background-image: url({{filePath(getSystemSetting('favicon_icon')->value)}});">
                                </div>
                            </div>
                        </div>
                        <!--favicon end-->

                        <!--name-->
                        <label>Name</label>
                        <input type="hidden" value="type_name" name="type_name">
                        <input type="text" value="{{getSystemSetting('type_name')->value}}" name="name"
                               class="form-control mb-2">

                        <!--footer-->
                        <label >Footer</label>
                        <input type="hidden" value="type_footer" name="type_footer">
                        <input type="text" value="{{getSystemSetting('type_footer')->value}}" name="footer"
                               class="form-control mb-2">

                        <!--address-->
                        <label >Address</label>
                        <input type="hidden" value="type_address" name="type_address">
                        <input type="text" value="{{getSystemSetting('type_address')->value}}" name="address"
                               class="form-control mb-2">

                        <!--mail-->
                        <label >Mail</label>
                        <input type="hidden" value="type_mail" name="type_mail">
                        <input type="text" value="{{getSystemSetting('type_mail')->value}}" name="mail"
                               class="form-control mb-2">

                        <!--fb-->
                        <label >Facebook Link</label>
                        <input type="hidden" value="type_fb" name="type_fb">
                        <input type="text" value="{{getSystemSetting('type_fb')->value}}" name="fb"
                               class="form-control mb-2">

                        <!--tw-->
                        <label >Twitter Link</label>
                        <input type="hidden" value="type_tw" name="type_tw">
                        <input type="text" value="{{getSystemSetting('type_tw')->value}}" name="tw"
                               class="form-control mb-2">

                        <!--google-->
                        <label >Google Link</label>
                        <input type="hidden" value="type_google" name="type_google">
                        <input type="text" value="{{getSystemSetting('type_google')->value}}" name="google"
                               class="form-control mb-2">

                        <!--google-->
                        <label >Youtube Link</label>
                        <input type="hidden" value="type_youtube" name="type_youtube">
                        <input type="text" value="{{getSystemSetting('type_youtube')->value}}" name="youtube"
                               class="form-control mb-2">

                        <!--google-->
                        <label >Linkedin Link</label>
                        <input type="hidden" value="type_linked" name="type_linked">
                        <input type="text" value="{{getSystemSetting('type_linked')->value}}" name="linkedin"
                               class="form-control mb-2">

                        <!--Number-->
                        <label >Number</label>
                        <input type="hidden" value="type_number" name="type_number">
                        <input type="text" value="{{getSystemSetting('type_number')->value}}" name="number"
                               class="form-control mb-2">

                        <!--Number-->
                        <label >Map</label>
                        <input type="hidden" value="type_map" name="type_map">
                        <input type="text" value="{{getSystemSetting('type_map')->value}}" name="map"
                               class="form-control mb-2">


                        <div class="m-2 float-right">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
                          {{-- --------------------- --}}
                          
                      </div>
                    </div>
                </div>
            </div>
        </div>
      </div><!-- Main Wrapper -->

      <div class="page-footer">
          <p class="no-s">Made with <i class="fa fa-heart"></i> {{ getSystemSetting('type_name')->value }}</p>
      </div>
  </div><!-- Page Inner -->
@endsection
