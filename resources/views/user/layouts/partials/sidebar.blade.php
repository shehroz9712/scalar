<header class="main-nav">
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>


                    <li class="dropdown"><a class="nav-link menu-title active" href="javascript:void(0)"><i
                                data-feather="home"></i><span>Admin</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{ route('admin.index') }}">Admin Manage</a></li>
                            <li><a href="{{ route('admin.index') }}">Create Admin</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                                data-feather="home"></i><span>Vandor</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{ route('admin.index') }}">Vandor Manage</a></li>
                            <li><a href="{{ route('admin.index') }}">Create Vandor</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                                data-feather="home"></i><span>User</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{ route('admin.index') }}">User Manage</a></li>
                            <li><a href="{{ route('admin.index') }}">Create User</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                                data-feather="home"></i><span>Service</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{ route('admin.index') }}">Service Manage</a></li>
                            <li><a href="{{ route('admin.index') }}">Create Service</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                                data-feather="home"></i><span>Blog</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{ route('admin.index') }}">Blog Manage</a></li>
                            <li><a href="{{ route('admin.index') }}">Create Blog</a></li>
                        </ul>
                    </li>



                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                                data-feather="home"></i><span>Dropdown</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{ route('admin.index') }}">Dropdown</a></li>
                            <li><a href="{{ route('admin.index') }}">Dropdown</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a class="nav-link menu-title link-nav" href="{{ route('admin.index') }}s"><i
                                data-feather="heart"></i><span>single</span></a></li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
