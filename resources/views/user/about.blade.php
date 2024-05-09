@extends('user.layouts.app')
@section('css')
@endsection
@section('content')
    <!--Start about area-->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 pull-right">
                    <div class="content">
                        <div class="video-gallery">
                            <img src="{{ imageFile('about/video-gallery.jpg') }}" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content text-center">
                                        <a href="https://www.youtube.com/watch?v=KssOT2QVg-M" class="video-popup"><img
                                                alt="Awesome Image" src="{{ imageFile('resources/play-btn.png') }}"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text">
                            <div class="sec-title">
                                <h1>Company Overview</h1>
                                <span class="border"></span>
                            </div>
                            <p class="top">WPConsulting over 20 years of experience we’ll ensure you always get the best
                                guidance. We serve a clients at every level of their organization, in whatever capacity
                                we can be most useful, whether as a trusted advisor to top trusted our management or as
                                a hands-on coach for fronts line employees. For every engagement, we assemble a team
                                with the most appropriate experience and experttise. Our goal is to optimisse seds your
                                business relationships by tailoring our services to your individual requirements</p>
                            <p>We strive to build a relationship of trust with every client, for the long-term. 70% of
                                our work is for clients that we have served for over 10 years. We are focused on
                                developing a strong sed Pay for Success field through market education, publications,
                                events, research and analysis Success field through market education. </p>
                        </div>
                        <div class="about-tab">
                            <ul class="tab-menu">
                                <li class="active">
                                    <a href="#mission" data-toggle="tab">
                                        <i class="fa fa-crosshairs" aria-hidden="true"></i>Our Mission
                                    </a>
                                </li>
                                <li>
                                    <a href="#vision" data-toggle="tab">
                                        <i class="fa fa-crosshairs" aria-hidden="true"></i>Our Vision
                                    </a>
                                </li>
                                <li>
                                    <a href="#value" data-toggle="tab">
                                        <i class="fa fa-crosshairs" aria-hidden="true"></i>Value & Ethics
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <!--Start single tab pane-->
                                <div class="tab-pane active" id="mission">
                                    <div class="text-holder">
                                        <p>Founded in 1956, we today have a global reach with operationns 10 countries
                                            and 10,200 employees from oveer 300 different nationns, we are focused on
                                            developing a strong Consulting field through market education.</p>
                                    </div>
                                    <div class="item-list">
                                        <!--Start single item list-->
                                        <div class="single-item-list">
                                            <div class="icon-holder">
                                                <span class="flaticon-right-arrow-in-a-circle"></span>
                                            </div>
                                            <div class="content">
                                                <h4>Smart way to work</h4>
                                                <p>Smart work and get good results</p>
                                            </div>
                                        </div>
                                        <!--End single item list-->
                                        <!--Start single item list-->
                                        <div class="single-item-list">
                                            <div class="icon-holder">
                                                <span class="flaticon-right-arrow-in-a-circle"></span>
                                            </div>
                                            <div class="content">
                                                <h4>Make a Difference</h4>
                                                <p>Create value & Make a difference</p>
                                            </div>
                                        </div>
                                        <!--End single item list-->
                                        <!--Start single item list-->
                                        <div class="single-item-list">
                                            <div class="icon-holder">
                                                <span class="flaticon-right-arrow-in-a-circle"></span>
                                            </div>
                                            <div class="content">
                                                <h4>Optimism & Happiness</h4>
                                                <p>Inspire moments of happiness</p>
                                            </div>
                                        </div>
                                        <!--End single item list-->
                                        <!--Start single item list-->
                                        <div class="single-item-list">
                                            <div class="icon-holder">
                                                <span class="flaticon-right-arrow-in-a-circle"></span>
                                            </div>
                                            <div class="content">
                                                <h4>Time Management</h4>
                                                <p>Get more results in less time</p>
                                            </div>
                                        </div>
                                        <!--End single item list-->
                                    </div>
                                </div>
                                <!--End single tab pane-->
                                <!--Start single tab pane-->
                                <div class="tab-pane" id="vision">
                                    <div class="text-holder">
                                        <p>Oveer 300 different nationns, we are focused on developing a strong
                                            Consulting field through Founded in 1956, we today have a global reach with
                                            operationns 10 countries and 10,200 employees from market education.</p>
                                    </div>
                                    <div class="item-list">
                                        <!--Start single item list-->
                                        <div class="single-item-list">
                                            <div class="icon-holder">
                                                <span class="flaticon-right-arrow-in-a-circle"></span>
                                            </div>
                                            <div class="content">
                                                <h4>Smart way to work</h4>
                                                <p>Smart work and get good results</p>
                                            </div>
                                        </div>
                                        <!--End single item list-->
                                        <!--Start single item list-->
                                        <div class="single-item-list">
                                            <div class="icon-holder">
                                                <span class="flaticon-right-arrow-in-a-circle"></span>
                                            </div>
                                            <div class="content">
                                                <h4>Make a Difference</h4>
                                                <p>Create value & Make a difference</p>
                                            </div>
                                        </div>
                                        <!--End single item list-->
                                        <!--Start single item list-->
                                        <div class="single-item-list">
                                            <div class="icon-holder">
                                                <span class="flaticon-right-arrow-in-a-circle"></span>
                                            </div>
                                            <div class="content">
                                                <h4>Optimism & Happiness</h4>
                                                <p>Inspire moments of happiness</p>
                                            </div>
                                        </div>
                                        <!--End single item list-->
                                        <!--Start single item list-->
                                        <div class="single-item-list">
                                            <div class="icon-holder">
                                                <span class="flaticon-right-arrow-in-a-circle"></span>
                                            </div>
                                            <div class="content">
                                                <h4>Time Management</h4>
                                                <p>Get more results in less time</p>
                                            </div>
                                        </div>
                                        <!--End single item list-->
                                    </div>
                                </div>
                                <!--End single tab pane-->
                                <!--Start single tab pane-->
                                <div class="tab-pane" id="value">
                                    <div class="text-holder">
                                        <p>Different nationns, we are focused on developing a strong Consulting field
                                            through market educatio Founded in 1956, we today have a global reach with
                                            operationns 10 countries and 10,200 employees from oveer 300.</p>
                                    </div>
                                    <div class="item-list">
                                        <!--Start single item list-->
                                        <div class="single-item-list">
                                            <div class="icon-holder">
                                                <span class="flaticon-right-arrow-in-a-circle"></span>
                                            </div>
                                            <div class="content">
                                                <h4>Smart way to work</h4>
                                                <p>Smart work and get good results</p>
                                            </div>
                                        </div>
                                        <!--End single item list-->
                                        <!--Start single item list-->
                                        <div class="single-item-list">
                                            <div class="icon-holder">
                                                <span class="flaticon-right-arrow-in-a-circle"></span>
                                            </div>
                                            <div class="content">
                                                <h4>Make a Difference</h4>
                                                <p>Create value & Make a difference</p>
                                            </div>
                                        </div>
                                        <!--End single item list-->
                                        <!--Start single item list-->
                                        <div class="single-item-list">
                                            <div class="icon-holder">
                                                <span class="flaticon-right-arrow-in-a-circle"></span>
                                            </div>
                                            <div class="content">
                                                <h4>Optimism & Happiness</h4>
                                                <p>Inspire moments of happiness</p>
                                            </div>
                                        </div>
                                        <!--End single item list-->
                                        <!--Start single item list-->
                                        <div class="single-item-list">
                                            <div class="icon-holder">
                                                <span class="flaticon-right-arrow-in-a-circle"></span>
                                            </div>
                                            <div class="content">
                                                <h4>Time Management</h4>
                                                <p>Get more results in less time</p>
                                            </div>
                                        </div>
                                        <!--End single item list-->
                                    </div>
                                </div>
                                <!--End single tab pane-->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="growth-statistics">
                                <div class="sec-title">
                                    <h1>Growth Scalar</h1>
                                    <span class="border"></span>
                                </div>
                                <div class="left pull-left">
                                    <div class="chart">
                                        <img src="{{ imageFile('about/chart.jpg') }}" alt="Awesome Chart">
                                        <ul class="data-set">
                                            <li><span></span>Our First Data Set</li>
                                            <li class="active"><span></span>Our Second Data Set</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="right pull-right">
                                    <div class="about-page-fact-counter">
                                        <!--Start single fact counter-->
                                        <div class="single-fact-counter">
                                            <span class="timer" data-from="0" data-to="107" data-speed="5000"
                                                data-refresh-interval="50">107</span>
                                            <h3>Experienced Consultants</h3>
                                        </div>
                                        <!--End single fact counter-->
                                        <!--Start single fact counter-->
                                        <div class="single-fact-counter">
                                            <span class="timer" data-from="50" data-to="2000" data-speed="5000"
                                                data-refresh-interval="50">2000</span>
                                            <h3>Projects Completed</h3>
                                        </div>
                                        <!--End single fact counter-->
                                        <!--Start single fact counter-->
                                        <div class="single-fact-counter">
                                            <span class="timer" data-from="0" data-to="100" data-speed="5000"
                                                data-refresh-interval="50">100</span>
                                            <i class="fa fa-percent" aria-hidden="true"></i>
                                            <h3>Satisfied Customers</h3>
                                        </div>
                                        <!--End single fact counter-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-7 col-xs-12 pull-left">
                    <div class="about-sidebar">
                        <!--Start single sidebar-->
                        <div class="single-sidebar">
                            <ul class="about-lists">
                                <li class="active"><a href="{{ route('user.about') }}">About Company</a></li>
                                <li><a href="{{ route('user.company-history') }}">Company History</a></li>
                                <li><a href="{{ route('user.our-team') }}">Our Team</a></li>
                                <li><a href="{{ route('user.our-partner') }}">Our Partners</a></li>
                                <li><a href="{{ route('user.faq') }}">FAQ</a></li>
                                <li><a href="{{ route('user.career') }}">Careers</a></li>
                                <li><a href="{{ route('user.client-feedback') }}">Client Feedback</a></li>
                            </ul>
                        </div>
                        <!--End single sidebar-->
                        <!--Start single sidebar-->
                        <div class="single-sidebar">
                            <div class="title">
                                <h2>Our Brochures</h2>
                                <span class="border"></span>
                            </div>
                            <ul class="brochures-lists">
                                <li>
                                    <a href="#">
                                        <span>Pdf</span>Download.Pdf<i class="flaticon-download-to-storage-drive"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>Doc</span>Download.Txt<i class="flaticon-download-to-storage-drive"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--End single sidebar-->
                        <!--Start single sidebar-->
                        <div class="single-sidebar">
                            <div class="title">
                                <h2>Recent Projects</h2>
                                <span class="border"></span>
                            </div>
                            <ul class="latest-project">
                                <li>
                                    <div class="img-holder">
                                        <img src="{{ imageFile('about/recent-projects/1.jpg') }}" alt="Awesome Image">
                                        <div class="overlay">
                                            <div class="box">
                                                <div class="content">
                                                    <a href="#"><span class="flaticon-link-symbol"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-holder">
                                        <img src="{{ imageFile('about/recent-projects/2.jpg') }}" alt="Awesome Image">
                                        <div class="overlay">
                                            <div class="box">
                                                <div class="content">
                                                    <a href="#"><span class="flaticon-link-symbol"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-holder">
                                        <img src="{{ imageFile('about/recent-projects/3.jpg') }}" alt="Awesome Image">
                                        <div class="overlay">
                                            <div class="box">
                                                <div class="content">
                                                    <a href="#"><span class="flaticon-link-symbol"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-holder">
                                        <img src="{{ imageFile('about/recent-projects/4.jpg') }}" alt="Awesome Image">
                                        <div class="overlay">
                                            <div class="box">
                                                <div class="content">
                                                    <a href="#"><span class="flaticon-link-symbol"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-holder">
                                        <img src="{{ imageFile('about/recent-projects/5.jpg') }}" alt="Awesome Image">
                                        <div class="overlay">
                                            <div class="box">
                                                <div class="content">
                                                    <a href="#"><span class="flaticon-link-symbol"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-holder">
                                        <img src="{{ imageFile('about/recent-projects/6.jpg') }}" alt="Awesome Image">
                                        <div class="overlay">
                                            <div class="box">
                                                <div class="content">
                                                    <a href="#"><span class="flaticon-link-symbol"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-holder">
                                        <img src="{{ imageFile('about/recent-projects/7.jpg') }}" alt="Awesome Image">
                                        <div class="overlay">
                                            <div class="box">
                                                <div class="content">
                                                    <a href="#"><span class="flaticon-link-symbol"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-holder">
                                        <img src="{{ imageFile('about/recent-projects/8.jpg') }}" alt="Awesome Image">
                                        <div class="overlay">
                                            <div class="box">
                                                <div class="content">
                                                    <a href="#"><span class="flaticon-link-symbol"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-holder">
                                        <img src="{{ imageFile('about/recent-projects/9.jpg') }}" alt="Awesome Image">
                                        <div class="overlay">
                                            <div class="box">
                                                <div class="content">
                                                    <a href="#"><span class="flaticon-link-symbol"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--End single sidebar-->
                        <!--Start single sidebar-->
                        <div class="single-sidebar business">
                            <div class="business-enquiry">
                                <h4>For Business Enquiry</h4>
                                <p>You can also send us an <a href="#">email</a> and we’ll get in touch shortly, or
                                    You
                                    Can Call to our Troll Free Number -</p>
                                <span>(+91) 00-700-6202.</span>
                            </div>
                        </div>
                        <!--End single sidebar-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End about area-->

    <!--Start slogan area-->
    <section class="slogan-area">
        <div class="container">
            <div class="title pull-left">
                <h2>Over 20 years of experience we’ll ensure you always get the best guidance.</h2>
            </div>
            <div class="buttons pull-right">
                <a href="#" class="hvr-sweep-to-bottom">request quote</a>
            </div>
        </div>
    </section>
    <!--End slogan area-->
@endsection
