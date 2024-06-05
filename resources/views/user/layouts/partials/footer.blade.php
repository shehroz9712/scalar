    <!--Start slogan area-->
    <section class="slogan-area">
        <div class="container">
            <div class="title pull-left">
                <h2>Over 20 years of experience we’ll ensure you always get the best guidance.</h2>
            </div>
            <div class="buttons pull-right">
                <a href="{{ route('user.form') }}" class="hvr-sweep-to-bottom">Get Started</a>
            </div>
        </div>
    </section>
    <!--End slogan area-->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <!--Start single footer widget-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-footer-widget Statistic-pdbottom">
                        <div class="footer-logo">
                            <img src="{{ getLogo() }}" alt="{{ getTitle() }}"style="width: 100px;">
                        </div>
                        <div class="statistic-info">
                            <p>{{ getFooterSentence() }}</p>
                        </div>
                        <ul class="footer-social-links">
                            <li><a href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i aria-hidden="true" class="fa fa-skype"></i></a></li>
                            <li><a href="#"><i aria-hidden="true" class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!--End single footer widget-->

                <!--Start single footer widget-->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="single-footer-widget Subscribe-pdbottom">
                        <div class="title">
                            <h3>Subscribe Us</h3>
                        </div>
                        <div class="subscribe-form">
                            <p>Sign up today for hints, tips and the latest product news - plus exclusive special
                                offers.</p>
                            <form action="{{ route('user.subscribe') }}" method="POST">
                                @csrf
                                <input type="text" name="email" placeholder="Enter Your Email">
                                <button type="submit"><span class="flaticon-e-mail-envelope"></span></button>
                                <h5>We never spam!</h5>
                            </form>
                        </div>
                    </div>
                </div>
                <!--End single footer widget-->
                <!--Start single footer widget-->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="single-footer-widget">
                        <div class="contact-address">
                            <div id="contact-address-carousel" class="carousel slide" data-ride="carousel">

                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <div class="single-contact-address">
                                            <ul>
                                                <li class="title"> Office</li>
                                                <li>
                                                    <div class="icon-holder map">
                                                        <span class="flaticon-signs"></span>
                                                    </div>
                                                    <div class="content-holder">
                                                        <p>{!! getAddress() !!}</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon-holder">
                                                        <span class="flaticon-phone-call"></span>
                                                    </div>
                                                    <div class="content-holder">
                                                        <p>Call us: {{ getPhone() }}</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon-holder">
                                                        <span class="flaticon-e-mail-envelope"></span>
                                                    </div>
                                                    <div class="content-holder">
                                                        <p>Mail us : {{ getEmail() }}</p>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--End single footer widget-->
            </div>
        </div>
    </footer>
    <!--End footer area-->

    <!--Start footer bottom area-->
    <section class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                    <div class="copyright-text">
                        <p>{!! getCopyright() !!}</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
                    <ul class="footer-menu">
                        <li><a href="{{ route('user.index') }}">Home</a></li>
                        <li><a href="{{ route('user.about') }}">About us</a></li>
                        <li><a href="{{ route('user.blogs') }}">blog</a></li>
                        <li><a href="{{ route('user.contact') }}">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
