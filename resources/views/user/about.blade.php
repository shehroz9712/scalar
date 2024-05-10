@extends('user.layouts.app')
@section('css')
@endsection
@section('content')
    <!--Start about area-->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right">
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
