@extends('user.layouts.app')
@section('css')
@endsection
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url({{ imageFile('breadcrumb/breadcrumb-bg.jpg') }});">
        <div class="container text-center">
            <h1>Contact Us</h1>
            <span class="border"></span>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start breadcrumb bottom area-->
    <section class="breadcrumb-bottom-area">
        <div class="container">
            <div class="left pull-left">
                <a href="#">Contact Us</a>
            </div>
            <div class="right pull-right">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><span class="flaticon-arrowhead-pointing-to-the-right"></span></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End breadcrumb bottom area-->

    <!--Start branch area-->
    <section class="branch-area">
        <div class="container">
            <div class="branch-title pull-left">
                <h3>We Have <span>246 Branches</span> Over the World, Choose Your Nearest Branch Here.</h3>
            </div>
            <div class="select-field pull-right">
                <select class="selectpicker" name="interest">
                    <option>New York City</option>
                    <option>Dhaka</option>
                    <option>California</option>
                    <option>New York</option>
                    <option>Alabama</option>
                    <option>Texas</option>
                </select>
            </div>
        </div>
    </section>
    <!--End branch area-->

    <!--Start google map area-->
    <div class="google-map-area">
        <div class="google-map" id="contact-page-google-map" data-map-lat="40.712784" data-map-lng="-74.005941"
            data-icon-path="{{ imageFile('resources/map-marker.png') }}" data-map-title="Brooklyn, New York, United Kingdom"
            data-map-zoom="12"
            data-markers='{
                "marker-1": [40.712784, -74.005941, "<h4>Personal Trainning Camp</h4><p>228 Park Ave S, New York, UK</p>"]
            }'>
        </div>
        <div class="container">
            <div class="overlay">
                <ul>
                    <li>
                        <div class="icon-holder">
                            <span class="flaticon-signs map"></span>
                        </div>
                        <div class="content">
                            <h4>Address:</h4>
                            <p>008 City of Work ,<br> New York, NY 641109 US.</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon-holder">
                            <span class="flaticon-phone-call phn"></span>
                        </div>
                        <div class="content">
                            <h4>Phone:</h4>
                            <p>Call us: +3257 700 1430</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon-holder">
                            <span class="flaticon-e-mail-envelope envlop"></span>
                        </div>
                        <div class="content">
                            <h4>Mail Us:</h4>
                            <p>{{ getEmail() }}</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon-holder">
                            <span class="flaticon-clock"></span>
                        </div>
                        <div class="content">
                            <h4>Office Hours</h4>
                            <p>Mon - Sat 9.00 - 20.00,<br>Sunday CLOSED</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--End google map area-->

    <!--Start contact form area-->
    <section class="contact-form-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-form">
                        <div class="sec-title two">
                            <h1>Send Us Your Comments</h1>
                            <span class="border"></span>
                        </div>
                        <form action="#"
                            class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-field">
                                        <input type="text" placeholder="Your Name*" name="name">
                                    </div>
                                    <div class="input-field">
                                        <input type="text" placeholder="Email Address*" name="email">
                                    </div>
                                    <div class="input-field">
                                        <input type="text" placeholder="Phone" name="phone">
                                    </div>
                                    <div class="input-field">
                                        <input type="text" placeholder="Subject" name="subject">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <textarea placeholder="Message*" name="message"></textarea>
                                    <button type="submit">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End contact form area-->
@endsection
