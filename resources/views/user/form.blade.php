@extends('user.layouts.app')
@section('css')
    <style>
        p {
            color: grey
        }

        #heading {
            text-transform: uppercase;
            color: #e59b60;
            font-weight: normal
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
            border: 1px solid #e59b60;
            outline-width: 0
        }

        #msform .action-button {
            width: 100px;
            background: #e59b60;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 0px 10px 5px;
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
            margin: 10px 5px 10px 0px;
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
            color: #e59b60;
            margin-bottom: 15px;
            font-weight: normal;
            text-align: left
        }

        .purple-text {
            color: #e59b60;
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
            color: #e59b60
        }

        #progressbar li {
            list-style-type: none;
            font-size: 15px;
            width: 20%;
            float: left;
            position: relative;
            font-weight: 400
        }

        #progressbar #account:before {
            font-family: FontAwesome;
            content: "\f13e"
        }

        #progressbar #personal:before {
            font-family: FontAwesome;
            content: "\f007"
        }

        #progressbar #payment:before {
            font-family: FontAwesome;
            content: "\f030"
        }

        #progressbar #advisor:before {
            font-family: FontAwesome;
            content: "\f030"
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
            background: #e59b60
        }

        .progress {
            height: 20px
        }

        .progress-bar {
            background-color: #e59b60
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
                        <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                            <h2 id="heading">Sign Up Your User Account</h2>
                            <p>Fill all form field to go to next step</p>
                            <form id="msform">
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="account"><i class="fas fa-user"></i><strong>Personal</strong>
                                    </li>
                                    <li id="personal"><i class="fas fa-wallet"></i><strong>Financial</strong></li>
                                    <li id="payment"><i class="fas fa-bullseye"></i><strong>Financial Goals</strong></li>
                                    <li id="advisor"><i class="fas fa-user-tie"></i><strong>Advisor</strong></li>
                                    <li id="confirm"><i class="fas fa-check"></i><strong>Finish</strong></li>
                                </ul>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div> <br> <!-- fieldsets -->
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="fs-title">Personal Information:</h2>
                                            </div>
                                            <div class="col-5">
                                                <h2 class="steps">Step 1 - 5</h2>
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <input type="text"
                                                class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}"
                                                placeholder="First Name*" name="firstName">
                                            @error('firstName')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="input-field">
                                            <input type="text"
                                                class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}"
                                                placeholder="Last Name*" name="lastName">
                                            @error('lastName')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="input-field">
                                            <input type="email"
                                                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                placeholder="Email Address*" name="email">
                                            @error('email')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="input-field">
                                            <input type="text"
                                                class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                                placeholder="Phone Number" name="phone">
                                            @error('phone')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="input-field">
                                            <input type="text"
                                                class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }}"
                                                placeholder="Birthday (YYYY-MM-DD)" name="birthday">
                                            @error('birthday')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="input-field">
                                            <input type="text"
                                                class="form-control{{ $errors->has('primaryLanguage') ? ' is-invalid' : '' }}"
                                                placeholder="Primary Language Spoken" name="primaryLanguage">
                                            @error('primaryLanguage')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="input-field">
                                            <input type="text"
                                                class="form-control{{ $errors->has('zipCode') ? ' is-invalid' : '' }}"
                                                placeholder="Zip Code" name="zipCode">
                                            @error('zipCode')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="input-field">
                                            <select
                                                class="form-control{{ $errors->has('bestWayToReach') ? ' is-invalid' : '' }}"
                                                name="bestWayToReach">
                                                <option value="">Best way to reach you?</option>
                                                <option value="phone">Phone</option>
                                                <option value="email">Email</option>
                                            </select>
                                            @error('bestWayToReach')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="fs-title">Financial Information:</h2>
                                            </div>
                                            <div class="col-5">
                                                <h2 class="steps">Step 2 - 5</h2>
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <input type="text"
                                                class="form-control{{ $errors->has('annualIncome') ? ' is-invalid' : '' }}"
                                                placeholder="Annual Pre Tax Income" name="annualIncome">
                                            @error('annualIncome')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="input-field">
                                            <input type="text"
                                                class="form-control{{ $errors->has('creditCardDebt') ? ' is-invalid' : '' }}"
                                                placeholder="Amount of Credit Card Debt" name="creditCardDebt">
                                            @error('creditCardDebt')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="input-field">
                                            <input type="text"
                                                class="form-control{{ $errors->has('studentLoanDebt') ? ' is-invalid' : '' }}"
                                                placeholder="Amount of Student Loan Debt" name="studentLoanDebt">
                                            @error('studentLoanDebt')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="input-field">
                                            <input type="text"
                                                class="form-control{{ $errors->has('otherDebt') ? ' is-invalid' : '' }}"
                                                placeholder="Amount of Other Debt" name="otherDebt">
                                            @error('otherDebt')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="input-field">
                                            <select
                                                class="form-control{{ $errors->has('homeOwnership') ? ' is-invalid' : '' }}"
                                                name="homeOwnership">
                                                <option value="">Do you Rent or Own your home?</option>
                                                <option value="rent">Rent</option>
                                                <option value="own">Own</option>
                                            </select>
                                            @error('homeOwnership')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div> <input type="button" name="next" class="next action-button"
                                        value="Next" />
                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Previous" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="fs-title">Financial Goals:</h2>
                                            </div>

                                            <div class="col-5">
                                                <h2 class="steps">Step 3 - 5</h2>
                                            </div>
                                        </div>

                                        <div class="input-field">
                                            <label>
                                                <input type="radio" name="workedWithAdvisor" value="yes"> Have you
                                                worked with a financial advisor before?
                                            </label>
                                        </div>
                                        <div class="input-field">
                                            <label>
                                                <input type="radio" name="lifeEvents" value="marriage"> Are you
                                                planning for any major life events (marriage, college, buying a home, etc.)?
                                            </label>
                                        </div>
                                        <div class="input-field">
                                            <label>
                                                When do you want to retire?
                                                <input type="text"
                                                    class="form-control{{ $errors->has('retirementDate') ? ' is-invalid' : '' }}"
                                                    placeholder="YYYY-MM-DD" name="retirementDate">
                                                @error('retirementDate')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </div>
                                        <div class="input-field">
                                            <label>
                                                Are you financially responsible for anyone else? (Spouses, kids, parents,
                                                etc.)
                                                <input type="text"
                                                    class="form-control{{ $errors->has('financialResponsibility') ? ' is-invalid' : '' }}"
                                                    name="financialResponsibility">
                                                @error('financialResponsibility')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </div>
                                        <div class="input-field">
                                            <textarea class="form-control{{ $errors->has('otherInfo') ? ' is-invalid' : '' }}" name="otherInfo"
                                                placeholder="Other information you would like to share with your future advisor? (Max 200 characters)"></textarea>
                                            @error('otherInfo')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>


                                        <input type="button" name="next" class="next action-button"
                                            value="Next" />
                                        <input type="button" name="previous" class="previous action-button-previous"
                                            value="Previous" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="fs-title">Financial Goals:</h2>
                                            </div>

                                            <div class="col-5">
                                                <h2 class="steps">Step 4 - 5</h2>
                                            </div>
                                        </div>

                                        <div class="input-field">
                                            <textarea class="form-control{{ $errors->has('importantAttribute') ? ' is-invalid' : '' }}" name="importantAttribute"
                                                placeholder="What attribute is most important for you when thinking about your future financial advisor? (Max 200 characters)"></textarea>
                                            @error('importantAttribute')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="input-field">
                                            <label>
                                                <input type="checkbox" name="localAdvisor"> Do you want your advisor to be
                                                local?
                                            </label>
                                        </div>
                                        <div class="input-field">
                                            <select
                                                class="form-control{{ $errors->has('languagePreference') ? ' is-invalid' : '' }}"
                                                name="languagePreference">
                                                <option value="">Language preference for your advisor</option>
                                                <option value="english">English</option>
                                                <option value="spanish">Spanish</option>
                                                <!-- Add other language options as needed -->
                                            </select>
                                            @error('languagePreference')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="input-field">
                                            <textarea class="form-control{{ $errors->has('otherConsiderations') ? ' is-invalid' : '' }}"
                                                name="otherConsiderations"
                                                placeholder="Other information you're considering when choosing an advisor? (Max 200 characters)"></textarea>
                                            @error('otherConsiderations')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>



                                        <input type="button" name="next" class="next action-button"
                                            value="Submit" /> <input type="button" name="previous"
                                            class="previous action-button-previous" value="Previous" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="fs-title">Finish:</h2>
                                            </div>
                                            <div class="col-5">
                                                <h2 class="steps">Step 4 - 5</h2>
                                            </div>
                                        </div>

                                        <br><br>
                                        <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2>
                                        <br>
                                        <div class="row justify-content-center">
                                            <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png"
                                                    class="fit-image"> </div>
                                        </div> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <h5 class="purple-text text-center">You Have Successfully
                                                    Signed Up</h5>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
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

    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

    console.log(current_fs, next_fs); // Check if the elements are correctly selected

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
});

$(".previous").click(function() {

    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();

    console.log(current_fs, previous_fs); // Check if the elements are correctly selected

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

$(".submit").click(function() {
    return false;
});

});

    </script>
@endsection
