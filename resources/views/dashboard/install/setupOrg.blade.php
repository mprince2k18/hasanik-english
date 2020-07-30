@extends('dashboard.install.app')
@section('content')

        <div class="card-body">
            <h2 class="text-lg-center p-3">Setup Organization Setting</h2>
            <form method="post" action="{{route('org.setup')}}" enctype="multipart/form-data">
            @csrf

            <!--logo-->
                <label class="label">Organization logo</label>
                <input type="hidden" value="type_logo" name="type_logo">

                <div class="avatar-upload">
                    <div class="avatar-edit">
                        <input type='file' name="logo" id="imageUpload" accept=".png, .jpg, .jpeg"/>
                        <label for="imageUpload"></label>
                    </div>
                    <div class="avatar-preview">
                        <div id="imagePreview"
                             style="background-image: url({{filePath(getSystemSetting('type_logo'))}});">
                        </div>
                    </div>
                </div>
                <!--logo end-->

                <!--footer logo-->
                <label class="label">Footer Logo</label>
                <input type="hidden" value="footer_logo" name="footer_logo">

                <div class="avatar-upload">
                    <div class="avatar-edit">
                        <input type='file' name="f_logo" id="imageUpload_f_logo" accept=".png, .jpg, .jpeg"/>
                        <label for="imageUpload_f_logo"></label>
                    </div>
                    <div class="avatar-preview">
                        <div id="imagePreview_f_logo"
                             style="background-image: url({{filePath(getSystemSetting('footer_logo'))}});">
                        </div>
                    </div>
                </div>
                <!--footer logo end-->

                <!--favicon icon-->
                <label class="label">Favicon Icon</label>
                <input type="hidden" value="favicon_icon" name="favicon_icon">


                <div class="avatar-upload">
                    <div class="avatar-edit">
                        <input type='file' name="f_icon" id="imageUpload_f_icon" accept=".png, .jpg, .jpeg"/>
                        <label for="imageUpload_f_icon"></label>
                    </div>
                    <div class="avatar-preview">
                        <div id="imagePreview_f_icon"
                             style="background-image: url({{filePath(getSystemSetting('favicon_icon'))}}">
                        </div>
                    </div>
                </div>
                <!--favicon end-->

                <!--name-->
                <label class="label">Organization Name</label>
                <input type="hidden" value="type_name" name="type_name">
                <input type="text"  name="name"
                       class="form-control">

                <!--footer-->
                <label class="label">Organization Footer</label>
                <input type="hidden" value="type_footer" name="type_footer">
                <input type="text"  name="footer"
                       class="form-control">

                <!--address-->
                <label class="label">Organization Address</label>
                <input type="hidden" value="type_address" name="type_address">
                <input type="text"  name="address"
                       class="form-control">

                <!--mail-->
                <label class="label">Organization Mail</label>
                <input type="hidden" value="type_mail" name="type_mail">
                <input type="text"  name="mail"
                       class="form-control">

                <!--fb-->
                <label class="label">Organization Facebook Link</label>
                <input type="hidden" value="type_fb" name="type_fb">
                <input type="text"  name="fb"
                       class="form-control">

                <!--tw-->
                <label class="label">Organization Twitter Link</label>
                <input type="hidden" value="type_tw" name="type_tw">
                <input type="text"  name="tw"
                       class="form-control">

                <!--google-->
                <label class="label">Organization Google Link</label>
                <input type="hidden" value="type_google" name="type_google">
                <input type="text"  name="google"
                       class="form-control">

                <!--Number-->
                <label class="label">Organization Number</label>
                <input type="hidden" value="type_number" name="type_number">
                <input type="text"  name="number"
                       class="form-control">


                <div class="m-2">
                    <button class="btn btn-block btn-primary" type="submit">Save</button>
                </div>
            </form>

        </div>



@endsection
