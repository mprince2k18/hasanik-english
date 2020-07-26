<div class="page-sidebar sidebar">
    <div class="page-sidebar-inner slimscroll">
        <ul class="menu accordion-menu">
            <li class="{{ Route::currentRouteNamed('dashboard') ? 'active' : '' }}"><a href="{{ route('dashboard') }}" class="waves-effect waves-button"><span class="menu-icon icon-home"></span><p>Dashboard</p><span class="active-page"></span></a></li>
            <li class="{{ Route::currentRouteNamed('enrollment.index') ? 'active' : '' }}"><a href="{{ route('enrollment.index') }}" class="waves-effect waves-button"><span class="menu-icon icon-pencil"></span><p>Enrollments</p></a></li>
            <li class="{{ Route::currentRouteNamed('form.data') ? 'active' : '' }}"><a href="{{ route('form.data') }}" class="waves-effect waves-button"><span class="menu-icon icon-pencil"></span><p>Form Data</p></a></li>
            <li class="{{ Route::currentRouteNamed('form.question') ? 'active' : '' }}"><a href="{{ route('form.question') }}" class="waves-effect waves-button"><span class="menu-icon icon-pencil"></span><p>Form Question</p></a></li>
            <li class="{{ Route::currentRouteNamed('about') ? 'active' : '' }}"><a href="{{ route('about') }}" class="waves-effect waves-button"><span class="menu-icon icon-pencil"></span><p>About</p></a></li>
            <li class="{{ Route::currentRouteNamed('team.index') ? 'active' : '' }}"><a href="{{ route('team.index') }}" class="waves-effect waves-button"><span class="menu-icon icon-pencil"></span><p>Team</p></a></li>
            <li class="{{ Route::currentRouteNamed('blog.index') ? 'active' : '' }}"><a href="{{ route('blog.index') }}" class="waves-effect waves-button"><span class="menu-icon icon-pencil"></span><p>Blog</p></a></li>
            <li class="{{ Route::currentRouteNamed('course.index') ? 'active' : '' }}"><a href="{{ route('course.index') }}" class="waves-effect waves-button"><span class="menu-icon icon-pencil"></span><p>Course</p></a></li>
            <li class="{{ Route::currentRouteNamed('org.index') ? 'active' : '' }}"><a href="{{ route('org.index') }}" class="waves-effect waves-button"><span class="menu-icon icon-pencil"></span><p>Org Settings</p></a></li>
        </ul>
    </div><!-- Page Sidebar Inner -->
</div><!-- Page Sidebar -->
