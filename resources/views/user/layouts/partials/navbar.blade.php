<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="logo">
                    <a href="{{ route('user.index') }}"><img src="{{ getLogo() }}" style="width: 60px;"
                            alt="{{ getTitle() }}"></a>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <ul class="contact-info">
                    @if (getAddress())
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-signs"></span>
                            </div>
                            <div class="content">
                                <h5>{!! getAddress() !!}</h5>
                            </div>
                        </li>
                    @endif
                    @if (getEmail())

                    <li>
                        <div class="icon-holder">
                            <span class="flaticon-e-mail-envelope envlop"></span>
                        </div>
                        <div class="content">
                            <h5>{!! getEmail() !!}<br>Mail us for enquiry </h5>
                        </div>
                    </li>
                    @endif
                    @if (getPhone())
                        <li class="pdleft">
                            <div class="icon-holder">
                                <span class="flaticon-phone-call"></span>
                            </div>
                            <div class="content">
                                <h5>{{ getPhone() }}<br>Call us for enquiry</h5>
                            </div>
                        </li>
                    @endif

                    <li class="request">
                        <a class="request-quote hvr-sweep-to-bottom" href="{{ route('user.form') }}">Get Started

                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!--End header area-->

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
                    <li class="{{ request()->route()->getName() == 'user.index' ? 'current' : '' }}"><a href="{{ route('user.index') }}">Home</a></li>
                    <li class="{{ request()->route()->getName() == 'user.about' ? 'current' : '' }}"><a href="{{ route('user.about') }}">About us</a></li>
                    <li class="{{ request()->route()->getName() == 'user.career' ? 'current' : '' }}"><a href="{{ route('user.career') }}">Career</a></li>
                    <li class="{{ request()->route()->getName() == 'user.faq' ? 'current' : '' }}"><a href="{{ route('user.faq') }}">Faq</a></li>
                    <li class="{{ request()->route()->getName() == 'user.contact' ? 'current' : '' }}"><a href="{{ route('user.contact') }}">Contact us</a></li>
                </ul>
            </div>
        </nav>
        <div class="social-links pull-right">
            <ul>
                @if (getFacebook())
                    <li><a href="{{ getFacebook() }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                @endif
                @if (getTwitter())
                    <li><a href="{{ getTwitter() }}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                @endif
                @if (getInstagram())
                    <li><a href="{{ getInstagram() }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                @endif
                @if (getLinkedin())
                    <li><a href="{{ getLinkedin() }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                @endif
            </ul>
        </div>
    </div>
</section>
<!--End mainmenu area-->
