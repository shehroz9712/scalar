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
