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

                    <li class="dropdown"><a class="nav-link menu-title link-nav"
                            href="{{ route('admin.admins.index') }}"><i data-feather="user"></i><span>Admin</span></a>
                    </li>

                    <li class="dropdown"><a class="nav-link menu-title link-nav"
                            href="{{ route('admin.forms.index') }}"><i data-feather="heart"></i><span>Forms</span></a>
                    </li>

                    {{-- <li class="dropdown"><a class="nav-link menu-title link-nav" href="{{ route('admin.index') }}s"><i
                                data-feather="heart"></i><span>pages</span></a></li> --}}
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
