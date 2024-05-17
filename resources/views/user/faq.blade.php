@extends('user.layouts.app')
@section('css')
@endsection
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url({{ imageFile('breadcrumb/breadcrumb-bg.jpg') }});">
        <div class="container
        text-center">
            <h1>FAQ</h1>
            <span class="border"></span>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start breadcrumb bottom area-->
    <section class="breadcrumb-bottom-area">
        <div class="container">
            <div class="left pull-left">
                <a href="#">FAQ</a>
            </div>
            <div class="right pull-right">
                <ul>
                    <li><a href="{{ route('user.index') }}">Home</a></li>
                    <li><span class="flaticon-arrowhead-pointing-to-the-right"></span></li>
                    <li>FAQ</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End breadcrumb bottom area-->

    <!--Start faq content area-->
    <section class="faq-content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right">
                    <div class="faq-content-holder">
                        <div class="top">
                            <div class="title pull-left">
                                <div class="sec-title two">
                                    <h1>Frequently Asked Questions</h1>
                                    <span class="border"></span>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <p>Statisitc over 20 years of experience we’ll ensure you always get the best guidance. We
                                serve clients at every level of their organization, in whatever capacity we can be most
                                useful, whether as a trusted advisor to top management or as a hands-on coach for front
                                line employees. For every engagement, we assemble a uts team with the most appropriate
                                experience and expertise. Our goal is to optimise your business relationships by seds
                                our tailoring our services to your individual requirements a hands-on coach for front
                                line employees.</p>
                        </div>
                        <div class="faq-content">
                            <div class="accordion-box">
                                @foreach ($faqs as $faq)
                                    <!--Start single accordion box-->
                                    <div class="accordion accordion-block">
                                        <div class="accord-btn">
                                            <h4>{{ $faq->question }}?</h4>
                                        </div>
                                        <div class="accord-content">
                                            <p>{{ $faq->answer }}.</p>
                                        </div>
                                    </div>
                                    <!--End single accordion box-->
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End faq content area-->
@endsection
