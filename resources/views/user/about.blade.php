@extends('user.layouts.app')
@section('css')
@endsection
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url({{ imageFile('breadcrumb/breadcrumb-bg.jpg') }});">
        <div class="container text-center">
            <h1>About us </h1>
            <span class="border"></span>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start breadcrumb bottom area-->
    <section class="breadcrumb-bottom-area">
        <div class="container">
            <div class="left pull-left">
                <a href="#">About us </a>
            </div>
            <div class="right pull-right">
                <ul>
                    <li><a href="{{ route('user.index') }}">Home</a></li>
                    <li><span class="flaticon-arrowhead-pointing-to-the-right"></span></li>
                    <li>About us </li>
                </ul>
            </div>
        </div>
    </section>
    <!--End breadcrumb bottom area-->
    <!--Start about area-->
    <section id="about">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right">
                    <div class="content">

                        <div class="sec-title">
                            <h1>About us </h1>
                            <span class="border"></span>
                        </div>

                        <p>
                        <ul>
                            <li>Who we are section: "Scalar was founded with one goal in mind, to help those often
                                overlooked gain access to financial resources typically reserved for the wealthy. We aim to
                                ensure every person can plan for a brighter tomorrow for themselves and their
                                families."</li>
                            <br>

                            <li>Our Story: "At Scalar, we believe financial wellness and security is a right. Our
                                mission is to make the best tools, guidance, services and knowledge available to those who
                                are often overlooked. Through our platform we connect consumers with certified professionals
                                who understand and connect with these communities to ensure they can enjoy life&#39;s
                                milestones to come, live comfortably in their retirement, and build generational wealth.
                                Welcome to your forever journey. Welcome to Scalar."</li>
                            <br>

                            <li>About Scalar: "At Scalar, we believe financial freedom and peace of mind is a right for
                                all, regardless of income, background or any trials and tribulations you&#39;ve faced. Our
                                business was built with a single purpose in mind, ensuring everyone has access to the best
                                tools, education and resources available to plan for the unknown and secure financial
                                freedom."</li>
                            <br>

                        </ul>

                    </div>

                </div>

            </div>

        </div>
        </div>
    </section>
    <!--End about area-->
@endsection
