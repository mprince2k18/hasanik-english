<div class="leftbar">
    <!-- Start Sidebar -->
    <div class="sidebar">
        <!-- Start Navigationbar -->
        <div class="navigationbar">

            <div class="vertical-menu-detail">
                <div class="logobar">
                    <a href="{{url('/')}}" class="logo logo-large">
                        <img src="{{ filePath(getSystemSetting('favicon_icon')->value) ?? asset('assets/images/logo.svg') }}" class="img-fluid" alt="logo">
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
                            <li class="{{request()->is('dashboard/form/help*') ? 'active': null}}"><a href="{{route('form.help')}}">Form Help</a></li>
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
                            <li class="{{request()->is('dashboard/team*') ? 'active': null}}"><a href="#">All Blog</a></li>
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
                            <li class="{{request()->is('dashboard/team*') ? 'active': null}}"><a href="#">All Courses</a></li>
                        </ul>
                    </li>
                    {{-- Blog::END --}}

                    <li><h5 class="menu-title">eCommerce</h5></li>
                    <li><a href="{{url('/dashboard-ecommerce')}}"><img src="{{asset('assets/images')}}/svg-icon/dashboard.svg"
                                                                       class="img-fluid" alt="dashboard">Dashboard</a>
                    </li>
                    <li>
                        <a href="javaScript:void();">
                            <img src="{{asset('assets/images')}}/svg-icon/frontend.svg" class="img-fluid" alt="frontend"><span>Front End</span><i
                                class="feather icon-chevron-right"></i>
                        </a>
                        <ul class="vertical-submenu">
                            <li><a href="{{url('/ecommerce-shop')}}">Shop</a></li>
                            <li><a href="{{url('/ecommerce-single-product')}}">Single Product</a></li>
                            <li><a href="{{url('/ecommerce-cart')}}">Cart</a></li>
                            <li><a href="{{url('/ecommerce-checkout')}}">Checkout</a></li>
                            <li><a href="{{url('/ecommerce-thankyou')}}">Thank You</a></li>
                            <li><a href="{{url('/ecommerce-myaccount')}}">My Account</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javaScript:void();">
                            <img src="{{asset('assets/images')}}/svg-icon/backend.svg" class="img-fluid"
                                 alt="backend"><span>Back End</span><i class="feather icon-chevron-right"></i>
                        </a>
                        <ul class="vertical-submenu">
                            <li><a href="{{url('/ecommerce-product-list')}}">Product List</a></li>
                            <li><a href="{{url('/ecommerce-product-detail')}}">Product Detail</a></li>
                            <li><a href="{{url('/ecommerce-order-list')}}">Order List</a></li>
                            <li><a href="{{url('/ecommerce-order-detail')}}">Order Detail</a></li>
                        </ul>
                    </li>

                    <li><h5 class="menu-title">CRM</h5></li>
                    <li><a href="{{url('/')}}"><img src="{{asset('assets/images')}}/svg-icon/dashboard.svg" class="img-fluid"
                                                    alt="dashboard">Dashboard</a></li>
                    <li><a href="{{url('/crm-projects')}}"><img src="{{asset('assets/images')}}/svg-icon/reports.svg"
                                                                class="img-fluid" alt="projects">Projects</a></li>
                    <li><a href="{{url('/crm-lead-status')}}"><img src="{{asset('assets/images')}}/svg-icon/charts.svg"
                                                                   class="img-fluid" alt="leads">Lead Status</a></li>
                    <li><a href="{{url('/crm-clients')}}"><img src="{{asset('assets/images')}}/svg-icon/customers.svg"
                                                               class="img-fluid" alt="clients">Clients</a></li>

                    <li><h5 class="menu-title">Hospital</h5></li>
                    <li><a href="{{url('/dashboard-hospital')}}"><img src="{{asset('assets/images')}}/svg-icon/dashboard.svg"
                                                                      class="img-fluid" alt="dashboard">Dashboard</a>
                    </li>
                    <li><a href="{{url('/hospital-appointment')}}"><img src="{{asset('assets/images')}}/svg-icon/calender.svg"
                                                                        class="img-fluid" alt="appointments">Appointments</a>
                    </li>
                    <li><a href="{{url('/hospital-doctor')}}"><img src="{{asset('assets/images')}}/svg-icon/doctor.svg"
                                                                   class="img-fluid" alt="doctors">Doctors</a></li>
                    <li><a href="{{url('/hospital-patient')}}"><img src="{{asset('assets/images')}}/svg-icon/customers.svg"
                                                                    class="img-fluid" alt="patients">Patients</a></li>

                    <li><h5 class="menu-title">UI Kits</h5></li>
                    <li>
                        <a href="javaScript:void();">
                            <img src="{{asset('assets/images')}}/svg-icon/basic.svg" class="img-fluid"
                                 alt="basic"><span>Basic UI</span><i class="feather icon-chevron-right"></i>
                        </a>
                        <ul class="vertical-submenu">
                            <li><a href="{{url('/basic-ui-kits-alerts')}}">Alerts</a></li>
                            <li><a href="{{url('/basic-ui-kits-badges')}}">Badges</a></li>
                            <li><a href="{{url('/basic-ui-kits-buttons')}}">Buttons</a></li>
                            <li><a href="{{url('/basic-ui-kits-cards')}}">Cards</a></li>
                            <li><a href="{{url('/basic-ui-kits-carousel')}}">Carousel</a></li>
                            <li><a href="{{url('/basic-ui-kits-collapse')}}">Collapse</a></li>
                            <li><a href="{{url('/basic-ui-kits-dropdowns')}}">Dropdowns</a></li>
                            <li><a href="{{url('/basic-ui-kits-embeds')}}">Embeds</a></li>
                            <li><a href="{{url('/basic-ui-kits-grids')}}">Grids</a></li>
                            <li><a href="{{url('/basic-ui-kits-images')}}">Images</a></li>
                            <li><a href="{{url('/basic-ui-kits-media')}}">Media</a></li>
                            <li><a href="{{url('/basic-ui-kits-modals')}}">Modals</a></li>
                            <li><a href="{{url('/basic-ui-kits-paginations')}}">Paginations</a></li>
                            <li><a href="{{url('/basic-ui-kits-popovers')}}">Popovers</a></li>
                            <li><a href="{{url('/basic-ui-kits-progressbars')}}">Progress Bars</a></li>
                            <li><a href="{{url('/basic-ui-kits-spinners')}}">Spinners</a></li>
                            <li><a href="{{url('/basic-ui-kits-tabs')}}">Tabs</a></li>
                            <li><a href="{{url('/basic-ui-kits-toasts')}}">Toasts</a></li>
                            <li><a href="{{url('/basic-ui-kits-tooltips')}}">Tooltips</a></li>
                            <li><a href="{{url('/basic-ui-kits-typography')}}">Typography</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javaScript:void();">
                            <img src="{{asset('assets/images')}}/svg-icon/advanced.svg" class="img-fluid" alt="advanced"><span>Advanced UI</span><i
                                class="feather icon-chevron-right"></i>
                        </a>
                        <ul class="vertical-submenu">
                            <li><a href="{{url('/advanced-ui-kits-image-crop')}}">Image Crop</a></li>
                            <li><a href="{{url('/advanced-ui-kits-jquery-confirm')}}">jQuery Confirm</a></li>
                            <li><a href="{{url('/advanced-ui-kits-nestable')}}">Nestable</a></li>
                            <li><a href="{{url('/advanced-ui-kits-pnotify')}}">Pnotify</a></li>
                            <li><a href="{{url('/advanced-ui-kits-range-slider')}}">Range Slider</a></li>
                            <li><a href="{{url('/advanced-ui-kits-ratings')}}">Ratings</a></li>
                            <li><a href="{{url('/advanced-ui-kits-session-timeout')}}">Session Timeout</a></li>
                            <li><a href="{{url('/advanced-ui-kits-sweet-alerts')}}">Sweet Alerts</a></li>
                            <li><a href="{{url('/advanced-ui-kits-switchery')}}">Switchery</a></li>
                            <li><a href="{{url('/advanced-ui-kits-toolbar')}}">Toolbar</a></li>
                            <li><a href="{{url('/advanced-ui-kits-tour')}}">Tour</a></li>
                            <li><a href="{{url('/advanced-ui-kits-treeview')}}">Tree View</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javaScript:void();">
                            <img src="{{asset('assets/images')}}/svg-icon/apps.svg" class="img-fluid" alt="apps"><span>Apps</span><i
                                class="feather icon-chevron-right"></i>
                        </a>
                        <ul class="vertical-submenu">
                            <li><a href="{{url('/apps-calender')}}">Calender</a></li>
                            <li><a href="{{url('/apps-chat')}}">Chat</a></li>
                            <li>
                                <a href="javaScript:void();">Email<i class="feather icon-chevron-right"></i></a>
                                <ul class="vertical-submenu">
                                    <li><a href="{{url('/apps-email-inbox')}}">Inbox</a></li>
                                    <li><a href="{{url('/apps-email-open')}}">Open</a></li>
                                    <li><a href="{{url('/apps-email-compose')}}">Compose</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('/apps-kanban-board')}}">Kanban Board</a></li>
                            <li><a href="{{url('/apps-onboarding-screens')}}">Onboarding Screens</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javaScript:void();">
                            <img src="{{asset('assets/images')}}/svg-icon/forms.svg" class="img-fluid" alt="forms"><span>Forms</span><i
                                class="feather icon-chevron-right"></i>
                        </a>
                        <ul class="vertical-submenu">
                            <li><a href="{{url('/form-inputs')}}">Basic Elements</a></li>
                            <li><a href="{{url('/form-groups')}}">Groups</a></li>
                            <li><a href="{{url('/form-layouts')}}">Layouts</a></li>
                            <li><a href="{{url('/form-colorpickers')}}">Color Pickers</a></li>
                            <li><a href="{{url('/form-datepickers')}}">Date Pickers</a></li>
                            <li><a href="{{url('/form-editors')}}">Editors</a></li>
                            <li><a href="{{url('/form-file-uploads')}}">File Uploads</a></li>
                            <li><a href="{{url('/form-input-mask')}}">Input Mask</a></li>
                            <li><a href="{{url('/form-maxlength')}}">MaxLength</a></li>
                            <li><a href="{{url('/form-selects')}}">Selects</a></li>
                            <li><a href="{{url('/form-touchspin')}}">Touchspin</a></li>
                            <li><a href="{{url('/form-validations')}}">Validations</a></li>
                            <li><a href="{{url('/form-wizards')}}">Wizards</a></li>
                            <li><a href="{{url('/form-xeditable')}}">X-editable</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javaScript:void();">
                            <img src="{{asset('assets/images')}}/svg-icon/charts.svg" class="img-fluid"
                                 alt="charts"><span>Charts</span><i class="feather icon-chevron-right"></i>
                        </a>
                        <ul class="vertical-submenu">
                            <li><a href="{{url('/chart-apex')}}">Apex</a></li>
                            <li><a href="{{url('/chart-c3')}}">C3</a></li>
                            <li><a href="{{url('/chart-chartistjs')}}">Chartist</a></li>
                            <li><a href="{{url('/chart-chartjs')}}">Chartjs</a></li>
                            <li><a href="{{url('/chart-flot')}}">Flot</a></li>
                            <li><a href="{{url('/chart-knob')}}">Knob</a></li>
                            <li><a href="{{url('/chart-morris')}}">Morris</a></li>
                            <li><a href="{{url('/chart-piety')}}">Piety</a></li>
                            <li><a href="{{url('/chart-sparkline')}}">Sparkline</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javaScript:void();">
                            <img src="{{asset('assets/images')}}/svg-icon/icons.svg" class="img-fluid" alt="icons"><span>Icons</span><i
                                class="feather icon-chevron-right"></i>
                        </a>
                        <ul class="vertical-submenu">
                            <li><a href="{{url('/icon-svg')}}">SVG</a></li>
                            <li><a href="{{url('/icon-dripicons')}}">Dripicons</a></li>
                            <li><a href="{{url('/icon-feather')}}">Feather</a></li>
                            <li><a href="{{url('/icon-flag')}}">Flag</a></li>
                            <li><a href="{{url('/icon-font-awesome')}}">Font Awesome</a></li>
                            <li><a href="{{url('/icon-ionicons')}}">Ion</a></li>
                            <li><a href="{{url('/icon-line-awesome')}}">Line Awesome</a></li>
                            <li><a href="{{url('/icon-material-design')}}">Material Design</a></li>
                            <li><a href="{{url('/icon-simple-line')}}">Simple Line</a></li>
                            <li><a href="{{url('/icon-socicon')}}">Socicon</a></li>
                            <li><a href="{{url('/icon-themify')}}">Themify</a></li>
                            <li><a href="{{url('/icon-typicons')}}">Typicons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javaScript:void();">
                            <img src="{{asset('assets/images')}}/svg-icon/tables.svg" class="img-fluid"
                                 alt="tables"><span>Tables</span><i class="feather icon-chevron-right"></i>
                        </a>
                        <ul class="vertical-submenu">
                            <li><a href="{{url('/table-bootstrap')}}">Bootstrap</a></li>
                            <li><a href="{{url('/table-datatable')}}">Datatable</a></li>
                            <li><a href="{{url('/table-editable')}}">Editable</a></li>
                            <li><a href="{{url('/table-footable')}}">Foo</a></li>
                            <li><a href="{{url('/table-rwdtable')}}">RWD</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javaScript:void();">
                            <img src="{{asset('assets/images')}}/svg-icon/maps.svg" class="img-fluid" alt="maps"><span>Maps</span><i
                                class="feather icon-chevron-right"></i>
                        </a>
                        <ul class="vertical-submenu">
                            <li><a href="{{url('/map-google')}}">Google</a></li>
                            <li><a href="{{url('/map-vector')}}">Vector</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('/widgets')}}">
                            <img src="{{asset('assets/images')}}/svg-icon/widgets.svg" class="img-fluid"
                                 alt="widgets"><span>Widgets</span><span
                                class="badge badge-success pull-right">New</span>
                        </a>
                    </li>

                    <li><h5 class="menu-title">Pages</h5></li>
                    <li>
                        <a href="javaScript:void();">
                            <img src="{{asset('assets/images')}}/svg-icon/basic_page.svg" class="img-fluid" alt="basic_page"><span>Basic</span><i
                                class="feather icon-chevron-right"></i>
                        </a>
                        <ul class="vertical-submenu">
                            <li><a href="{{url('/page-starter')}}">Starter</a></li>
                            <li><a href="{{url('/page-blog')}}">Blog</a></li>
                            <li><a href="{{url('/page-faq')}}">FAQ</a></li>
                            <li><a href="{{url('/page-gallery')}}">Gallery</a></li>
                            <li><a href="{{url('/page-invoice')}}">Invoice</a></li>
                            <li><a href="{{url('/page-pricing')}}">Pricing</a></li>
                            <li><a href="{{url('/page-timeline')}}">Timeline</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javaScript:void();">
                            <img src="{{asset('assets/images')}}/svg-icon/authentication.svg" class="img-fluid" alt="authentication"><span>Authentications</span><i
                                class="feather icon-chevron-right"></i>
                        </a>
                        <ul class="vertical-submenu">
                            <li><a href="{{url('/user-login')}}">Login</a></li>
                            <li><a href="{{url('/user-register')}}">Register</a></li>
                            <li><a href="{{url('/user-forgotpsw')}}">Forgot Password</a></li>
                            <li><a href="{{url('/user-lock-screen')}}">Lock Screen</a></li>
                            <li><a href="{{url('/error-comingsoon')}}">Coming Soon</a></li>
                            <li><a href="{{url('/error-maintenance')}}">Maintenance</a></li>
                            <li><a href="{{url('/error-404')}}">Error 404</a></li>
                            <li><a href="{{url('/error-500')}}">Error 500</a></li>
                        </ul>
                    </li>


                </ul>

            </div>
        </div>
        <!-- End Navigationbar -->
    </div>
    <!-- End Sidebar -->
</div>
