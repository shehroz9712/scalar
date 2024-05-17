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
                    data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">
                <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="0" data-y="center" data-voffset="0"
                    data-transform_idle="o:1;"
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                    data-start="500">
                    <div class="slide-content-box">
                        <h1>Welcome to Scalar<br>Consulting</h1>
                        <h3>We’re here to offer the best support, to help<br>you troubleshoot any business issues.
                        </h3>
                        <div class="buttons">
                            <a class="hvr-sweep-to-bottom" href="#">Contact us</a>
                            <a class="black-bg hvr-sweep-to-bottom" href="#">Our Services</a>
                        </div>
                    </div>
                </div>
            </li>
            <li data-transition="slidedown">
                <img src="{{ imageFile('slides/3.jpg') }}" alt="" width="1920" height="695"
                    data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="2">
                <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="0" data-y="center" data-voffset="0"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none"
                    data-splitout="none" data-responsive_offset="on" data-start="1000">
                    <div class="slide-content-box">
                        <h1>New Standards of<br>Excellence</h1>
                        <h3>Our Scalar company offers a full range of <br>consulting services in all the
                            countries</h3>
                        <div class="buttons">
                            <a class="hvr-sweep-to-bottom" href="#">Contact us</a>
                            <a class="black-bg hvr-sweep-to-bottom" href="#">Our Services</a>
                        </div>
                    </div>
                </div>
            </li>
    

        </ul>
    </div>
</section>
<!--End Rev Slider Wrapper-->

<!--Start call to action area-->
<section class="call-to-action-area">
    <div class="container">
        <div class="title pull-left">
            <h2>Scalar & Company is one of the world's leading management consulting firms.</h2>
        </div>
        <div class="button pull-right">
            <a class="hvr-sweep-to-bottom" href="#">request quote</a>
        </div>
    </div>
</section>
<!--End call to action area-->

<!--Start welcome area-->
<section class="welcome-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="content">
                    <div class="sec-title">
                        <h1>Welcome to Scalar & Company</h1>
                        <span class="border"></span>
                    </div>
                    <h3>Scalar Consulting over 20 years of experience we’ll ensure you always get the best
                        guidance.</h3>
                    <p>We serve clients at every level of their organization, in whatever capacity we can be most
                        useful, whether as a trusted advisor to top management or as a hands-on coach for front line
                        employees. We strive to build a relationship of trust with every client, for the long-term,
                        70% of our work is for clients that we have served for over 10 years.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="video-box">
                    <img src="{{ imageFile('resources/video-bg.jpg') }}" alt="Awesome Image">
                    <div class="overlay">
                        <div class="box">
                            <div class="content text-center">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=KssOT2QVg-M"><img
                                        src="{{ imageFile('resources/play-btn.png') }}" alt="Awesome Image" /></a>
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
                        <p>We are focused on developing a field through market bonds, traders..</p>
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
                        <p>We Providing you with optimal solutions from Investment Banking.</p>
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
                    <h3>Experienced Consultants</h3>
                </div>
            </div>
            <!--End single fact counter-->
            <!--Start single fact counter-->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-fact-counter">
                    <span class="timer" data-from="50" data-to="2000" data-speed="5000"
                        data-refresh-interval="50">2000</span>
                    <h3>Projects Completed</h3>
                </div>
            </div>
            <!--End single fact counter-->
            <!--Start single fact counter-->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-fact-counter">
                    <span class="timer" data-from="0" data-to="100" data-speed="5000"
                        data-refresh-interval="50">100</span>
                    <i class="fa fa-percent" aria-hidden="true"></i>
                    <h3>Satisfied Customers</h3>
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
                    <h1>Industry Expertise</h1>
                    <span class="border"></span>
                </div>
            </div>
            <div class="col-md-7">
                <h2>Scalar Consulting has extensive experience across all industries. We help our clients set new
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
                        <h3>Financial Services</h3>
                        <p>We help financial institutions, from banking and insurance to wealth management and
                            securities </p>
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
                        <h3>Industrial Goods & Services</h3>
                        <p>Focused on helping our industrial clients, across all sectors to deliver sustainable
                            results. </p>
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
                        <h3>Airlines & Transportation</h3>
                        <p>We help financial institutions, from banking and insurance to wealth management and
                            securities </p>
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
                        <h3>Oil & Gas Companies</h3>
                        <p>Scalar supports oil and gas companies' critical decisions across a broad operational
                            functions.</p>
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
                        <h3>Healthcare Companies</h3>
                        <p>Healthcare companies must identify patients, fuel innovation and reduce the cost and
                            complexity.</p>
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
                        <h3>Telecommunications</h3>
                        <p>The challenge telecommunications companies is choosing where and how to participate in
                            the markets.</p>
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
                    <ol class="carousel-indicators">
                        <li data-target="#caption-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#caption-carousel" data-slide-to="1"></li>
                        <li data-target="#caption-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner text-center" role="listbox">
                        <div class="item active">
                            <div class="single-caption-carousel-item">
                                <h1>Our mission is to help our clients set new standards of excellence in their
                                    industries</h1>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-caption-carousel-item">
                                <h1>Our mission is to help our clients set new standards of excellence in their
                                    industries</h1>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-caption-carousel-item">
                                <h1>Our mission is to help our clients set new standards of excellence in their
                                    industries</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Start caption area-->

<!--Start how work and faq area-->
<section class="how-work-and-faq-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="how-we-work-content">
                    <div class="sec-title">
                        <h1>How We Work & FAQ’s</h1>
                        <span class="border"></span>
                    </div>
                    <h3>I am so clever that sometimes I do not get a single word of what I am saying and get very
                        confused. </h3>
                    <div class="content-and-video-gallery-holder">
                        <div class="video-gallery">
                            <img src="{{ imageFile('resources/how-we-work-video-gallery.jpg') }}"
                                alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content text-center">
                                        <a class="video-popup"
                                            href="https://www.youtube.com/watch?v=KssOT2QVg-M"><img
                                                src="{{ imageFile('resources/play-btn.png') }}"
                                                alt="Awesome Image" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-holder">
                            <p>We are a Scalar consulting company, located in UK. We’ve had the privilege to work
                                with some of the largest consulting company in a reputation for always bringing for
                                innovation to the table project.</p>
                            <a href="#">Know mroe about us<i class="fa fa-angle-double-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="faq-content">
                    <div class="accordion-box">
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Scalar Consulting continues to grow and expand?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Supported by a robust sales force and tight cost controls to the experienced
                                    sustained double-digit growth over a numberof years, only to find that their
                                    supply chain struggled to keep pace. In to particular, the initial state of the
                                    company’s sales.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Strategic and commercial approach with issues</h4>
                            </div>
                            <div class="accord-content">
                                <p>Supported by a robust sales force and tight cost controls to the experienced
                                    sustained double-digit growth over a numberof years, only to find that their
                                    supply chain struggled to keep pace. In to particular, the initial state of the
                                    company’s sales.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn active">
                                <h4>A digital prescription for the pharma industry</h4>
                            </div>
                            <div class="accord-content collapsed">
                                <p>Supported by a robust sales force and tight cost controls to the experienced
                                    sustained double-digit growth over a numberof years, only to find that their
                                    supply chain struggled to keep pace. In to particular, the initial state of the
                                    company’s sales.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>How do you successfully generate, capture, process?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Supported by a robust sales force and tight cost controls to the experienced
                                    sustained double-digit growth over a numberof years, only to find that their
                                    supply chain struggled to keep pace. In to particular, the initial state of the
                                    company’s sales.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End how we work and faq area-->

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
                                        <h2>“ Scalar has helped us to just have a better handleon everything in
                                            our business ” </h2>
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
                                        <h2>“ Scalar has helped us to just have a better handleon everything in
                                            our business ” </h2>
                                        <h4>Mark Vilton - Villo Finance Ceo</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-item">
                                    <div class="img-holder">
                                        <img src="{{ imageFile('resources/testimonial-carousel-1.png') }}"
                                            alt="Awesome Image">
                                    </div>
                                    <div class="content">
                                        <h2>“ Scalar has helped us to just have a better handleon everything in
                                            our business ” </h2>
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
                                        <h2>“ Scalar has helped us to just have a better handleon everything in
                                            our business ” </h2>
                                        <h4>Mark Vilton - Villo Finance Ceo</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-item">
                                    <div class="img-holder">
                                        <img src="{{ imageFile('resources/testimonial-carousel-1.png') }}"
                                            alt="Awesome Image">
                                    </div>
                                    <div class="content">
                                        <h2>“ Scalar has helped us to just have a better handleon everything in
                                            our business ” </h2>
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
                                        <h2>“ Scalar has helped us to just have a better handleon everything in
                                            our business ” </h2>
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
                        <a href="{{ route('user.blog') }}">Scalar Consulting by News Technology Innovation Awards.</a>
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
                        <a href="{{ route('user.blog') }}">Are High-Multiple Tech Stocks Winners or Losers?</a>
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
                        <a href="{{ route('user.blog') }}">Are High-Multiple Tech Stocks Winners or Losers?</a>
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
                    <form action="#">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="select-field">
                                    <select class="selectpicker" name="interest">
                                        <option>Choose Your Topic of Interest</option>
                                        <option>Choose Your Topic of Interest One</option>
                                        <option>Choose Your Topic of Interest Two</option>
                                        <option>Choose Your Topic of Interest Three</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" placeholder="Your Name *">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="email" placeholder="Your Mail *">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="phone" placeholder="Phone Number *">
                            </div>
                            <div class="col-md-6">
                                <button class="hvr-sweep-to-bottom" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content">
                                <p class="top-text"><strong>For Business:</strong> For Business inquiry fill our
                                    short feedback form or you can also send us an <span>email</span> and we’ll get
                                    in touch shortly, or Troll Free Number <span>- (+91) 00-700-6202.</span></p>

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
