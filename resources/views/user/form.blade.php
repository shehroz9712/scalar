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
                        <form action="#" class="contact-form">
                            <!-- Page 1: About You -->
                            <div class="page" id="page1">
                                <h2>Title: About You</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-field">
                                            <input type="text" placeholder="First Name" name="first_name">
                                        </div>
                                        <div class="input-field">
                                            <input type="text" placeholder="Last Name" name="last_name">
                                        </div>
                                        <div class="input-field">
                                            <input type="email" placeholder="Email Address" name="email">
                                        </div>
                                        <div class="input-field">
                                            <input type="tel" placeholder="Phone Number" name="phone">
                                        </div>
                                        <div class="input-field">
                                            <input type="date" placeholder="Birthday" name="birthday">
                                        </div>
                                        <div class="input-field">
                                            <input type="text" placeholder="Primary Language Spoken" name="language">
                                        </div>
                                        <div class="input-field">
                                            <input type="text" placeholder="Zip Code" name="zip_code">
                                        </div>
                                        <div class="input-field">
                                            <select name="best_way">
                                                <option value="phone">Phone</option>
                                                <option value="email">Email</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="next-btn">Next</button>
                            </div>

                            <!-- Page 2: Financial Basics -->
                            <div class="page" id="page2" style="display: none;">
                                <h2>Title: Financial Basics</h2>
                                <!-- Add financial basics fields here -->
                                <button type="button" class="prev-btn">Previous</button>
                                <button type="button" class="next-btn">Next</button>
                            </div>

                            <!-- Page 3: Your Financial Goals -->
                            <div class="page" id="page3" style="display: none;">
                                <h2>Title: Your Financial Goals</h2>
                                <!-- Add financial goals fields here -->
                                <button type="button" class="prev-btn">Previous</button>
                                <button type="button" class="next-btn">Next</button>
                            </div>

                            <!-- Page 4: Your Advisor -->
                            <div class="page" id="page4" style="display: none;">
                                <h2>Title: Your Advisor</h2>
                                <!-- Add advisor fields here -->
                                <button type="button" class="prev-btn">Previous</button>
                                <button type="button" class="next-btn">Next</button>
                            </div>

                            <!-- Page 5: Success -->
                            <div class="page" id="page5" style="display: none;">
                                <h2>Title: Success</h2>
                                <p>Congratulations on taking the first step to financial freedom, your advisor will be in touch with you soon!</p>
                                <button type="button" class="prev-btn">Previous</button>
                                <button type="submit">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End contact form area-->
@endsection

@section('js')
<script>
    var current_page = 1;

    // Next button click event
    $('.next-btn').click(function() {
        $('#page' + current_page).hide();
        current_page++;
        $('#page' + current_page).show();
    });

    // Previous button click event
    $('.prev-btn').click(function() {
        $('#page' + current_page).hide();
        current_page--;
        $('#page' + current_page).show();
    });
</script>

@endsection
