<div class="topbar">

<!-- LOGO -->
<div class="topbar-left">
    <a href="index.html" class="logo">
                        <span>
                            <img src="{{asset('assets/images/logo.png')}}" alt="" height="16">
                        </span>
        <i>
            <img src="{{asset('assets/images/logo_sm.png')}}" alt="" height="28">
        </i>
    </a>
</div>

<nav class="navbar-custom">

    <ul class="list-unstyled topbar-right-menu float-right mb-0">
        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
               aria-haspopup="false" aria-expanded="false">
                <img src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="user" class="rounded-circle"> <span class="ml-1">{{session('user')}} <i class="mdi mdi-chevron-down"></i> </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <!-- item-->
                <div class="dropdown-item noti-title">
                    <h6 class="text-overflow m-0">Welcome !</h6>
                </div>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fi-head"></i> <span>My Account</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fi-cog"></i> <span>Settings</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fi-help"></i> <span>Support</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fi-lock"></i> <span>Lock Screen</span>
                </a>

                <!-- item-->
                <a href="{{route('logout')}}" class="dropdown-item notify-item">
                    <i class="fi-power"></i> <span>Logout</span>
                </a>

            </div>
        </li>

    </ul>

    <ul class="list-inline menu-left mb-0">
        <li class="float-left">
            <button class="button-menu-mobile open-left waves-light waves-effect">
                <i class="dripicons-menu"></i>
            </button>
        </li>
        <li class="hide-phone app-search">
            <form role="search" class="">
                <input type="text" placeholder="Search..." class="form-control">
                <a href=""><i class="fa fa-search"></i></a>
            </form>
        </li>
    </ul>

</nav>

</div>