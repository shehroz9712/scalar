@extends('user.layouts.app')
@section('css')
@endsection
@section('content')
    <div class="container-fluid dashboard-default-sec">
        <div class="row">
            <!--Start Rev Slider Wrapper-->
            <section class="rev_slider_wrapper">
                <div id="slider1" class="rev_slider" data-version="5.0">
                    <ul>
                        <li data-transition="fade">
                            <img src="{{ imageFile('slides/2.jpg') }}" alt="" width="1920" height="695"
                                data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                data-bgparallax="1">
                            <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="0" data-y="center"
                                data-voffset="0" data-transform_idle="o:1;"
                                data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                                data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                                data-start="500">
                                <div class="slide-content-box">
                                    <h1>Welcome to Scalar Finances</h1>
                                    <h3> Where Financial Wellness is Within Reach

                                    </h3>
                                    <div class="buttons">
                                        <a class="black-bg hvr-sweep-to-bottom" href="{{ route('user.form') }}">Get
                                            Started</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li data-transition="slidedown">
                            <img src="{{ imageFile('slides/3.jpg') }}" alt="" width="1920" height="695"
                                data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                data-bgparallax="2">
                            <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="0" data-y="center"
                                data-voffset="0" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="1000">
                                <div class="slide-content-box">
                                    <h1>Welcome to Scalar Finances</h1>
                                    <h3> Where Financial Wellness is Within Reach

                                    </h3>
                                    <div class="buttons">
                                        <a class="black-bg hvr-sweep-to-bottom" href="{{ route('user.form') }}">Get
                                            Started</a>
                                    </div>
                                </div>
                            </div>
                        </li>


                    </ul>
                </div>
            </section>
            <!--End Rev Slider Wrapper-->


            <!--Start welcome area-->
            <section class="welcome-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="content">
                                <div class="sec-title">
                                    <h1>Welcome to Scalar Finances, Where Financial Wellness is Within Reach
                                    </h1>
                                    <span class="border"></span>
                                </div>

                                <p>At Scalar Finances, we believe in making financial resources accessible to everyone, not
                                    just the privileged few. Founded in 2023, Scalar is dedicated to helping individuals and
                                    families plan for a brighter future. Our mission is to provide the tools, guidance, and
                                    services necessary to build financial security and generational wealth.</p>
                                <br>
                                <p>
                                    Explore our range of financial services tailored to your needs.

                                </p>
                                <p>Connect with certified professionals who understand and support your financial
                                    journey.
                                </p>
                                <p>Join us on the path to financial freedom and prosperity.</p>
                                <p>Welcome to Scalar Finances – Your Partner in Building a Better Tomorrow.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="video-box">
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content text-center">
                                            <img src="{{ imageFile('about/video-gallery.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End welcome area-->

            <!--Start Scalar area-->
            <section class="statistic-area">
                <div class="container">
                    <div class="row">
                        <!--Start single Scalar item-->
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="single-statistic-item">
                                <div class="icon-holder">
                                    <span class="flaticon-business"></span>
                                </div>
                                <div class="content">
                                    <h3>Why Scalar?</h3>
                                    <p>Our goal is optimise your business relationship by tailoring our services.</p>
                                </div>
                            </div>
                        </div>
                        <!--End single Scalar item-->
                        <!--Start single Scalar item-->
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="single-statistic-item">
                                <div class="icon-holder">
                                    <span class="flaticon-business-1"></span>
                                </div>
                                <div class="content">
                                    <h3>Pay for Success</h3>
                                    <p>Title change to Our Services are free; sub-copy changed to "our matching services are
                                        free and confidential"</p>
                                </div>
                            </div>
                        </div>
                        <!--End single Scalar item-->
                        <!--Start single Scalar item-->
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="single-statistic-item">
                                <div class="icon-holder">
                                    <span class="flaticon-cogwheel"></span>
                                </div>
                                <div class="content">
                                    <h3>Tailor-Made Solutions</h3>
                                    <p>Title is good, copy change to (you can wordsmith this) "Each individuals needs are
                                        different, we set out to match you with the right advisor for where you are today
                                        and where you want to be tomorrow"
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--End single career em-->
                    </div>
                </div>
            </section>
            <!--End Scalar area-->

            <!--Start fact counter area-->
            <section class="fact-counter-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="title">
                                <h1>What Makes us Special?</h1>
                            </div>
                        </div>
                        <!--Start single fact counter-->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-fact-counter">
                                <span class="timer" data-from="0" data-to="107" data-speed="5000"
                                    data-refresh-interval="50">107</span>
                                <h3>Advisors in Network</h3>
                            </div>
                        </div>
                        <!--End single fact counter-->
                        <!--Start single fact counter-->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-fact-counter">
                                <span class="timer" data-from="50" data-to="2000" data-speed="5000"
                                    data-refresh-interval="50">2000</span>
                                <h3>Consumers Matched</h3>
                            </div>
                        </div>
                        <!--End single fact counter-->
                        <!--Start single fact counter-->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-fact-counter">
                                <span class="timer" data-from="0" data-to="100" data-speed="5000"
                                    data-refresh-interval="50">100</span>
                                <i class="fa fa-percent" aria-hidden="true"></i>
                                <h3>Customer Satisfaction </h3>
                            </div>
                        </div>
                        <!--End single fact counter-->
                    </div>
                </div>
            </section>
            <!--End fact counter area-->

            <!--Start Industry Expertise area-->
            <section class="industry-expertise-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="sec-title">
                                <h1>Advisor Experience</h1>
                                <span class="border"></span>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h2>Scalar Consulting has extensive experience across all industries. We help our clients set
                                new
                                standards of excellence.</h2>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <!--Start single industry expertise item-->
                        <div class="col-md-4">
                            <div class="single-industry-expertise-item">
                                <div class="icon-holder">
                                    <span class="flaticon-business-2"></span>
                                </div>
                                <div class="content">
                                    <h3>New College Graduates</h3>
                                    <p>Our advisors can set you up for long term success while you're just getting started
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--End single industry expertise item-->
                        <!--Start single industry expertise item-->
                        <div class="col-md-4">
                            <div class="single-industry-expertise-item">
                                <div class="icon-holder">
                                    <span class="flaticon-icon-1532"></span>
                                </div>
                                <div class="content">
                                    <h3>Experienced Professionals</h3>
                                    <p>Capitalize on alternative investment opportunities beyond your 401K </p>
                                </div>
                            </div>
                        </div>
                        <!--End single industry expertise item-->
                        <!--Start single industry expertise item-->
                        <div class="col-md-4">
                            <div class="single-industry-expertise-item">
                                <div class="icon-holder">
                                    <span class="flaticon-business-2"></span>
                                </div>
                                <div class="content">
                                    <h3>Planning for College</h3>
                                    <p>Planning for costly college education can be scary, our advisors are here to help
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--End single industry expertise item-->
                        <!--Start single industry expertise item-->
                        <div class="col-md-4">
                            <div class="single-industry-expertise-item">
                                <div class="icon-holder">
                                    <span class="flaticon-networking"></span>
                                </div>
                                <div class="content">
                                    <h3>Planning for Retirement</h3>
                                    <p>Putting your retirement concerns at ease</p>
                                </div>
                            </div>
                        </div>
                        <!--End single industry expertise item-->
                        <!--Start single industry expertise item-->
                        <div class="col-md-4">
                            <div class="single-industry-expertise-item">
                                <div class="icon-holder">
                                    <span class="flaticon-medical"></span>
                                </div>
                                <div class="content">
                                    <h3>Navigating Student Debt</h3>
                                    <p>Our advisors are here to help navigate complicated payment structures</p>
                                </div>
                            </div>
                        </div>
                        <!--End single industry expertise item-->
                        <!--Start single industry expertise item-->
                        <div class="col-md-4">
                            <div class="single-industry-expertise-item">
                                <div class="icon-holder">
                                    <span class="flaticon-technology"></span>
                                </div>
                                <div class="content">
                                    <h3>Planning for Uncertainty</h3>
                                    <p>Life can be anything but simple, let our advisors help you plan for unforeseen
                                        events.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--End single industry expertise item-->
                    </div>
                </div>
            </section>
            <!--End Industry Expertise area-->

            <!--Start caption area-->
            <section class="caption-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="caption-carousel" class="carousel slide" data-ride="carousel">

                                <div class="carousel-inner text-center" role="listbox">
                                    <div class="item active">
                                        <div class="single-caption-carousel-item">
                                            <h1>our mission is to help everyone achieve their financial goals by connecting
                                                them with the right professional to meet their needs</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Start caption area-->



            <!--Start testimonial carousel area-->
            <section class="testimonial-carousel-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="bxslider">
                                <li>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="single-item">
                                                <div class="img-holder">
                                                    <img src="{{ imageFile('resources/testimonial-carousel-1.png') }}"
                                                        alt="Awesome Image">
                                                </div>
                                                <div class="content">
                                                    <h2>“ Scalars process was intuitive and helped me find the right advisor
                                                        to fit my needs ” </h2>
                                                    <h4>Mark Vilton - Villo Finance Ceo</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-item">
                                                <div class="img-holder">
                                                    <img src="{{ imageFile('resources/testimonial-carousel-2.png') }}"
                                                        alt="Awesome Image">
                                                </div>
                                                <div class="content">
                                                    <h2>“ Scalar removes to guesswork from finding the perfect financial
                                                        advisor for me and my family” </h2>
                                                    <h4>Mark Vilton - Villo Finance Ceo</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!--End testimonial carousel area-->

            <!--Start latest news area-->
            <section class="latest-news-area">
                <div class="container">
                    <div class="sec-title pull-left">
                        <h1>Latest News & Updates</h1>
                        <span class="border"></span>
                    </div>
                    <div class="button pull-right">
                        <a href="{{ route('user.blogs') }}">View All</a>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <!--Start single blog post-->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog-post">
                                <div class="img-holder">
                                    <img src="{{ imageFile('latest-news/1.jpg') }}" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="{{ route('user.blog') }}">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="meta-info">
                                    <li>by<a href="#">Erik Momsen</a></li>
                                    <li><a href="#">June 20th, 2016</a></li>
                                </ul>
                                <h3 class="title">
                                    <a href="{{ route('user.blog') }}">Scalar Consulting by News Technology Innovation
                                        Awards.</a>
                                </h3>
                            </div>
                        </div>
                        <!--End single blog post-->
                        <!--Start single blog post-->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog-post">
                                <div class="img-holder">
                                    <img src="{{ imageFile('latest-news/2.jpg') }}" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="{{ route('user.blog') }}">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="meta-info">
                                    <li>by<a href="#">Martin Luke</a></li>
                                    <li><a href="#">June 22th, 2016</a></li>
                                </ul>
                                <h3 class="title">
                                    <a href="{{ route('user.blog') }}">Are High-Multiple Tech Stocks Winners or
                                        Losers?</a>
                                </h3>
                            </div>
                        </div>
                        <!--End single blog post-->
                        <!--Start single blog post-->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog-post">
                                <div class="img-holder">
                                    <img src="{{ imageFile('latest-news/3.jpg') }}" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="{{ route('user.blog') }}">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="meta-info">
                                    <li>by<a href="#">Martin Luke</a></li>
                                    <li><a href="#">June 28th, 2016</a></li>
                                </ul>
                                <h3 class="title">
                                    <a href="{{ route('user.blog') }}">Are High-Multiple Tech Stocks Winners or
                                        Losers?</a>
                                </h3>
                            </div>
                        </div>
                        <!--End single blog post-->
                    </div>
                </div>
            </section>
            <!--End latest news area-->

            <!--Start call back area-->
            <section class="call-back-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-6">
                            <div class="call-back-form">
                                <div class="sec-title pull-left">
                                    <h1>Request a Call Back.</h1>
                                    <span class="border"></span>
                                </div>
                                <form action="{{ route('user.contact.submit') }}" method="POST">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-field">
                                                <input type="text"
                                                    class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                    placeholder="Your Name*" name="name">
                                                @error('name')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-field">
                                                <input type="text"
                                                    class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                    placeholder="Email Address*" name="email">
                                                @error('email')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="input-field">
                                                <input type="text"
                                                    class="form-control {{ $errors->has('subject') ? ' is-invalid' : '' }}"
                                                    placeholder="Subject" name="subject">
                                                @error('subject')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-field">
                                                <input type="text"
                                                    class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                                    placeholder="Phone" name="phone">
                                                @error('phone')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-field">

                                                <textarea placeholder="Message*" class="form-control {{ $errors->has('message') ? ' is-invalid' : '' }}"
                                                    name="message"></textarea>
                                                @error('message')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <button class="hvr-sweep-to-bottom" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="content">
                                            <p class="top-text"><strong>For Business:</strong> For Business inquiry fill
                                                our
                                                short feedback form or you can also send us an <span>email</span> and we’ll
                                                get
                                                in touch shortly, or Troll Free Number <span>- {{ getphone() }}.</span>
                                            </p>

                                            <p><strong>Office Hours :</strong> 07:30 and 19:00 Mon to Sat, Sun - Holiday</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End call back area-->

            <!--Start Brand area-->
            <section class="brand-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="brand">
                                <!--Start single brand item-->
                                <div class="single-brand-item">
                                    <a href="#"><img src="{{ imageFile('brand/1.png') }}"
                                            alt="Awesome Brand Image"></a>
                                </div>
                                <!--End single brand item-->
                                <!--Start single brand item-->
                                <div class="single-brand-item">
                                    <a href="#"><img src="{{ imageFile('brand/2.png') }}"
                                            alt="Awesome Brand Image"></a>
                                </div>
                                <!--End single brand item-->
                                <!--Start single brand item-->
                                <div class="single-brand-item">
                                    <a href="#"><img src="{{ imageFile('brand/3.png') }}"
                                            alt="Awesome Brand Image"></a>
                                </div>
                                <!--End single brand item-->
                                <!--Start single brand item-->
                                <div class="single-brand-item">
                                    <a href="#"><img src="{{ imageFile('brand/4.png') }}"
                                            alt="Awesome Brand Image"></a>
                                </div>
                                <!--End single brand item-->
                                <!--Start single brand item-->
                                <div class="single-brand-item">
                                    <a href="#"><img src="{{ imageFile('brand/5.png') }}"
                                            alt="Awesome Brand Image"></a>
                                </div>
                                <!--End single brand item-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Brand area-->
        </div>
    </div>
@endsection
