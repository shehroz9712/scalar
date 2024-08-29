
<!--Start mainmenu area-->
<section class="mainmeu-area stricky">
    <div class="container">

        <nav class="main-menu pull-left">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse clearfix">
                <ul class="navigation">
                    <li>
                        <div class="logo">
                            <a href="{{ route('user.index') }}"><img src="{{ getLogo() }}" style="width: 60px;"
                                    alt="{{ getTitle() }}"></a>
                        </div>
                    </li>
                    <li class="{{ request()->route()->getName() == 'user.index' ? 'current' : '' }}"><a
                            href="{{ route('user.index') }}">Home</a></li>
                    <li class="{{ request()->route()->getName() == 'user.about' ? 'current' : '' }}"><a
                            href="{{ route('user.about') }}">About us</a></li>
                             <li class="{{ request()->route()->getName() == 'user.form' ? 'form' : '' }}"><a
                            href="{{ route('user.form') }}">Get Started</a></li>
                    <li class="{{ request()->route()->getName() == 'user.career' ? 'current' : '' }}"><a
                            href="{{ route('user.career') }}">Careers</a></li>
                    <li class="{{ request()->route()->getName() == 'user.faq' ? 'current' : '' }}"><a
                            href="{{ route('user.faq') }}">Faq</a></li>
                    <li class="{{ request()->route()->getName() == 'user.contact' ? 'current' : '' }}"><a
                            href="{{ route('user.contact') }}">Contact us</a></li>
                </ul>
            </div>
        </nav>
    </div>
</section>
<!--End mainmenu area-->
