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
                    <li><a href="{{ route('user.index') }}">Home</a></li>
                    <li><span class="flaticon-arrowhead-pointing-to-the-right"></span></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End breadcrumb bottom area-->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <!--Start branch area-->
    <section class="branch-area">
        <div class="container">
            <div class="branch-title pull-left">
                <h3>We Have <span>246 Branches</span> Over the World, Choose Your Nearest Branch Here.</h3>
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
                    @if (getAddress())
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-signs map"></span>
                            </div>
                            <div class="content">
                                <h4>Address:</h4>
                                <p>{!! getAddress() !!}</p>
                            </div>
                        </li>
                    @endif
                    @if (getPhone())
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-phone-call phn"></span>
                            </div>
                            <div class="content">
                                <h4>Phone:</h4>
                                <p>Call us: {{ getPhone() }}</p>
                            </div>
                        </li>
                    @endif
                    @if (getEmail())
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-e-mail-envelope envlop"></span>
                            </div>
                            <div class="content">
                                <h4>Mail Us:</h4>
                                <p>{{ getEmail() }}</p>
                            </div>
                        </li>
                    @endif
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

                        <form action="{{ route('user.contact.submit') }}" method="POST" class="contact-form">
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
                                    <div class="input-field">
                                        <input type="text"
                                            class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                            placeholder="Email Address*" name="email">
                                        @error('email')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-field">
                                        <input type="text"
                                            class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                            placeholder="Phone" name="phone">
                                        @error('phone')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
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

                                        <textarea placeholder="Message*" class="form-control {{ $errors->has('message') ? ' is-invalid' : '' }}"
                                            name="message"></textarea>
                                        @error('message')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>

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
