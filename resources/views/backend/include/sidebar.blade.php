<div class="page-sidebar sidebar">
    <div class="page-sidebar-inner slimscroll">
        <ul class="menu accordion-menu">
            <li class="{{ Route::currentRouteNamed('dashboard') ? 'active' : '' }}"><a href="{{ route('dashboard') }}" class="waves-effect waves-button"><span class="menu-icon icon-home"></span><p>Dashboard</p><span class="active-page"></span></a></li>
            <li class="{{ Route::currentRouteNamed('enrollment.index') ? 'active' : '' }}"><a href="{{ route('enrollment.index') }}" class="waves-effect waves-button"><span class="menu-icon icon-pencil"></span><p>Enrollments</p></a></li>
        </ul>
    </div><!-- Page Sidebar Inner -->
</div><!-- Page Sidebar -->
