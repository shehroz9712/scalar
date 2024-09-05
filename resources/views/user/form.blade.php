@extends('user.layouts.app')
@section('css')
    <style>
        label {
            display: block;
        }

        .mt-5 {
            margin-top: 5rem;
        }

        .input-group {
            display: block;
        }



        #msform {
            text-align: center;
            position: relative;
            margin-top: 20px
        }

        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding-bottom: 20px;
            position: relative
        }

        .form-card {
            text-align: left
        }

        #msform fieldset:not(:first-of-type) {
            display: none
        }

        #msform input:focus,
        #msform textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #3A75C4;
            outline-width: 0
        }

        #msform .action-button {
            width: 100px;
            background: #3A75C4;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 20px 0px 10px 5px;
            float: right
        }

        #msform .action-button:hover,
        #msform .action-button:focus {
            background-color: #311B92
        }

        #msform .action-button-previous {
            width: 100px;
            background: #616161;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 20px 5px 10px 0px;
            float: right
        }

        #msform .action-button-previous:hover,
        #msform .action-button-previous:focus {
            background-color: #000000
        }

        .card {
            z-index: 0;
            border: none;
            position: relative
        }

        .fs-title {
            font-size: 25px;
            color: #3A75C4;
            margin-bottom: 15px;
            font-weight: normal;
            text-align: left
        }

        .purple-text {
            color: #3A75C4;
            font-weight: normal
        }

        .steps {
            font-size: 25px;
            color: gray;
            margin-bottom: 10px;
            font-weight: normal;
            text-align: right
        }

        .fieldlabels {
            color: gray;
            text-align: left
        }

        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: lightgrey
        }

        #progressbar .active {
            color: #3A75C4
        }

        #progressbar li {
            list-style-type: none;
            font-size: 15px;
            width: 25%;
            float: left;
            position: relative;
            font-weight: 400
        }

        #progressbar #goals:before {
            font-family: FontAwesome;
            content: "\f201";
        }

        #progressbar #financials:before {
            font-family: FontAwesome;
            content: "\f0d6";
        }

        #progressbar #advisor:before {
            font-family: FontAwesome;
            content: "\f0c0";
        }

        #progressbar #personal:before {
            font-family: FontAwesome;
            content: "\f007";
        }

        #progressbar #confirm:before {
            font-family: FontAwesome;
            content: "\f00c"
        }

        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 20px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px
        }

        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1
        }

        #progressbar li.active:before,
        #progressbar li.active:after {
            background: #3A75C4
        }

        .progress {
            height: 20px
        }

        .progress-bar {
            background-color: #3A75C4
        }

        .fit-image {
            width: 100%;
            object-fit: cover
        }
    </style>
@endsection

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url({{ imageFile('breadcrumb/breadcrumb-bg.jpg') }});">
        <div class="container text-center">
            <h1>Get Started</h1>
            <span class="border"></span>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start breadcrumb bottom area-->
    <section class="breadcrumb-bottom-area">
        <div class="container">
            <div class="left pull-left">
                <a href="#">Get Started</a>
            </div>
            <div class="right pull-right">
                <ul>
                    <li><a href="{{ route('user.index') }}">Home</a></li>
                    <li><span class="flaticon-arrowhead-pointing-to-the-right"></span></li>
                    <li>Get Started</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End breadcrumb bottom area-->

    <!--Start contact form area-->
    <section class="contact-form-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-form">
                        <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                            <form id="msform" action="{{ route('user.submit-form') }}" method="POST">
                                @csrf
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="personal"><strong>Personal</strong></li>
                                    <li  id="goals"><strong>Financial Goals</strong></li>
                                    <li id="financials"><strong>Current Financials</strong></li>
                                    <li id="advisor"><strong>Advisor</strong></li>
                                </ul>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div> <br>
 <!-- Personal Information -->
 <fieldset>
    <div class="form-card">
        <h2 class="fs-title">Tell Us About Yourself:</h2>

        <div class="input-group mt-5">
            <label for="firstName">What is your first name?</label>
            <input type="text" class="form-control" id="firstName"
                placeholder="What is your first name?" name="firstName" required>
        </div>

        <div class="input-group mt-5">
            <label for="lastName">Nice to meet you, [First Name]. What is your last
                name?</label>
            <input type="text" class="form-control" id="lastName"
                placeholder="Nice to meet you, [First Name]. What is your last name?"
                name="lastName" required>
        </div>

        <div class="input-group mt-5">
            <label for="email">Please provide your email address</label>
            <input type="email" class="form-control" id="email"
                placeholder="Please provide your email address" name="email" required>
        </div>

        <div class="input-group mt-5">
            <label for="phone">What is a good phone number to reach you?</label>
            <input type="text" class="form-control" id="phone"
                placeholder="What is a good phone number to reach you?" name="phone"
                pattern="\d{3}-\d{3}-\d{4}" required>
        </div>

        <div class="input-group mt-5">
            <label for="birthYear">What is your birth Month year?</label>
            <input type="month" class="form-control" id="birthYear" placeholder="2024"
                name="birthYear" required>
        </div>

        <div class="input-group mt-5">
            <label for="zipCode">What is your ZIP code?</label>
            <input type="text" class="form-control" id="zipCode"
                placeholder="What is your ZIP code?" name="zipCode" pattern="\d{5}"
                required>
        </div>
        <button type="button" class="next action-button" value="Next">Next</button>
        <button type="button" class="previous action-button-previous">Previous
        </button>
    </div>

</fieldset>

                                <!-- Financial Goals -->
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Financial Goals:</h2>
                                        <div class="input-group mb-3">
                                            <label>At what age do you want to retire?</label>
                                            <select class="form-control" name="age" required>
                                                <option value="20-25">20 - 25</option>
                                                <option value="26-30">26 - 30</option>
                                                <option value="31-35">31 - 35</option>
                                                <option value="36-40">36 - 40</option>
                                                <option value="41-45">41 - 45</option>
                                                <option value="46-50">46 - 50</option>
                                                <option value="51-55">51 - 55</option>
                                                <option value="56-60">56 - 60</option>
                                                <option value="61-65">61 - 65</option>
                                                <option value="66-70">66 - 70</option>
                                                <option value="70+">70+</option>
                                                
                                            </select>
                                        </div>
                                        <div class="input-group">
                                            <label>Tell us about your family plans:</label>
                                        </div>
                                        <div class="input-group">
                                            <label><input type="checkbox" name="partner" value="spouse"> I have a
                                                spouse/partner or plan to marry</label>

                                        </div>
                                        <div class="input-group">
                                            <label><input type="checkbox" name="kids" value="kids"> I have or plan
                                                to have kids</label>

                                        </div>
                                        <div class="input-group">
                                            <label><input type="checkbox" name="support" value="others"> I have others
                                                I’d like to support (Parents, Siblings, etc.)</label>
                                        </div>
                                        <button type="button" class="next action-button" value="Next">Next</button>
                                    </div>
                                </fieldset>

                                <!-- Current Financials -->
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Current Financials:</h2>
                                        <div class="input-group">
                                            <label>How much does your household make per year before taxes?</label>
                                            <select name="annualIncome" class="form-control" required>
                                                <option value="" disabled selected>Select your income range</option>
                                                <option value="0-25K">$0 - $25K</option>
                                                <option value="25K-50K">$25K - $50K</option>
                                                <option value="50K-100K">$50K - $100K</option>
                                                <option value="100K-150K">$100K - $150K</option>
                                                <option value="150K-200K">$150K - $200K</option>
                                                <option value="200K-250K">$200K - $250K</option>
                                                <option value="250K+">$250K+</option>
                                                
                                            </select>
                                        </div>
                                        <div class="input-group">
                                            <label>Do you own or rent your home?</label>
                                            <select name="homeOwnership" class="form-control" required>
                                                <option value="" disabled selected>Select your home ownership status
                                                </option>
                                                <option value="rent">Rent</option>
                                                <option value="own">Own</option>
                                            </select>
                                        </div>

                                        <button type="button" class="next action-button" value="Next">Next</button>
                                        <button type="button" class="previous action-button-previous">Previous
                                        </button>

                                    </div>
                                </fieldset>

                                <!-- Advisor -->
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Advisor:</h2>
                                        <div class="input-group">
                                            <label for="importantAttribute">What attribute is most important for you when
                                                thinking about your future financial advisor? (Open form, word limit 200
                                                characters)</label>
                                            <textarea class="form-control" id="importantAttribute" name="advisor" style="width: 100%" required></textarea>
                                        </div>
                                        <div class="input-group">
                                            <label>Do you want your advisor to be local?</label>
                                            <select class="form-control" name="localAdvisor" required>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                        <div class="input-group">
                                            <label for="languagePreference">Language preference for your advisor</label>
                                            <input type="text" class="form-control" id="languagePreference"
                                                name="languagePreference" required>
                                        </div>
                                        <div class="input-group">
                                            <label for="otherConsiderations">Other information you're considering when
                                                choosing an advisor?</label>
                                            <textarea class="form-control" id="otherConsiderations" name="otherConsiderations" style="width: 100%"></textarea>
                                        </div>
                                       
        <button type="submit" class="next action-button" value="Next">Finish</button>
        <button type="button" class="previous action-button-previous">Previous
        </button>
                                    </div>
                                </fieldset>

                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End contact form area-->
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            var current_fs, next_fs, previous_fs; // fieldsets
            var opacity;
            var current = 1;
            var steps = $("fieldset").length;

            setProgressBar(current);

            $(".next").click(function() {
                // Validation logic before proceeding
                var form = $(this).closest("form");
                if (form.valid()) {
                    current_fs = $(this).closest("fieldset");
                    next_fs = current_fs.next();

                    // Add Class Active
                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                    // Show the next fieldset
                    next_fs.show();

                    // Hide the current fieldset with style
                    current_fs.animate({
                        opacity: 0
                    }, {
                        step: function(now) {
                            // For making fieldset appear animation
                            opacity = 1 - now;

                            current_fs.css({
                                'display': 'none',
                                'position': 'relative'
                            });
                            next_fs.css({
                                'opacity': opacity
                            });
                        },
                        duration: 500
                    });
                    setProgressBar(++current);
                }
            });

            $(".previous").click(function() {
                current_fs = $(this).closest("fieldset");
                previous_fs = current_fs.prev();

                // Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                // Show the previous fieldset
                previous_fs.show();

                // Hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // For making fieldset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(--current);
            });

            function setProgressBar(curStep) {
                var percent = parseFloat(100 / steps) * curStep;
                percent = percent.toFixed();
                $(".progress-bar")
                    .css("width", percent + "%")
            }

            // Form validation setup
            $("#msform").validate({
                errorPlacement: function(error, element) {
                    element.closest('.input-group').append(error);
                }
            });


        });
    </script>
@endsection
