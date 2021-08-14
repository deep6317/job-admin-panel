<div class="pcoded-inner-navbar main-menu">
    <div class="">
        <div class="main-menu-header">
            <img class="img-80 img-radius" src="{{asset('assets/images/avatar-4.jpg')}}" alt="User-Profile-Image">
            <div class="user-details">
                <span id="more-details">{{Auth::user()->name}}</span>
            </div>
        </div>

        {{-- <div class="main-menu-content">
            <ul>
                <li class="more-details">
                    <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                    <a href="#!"><i class="ti-settings"></i>Settings</a>
                    <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                </li>
            </ul>
        </div> --}}
    </div>
   {{--  <div class="p-15 p-b-0">
        <form class="form-material">
            <div class="form-group form-primary">
                <input type="text" name="footer-email" class="form-control" required="">
                <span class="form-bar"></span>
                <label class="float-label"><i class="fa fa-search m-r-10"></i>Search Friend</label>
            </div>
        </form>
    </div> --}}
    <div class="pcoded-navigation-label" data-i18n="nav.category.navigation"></div>
    <ul class="pcoded-item pcoded-left-item">
        <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
            <a href="{{route('dashboard')}}" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ request()->is('job') ? 'active' : '' }}">
            <a href="{{route('job.index')}}" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-briefcase"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.main">Job Posts</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ request()->is('active-job-index') ? 'active' : '' }}">
            <a href="{{route('active-job-index')}}" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-check-box"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.main">Acitve Jobs</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ request()->is('user') ? 'active' : '' }}">
            <a href="{{route('user.index')}}" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-user"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.main">Users</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ request()->is('feedback') ? 'active' : '' }}">
            <a href="{{route('feedback.index')}}" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-comments"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.main">Feedbacks</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ request()->is('about-us') ? 'active' : '' }}">
            <a href="{{route('about-us.index')}}" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-receipt"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.main">About Us</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ request()->is('contact-us') ? 'active' : '' }}">
            <a href="{{route('contact-us.index')}}" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-email"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.main">Contact Us</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
    </ul>
</div>