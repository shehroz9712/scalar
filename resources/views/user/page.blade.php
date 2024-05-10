@extends('user.layouts.app')
@section('css')
@endsection
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url({{ imageFile('breadcrumb/breadcrumb-bg.jpg') }});">
        <div class="container text-center">
            <h1>page</h1>
            <span class="border"></span>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start breadcrumb bottom area-->
    <section class="breadcrumb-bottom-area">
        <div class="container">
            <div class="left pull-left">
                <a href="#">Services Single</a>
            </div>
            <div class="right pull-right">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><span class="flaticon-arrowhead-pointing-to-the-right"></span></li>
                    <li><a href="#">Services</a></li>
                    <li><span class="flaticon-arrowhead-pointing-to-the-right"></span></li>
                    <li>Services Single</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End breadcrumb bottom area-->

    <!--Start service v6 area-->
    <section class="service-v6-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right">
                    <div class="services-v6-content">
                        <!--Start Restructuring Turnaround content-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="restructuring-turnaround">
                                    <div class="sec-title two">
                                        <h1>page</h1>
                                        <span class="border"></span>
                                    </div>
                                    <div class="text-holder">
                                        <p>We work closely with Employers across all industry sectors to ensure that
                                            their internal Human Resource systems and processes align to their business
                                            requirements. Our “Best Practice” strategies ensure that all HR processes
                                            are directly aligned to legislative obligations, while integrating ideas
                                            from professional research. </p>
                                        <p>We take a 360-degree view of your situation using our deep experience,
                                            industry specialization and global reach to help you get to the core of the
                                            issue with a full-service portfolio of capabilities.</p>
                                    </div>
                                    <div class="img-holder">
                                        <img src="{{ imageFile('services/v6/restructuring.jpg') }}" alt="Awesome Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Restructuring Turnaround content-->
                        <!--Start Service Capabilities content-->
                        <div class="row">
                            <div class="srvice-capabilities-content">
                                <div class="col-lg-7">
                                    <div class="text-holder">
                                        <div class="sec-title three">
                                            <h1>Service Capabilities</h1>
                                            <span class="border"></span>
                                        </div>
                                        <p>Employers across all industry sectors to ensure seds that their internal
                                            Human Resource systems &processes alignbusiness requirement directly aligned
                                            to legislative obligations.</p>
                                        <ul>
                                            <li>Crisis and interim management</li>
                                            <li>Financial advisory services to companies</li>
                                            <li>Serve as liquidating trustee or receiver</li>
                                            <li>Cash flow, liquidity management and forecasting</li>
                                            <li>Working capital management</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="img-holder">
                                        <img src="{{ imageFile('services/v6/quote-bg.jpg') }}" alt="">
                                        <div class="overlay">
                                            <div class="box">
                                                <div class="content">
                                                    <h2>Providing Best Services to Our Customers still 1985.</h2>
                                                    <h3>Get Your Free Consulting!</h3>
                                                    <a href="#">Get quote</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Service Capabilities content-->
                        <!--Start profit-improvement-content--->
                        <div class="row">
                            <div class="profit-improvement-content">
                                <div class="sec-title three">
                                    <h1>Profit Improvement</h1>
                                    <span class="border"></span>
                                </div>
                                <div class="col-lg-4">
                                    <div class="chart-holder">
                                        <img src="{{ imageFile('services/v3/profit.jpg') }}" alt="Chart">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="text-holder">
                                        <p>We assist organizations that are underperforming or seeking us profit as well
                                            as those in transition those or in the midst get our our significant
                                            whatever the offerings are scalable to your unique needs situation.</p>
                                        <ul>
                                            <li>
                                                <h4>1. Cost-reduction analysis</h4>
                                                <p>Valuation and business analytic seds services industry sectors.</p>
                                            </li>
                                            <li>
                                                <h4>2. Margin &amp; Revenue strategies</h4>
                                                <p>Our flat, non -bure aucratic structure allows Human Resource systems
                                                </p>
                                            </li>
                                            <li>
                                                <h4>3. Lease Sigma Improvement</h4>
                                                <p>Drawing on seds of the resources of a consulting directly aligned.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End profit-improvement-content--->
                        <!--Start Single Service Tab Content-->
                        <div class="single-service-tab-content">
                            <ul class="nav nav-tabs tab-menu">
                                <li class="active"><a href="#valuation" data-toggle="tab">Valuation</a></li>
                                <li><a href="#investment" data-toggle="tab">Investment</a></li>
                                <li><a href="#advisory" data-toggle="tab">Advisory</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="valuation">
                                    <div class="top-text">
                                        <p>Scalar professionals provide a wide range off valuation and business
                                            analytic seds services. Whether you’re a startup or among that Fortune 500,
                                            all our seds offerings are scalable to your unique needs. Our flat, non
                                            -bure aucratic structure allows us to be nimble and responsive, all while
                                            drawing on seds of the resources of a global accounting and consulting
                                            network.</p>
                                    </div>
                                    <div class="select-service-list">
                                        <h4>Our select services include:</h4>
                                        <ul class="pull-left">
                                            <li><i class="fa fa-check" aria-hidden="true"></i>Financial and Tax
                                                Reporting</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i>Alternate Investment
                                                Services</li>
                                        </ul>
                                        <ul class="pull-left">
                                            <li><i class="fa fa-check" aria-hidden="true"></i>Complex Financial
                                                Instruments</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i>Business Case Analytics
                                            </li>
                                        </ul>
                                        <ul class="pull-left">
                                            <li><i class="fa fa-check" aria-hidden="true"></i>Transaction Support</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i>Tangible Assets</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane" id="investment">
                                    <p>Scalar professionals provide a wide range off valuation and business analytic
                                        seds services. Whether you’re a startup or among that Fortune 500, all our seds
                                        offerings are sle and responsive, all while drawing on seds of the resources of
                                        a global accounting and consulting network.<br>ssionals provide a wide range off
                                        valuation and business analytic seds services. Whether you’re a startup or among
                                        that Fortune 500, all our seds offerings are scalable to your unique needs. Our
                                        flat, non -bure aucratic structure allows us to be nimble and responsive, all
                                        while drawing on seds of the resources of </p>
                                </div>
                                <div class="tab-pane" id="advisory">
                                    <p>Scalar professionals provide a wide range off valuation and business analytic
                                        seds services. Whether you’re a startup or among that Fortune 500, all our seds
                                        offerings are sle and responsive,<br> all while drawing on seds of the resources
                                        of a global accounting and consulting network.</p>
                                </div>
                            </div>
                        </div>
                        <!--End Single Service Tab Content-->

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End service v6 area-->

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
