<div class="leftbar">
    <!-- Start Sidebar -->
    <div class="sidebar">
        <!-- Start Navigationbar -->
        <div class="navigationbar">

            <div class="vertical-menu-detail">
                <div class="logobar">
                    <a href="{{url('/')}}" class="logo logo-large">
                        <img src="{{ filePath(getSystemSetting('type_logo')->value) ?? asset('assets/images/logo.svg') }}" class="img-fluid" alt="logo">
                    </a>
                    
                </div>

                <ul class="vertical-menu">
                    {{--start common part--}}
                    <li class="{{request()->is('dashboard/home*') ||request()->is('/') ? 'active':null}}">
                        <a href="{{route('dashboard')}}">
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <li class="{{request()->is('dashboard/user*') || request()->is('dashboard/module*') || request()->is('dashboard/permission*') || request()->is('dashboard/group*') ? 'active' : null}}">
                        <a href="javaScript:void();">
                            <img src="{{asset('assets/images')}}/svg-icon/frontend.svg" class="img-fluid" alt="frontend"><span>User Management </span><i
                                class="feather icon-chevron-right"></i>
                        </a>
                        <ul class="vertical-submenu {{request()->is('dashboard/user*') || request()->is('dashboard/module*') || request()->is('dashboard/permission*') || request()->is('dashboard/group*') ? 'menu-open' : null}}">
                            <li  class="{{request()->is('dashboard/user*') ? 'active':null}}">
                                <a href="{{route('users.index')}}">User)</a></li>
                            <li class="{{request()->is('dashboard/group*') ? 'active':null}}">
                                <a href="{{route('groups.index')}}">Group)</a></li>
                            <li class="{{request()->is('dashboard/module*') ? 'active':null}}">
                                <a href="{{route('modules.index')}}">Permission Module</a></li>
                            <li  class="{{request()->is('dashboard/permission*') ? 'active':null}}">
                                <a href="{{route('permissions.index')}}">permission</a></li>
                        </ul>
                    </li>

                    <li class="{{request()->is('dashboard/smtp*')
                                   || request()->is('dashboard/language*')
                                   || request()->is('dashboard/slider*')
                                   || request()->is('dashboard/setting*')
                                   || request()->is('dashboard/currency*') ? 'active' : null}}">
                        <a href="javaScript:void();">
                            <img src="{{asset('assets/images')}}/svg-icon/frontend.svg" class="img-fluid" alt="frontend"><span>Settings </span><i
                                class="feather icon-chevron-right"></i>
                        </a>
                        <ul class="vertical-submenu {{request()->is('dashboard/smtp*')
                                   || request()->is('dashboard/language*')
                                   || request()->is('dashboard/slider*')
                                   || request()->is('dashboard/setting*')
                                   || request()->is('dashboard/currency*') ? 'menu-open' : null}}">

                            <li  class="{{request()->is('dashboard/language*') ?'active':null}}">
                                <a href="{{route('language.index')}}">Languages Settings</a></li>
                            <li class="{{request()->is('dashboard/currency*') ?'active':null}}">
                                <a href="{{route('currencies.index')}}">Currency Settings</a></li>
                            <li class=" {{request()->is('dashboard/smtp*') ?'active':null}}">
                                <a href="{{route('smtp.create')}}">SMTP Settings</a></li>
                            <li class="{{request()->is('dashboard/setting*') ?'active':null}}">
                                <a href="{{route('site.setting')}}"> Organization Setup</a></li>
                            <li class="{{request()->is('dashboard/slider/settings*') ?'active':null}}">
                                <a href="{{route('slider.index')}}"> Slider Setup</a></li>
                        </ul>
                    </li>

                    {{--end common part--}}

                    {{-- Enrollment --}}
                    <li><h5 class="menu-title">Enroll Management</h5></li>
                    
                    <li class="{{request()->is('dashboard/enrollments*') || request()->is('dashboard/form/questions*') ? 'active':null}}">
                        <a href="javaScript:void();">
                            <img src="{{asset('assets/images')}}/svg-icon/frontend.svg" class="img-fluid" alt="frontend"><span>Enrollments</span><i
                                class="feather icon-chevron-right"></i>
                        </a>
                        <ul class="vertical-submenu">
                            <li class="{{request()->is('dashboard/enrollments*') ? 'active': null}}"><a href="{{route('enrollment.index')}}">Enroll List</a></li>
                            <li class="{{request()->is('dashboard/form/questions*') ? 'active': null}}"><a href="{{route('form.question')}}">Enroll Form</a></li>
                            <li class="{{request()->is('dashboard/form/help*') ? 'active': null}}"><a href="{{route('form.help')}}">Form Tips</a></li>
                        </ul>
                    </li>
                    {{-- Enrollment::END --}}

                    {{-- Page --}}
                    <li><h5 class="menu-title">Page Management</h5></li>
                    
                    <li class="{{request()->is('dashboard/about*') ? 'active':null}}">
                        <a href="javaScript:void();">
                            <img src="{{asset('assets/images')}}/svg-icon/frontend.svg" class="img-fluid" alt="frontend"><span>Pages</span><i
                                class="feather icon-chevron-right"></i>
                        </a>
                        <ul class="vertical-submenu">
                            <li class="{{request()->is('dashboard/about*') ? 'active': null}}"><a href="{{route('about')}}">About Us</a></li>
                            <li class="{{request()->is('dashboard/team*') ? 'active': null}}"><a href="{{route('team.index')}}">Our Team</a></li>
                        </ul>
                    </li>
                    {{-- Page::END --}}

                    {{-- Blog --}}
                    <li><h5 class="menu-title">Blog Management</h5></li>
                    
                    <li class="{{request()->is('dashboard/blog*') || request()->is('dashboard/category*') ? 'active':null}}">
                        <a href="javaScript:void();">
                            <img src="{{asset('assets/images')}}/svg-icon/frontend.svg" class="img-fluid" alt="frontend"><span>Blogs</span><i
                                class="feather icon-chevron-right"></i>
                        </a>
                        <ul class="vertical-submenu">
                            <li class="{{request()->is('dashboard/blog*') ? 'active': null}}"><a href="{{route('blog.index')}}">Add New Blog</a></li>
                            <li class="{{request()->is('dashboard/all/blog*') ? 'active': null}}"><a href="{{ route('blog.all') }}">All Blog</a></li>
                            <li class="{{request()->is('dashboard/category*') ? 'active':null}}"><a href="{{route('categories.index')}}"> Categories</a></li>
                        </ul>
                    </li>
                    {{-- Blog::END --}}

                    {{-- Blog --}}
                    <li><h5 class="menu-title">Course Management</h5></li>
                    
                    <li class="{{request()->is('dashboard/course*') ? 'active':null}}">
                        <a href="javaScript:void();">
                            <img src="{{asset('assets/images')}}/svg-icon/frontend.svg" class="img-fluid" alt="frontend"><span>Courses</span><i
                                class="feather icon-chevron-right"></i>
                        </a>
                        <ul class="vertical-submenu">
                            <li class="{{request()->is('dashboard/course*') ? 'active': null}}"><a href="{{route('course.index')}}">Add New Course</a></li>
                            <li class="{{request()->is('dashboard/courses*') ? 'active': null}}"><a href="{{route('course.all')}}">All Courses</a></li>
                        </ul>
                    </li>
                    {{-- Blog::END --}}

                </ul>

            </div>
        </div>
        <!-- End Navigationbar -->
    </div>
    <!-- End Sidebar -->
</div>
