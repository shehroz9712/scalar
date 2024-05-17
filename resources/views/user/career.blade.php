@extends('user.layouts.app')
@section('css')
@endsection
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url({{ imageFile('breadcrumb/breadcrumb-bg.jpg') }});">
        <div class="container text-center">
            <h1>Careers</h1>
            <span class="border"></span>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start breadcrumb bottom area-->
    <section class="breadcrumb-bottom-area">
        <div class="container">
            <div class="left pull-left">
                <a href="#">Careers</a>
            </div>
            <div class="right pull-right">
                <ul>
                    <li><a href="{{ route('user.index') }}">Home</a></li>
                    <li><span class="flaticon-arrowhead-pointing-to-the-right"></span></li>
                    <li>Careers</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End breadcrumb bottom area-->

    <!--Start career area-->
    <section class="career-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right">
                    <div class="career-content">
                        <div class="img-holder">
                            <img src="{{ imageFile('about/career/1.jpg') }}" alt="Awesome Image" style="width: 100%;">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <h1>Welcome to Our<br> Employment Section.</h1>
                                        <div class="button">
                                            <a class="hvr-sweep-to-bottom" href="{{ route('user.contact') }}">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <div class="sec-title two">
                                <h1>Current Openings</h1>
                                <span class="border"></span>
                            </div>
                            <p>Join our team of dedicated professionals who are passionate about making a positive impact on
                                people's lives. At Scalar Finances, we offer rewarding career opportunities in finance,
                                customer service, technology, and more.
                                s.</p>
                        </div>
                        <div class="job-box">
                            <div class="select-category">
                                <div class="category-item">
                                    <input type="radio" id="all-job" name="job" value="All Jobs">
                                    <label>All Jobs</label>
                                </div>
                                <div class="category-item">
                                    <input type="radio" id="cor-job" name="job" value="Corporate Office Jobs">
                                    <label>Corporate Office Jobs</label>
                                </div>
                                <div class="category-item">
                                    <input type="radio" id="mar-job" name="job" value="Marketing Jobs">
                                    <label>Marketing Jobs</label>
                                </div>
                            </div>
                            <div class="showing">
                                <p class="pull-left">Showing 01-11 of 24</p>
                            </div>
                            <table class="job-table">
                                <thead>
                                    <tr>
                                        <th class="job-title">Job Title</th>
                                        <th class="function">Job Function</th>
                                        <th class="location">Location</th>
                                        <th class="posted">Posted On</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h5>Development Manager</h5>
                                        </td>
                                        <td>
                                            <h5>Civil Construction</h5>
                                        </td>
                                        <td>
                                            <h5>Washington</h5>
                                        </td>
                                        <td>
                                            <h5>21-January-2015</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Programme Engineer</h5>
                                        </td>
                                        <td>
                                            <h5>Project Management</h5>
                                        </td>
                                        <td>
                                            <h5>Sanfransisco</h5>
                                        </td>
                                        <td>
                                            <h5>21-January-2015</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Account Manager</h5>
                                        </td>
                                        <td>
                                            <h5>Operations</h5>
                                        </td>
                                        <td>
                                            <h5>Las Vegas</h5>
                                        </td>
                                        <td>
                                            <h5>15-March-2015</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Human Resources Admin</h5>
                                        </td>
                                        <td>
                                            <h5>Sales</h5>
                                        </td>
                                        <td>
                                            <h5>Long Island</h5>
                                        </td>
                                        <td>
                                            <h5>14-April-2015</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Database Administrator</h5>
                                        </td>
                                        <td>
                                            <h5>Project Management</h5>
                                        </td>
                                        <td>
                                            <h5>Woodbridge</h5>
                                        </td>
                                        <td>
                                            <h5>05-May-2015</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Senior Programme Manager</h5>
                                        </td>
                                        <td>
                                            <h5>Civil Construction</h5>
                                        </td>
                                        <td>
                                            <h5>Washington</h5>
                                        </td>
                                        <td>
                                            <h5>10-october-2015</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Senior Industrial Planner</h5>
                                        </td>
                                        <td>
                                            <h5>Finance / Sales</h5>
                                        </td>
                                        <td>
                                            <h5>Long Island</h5>
                                        </td>
                                        <td>
                                            <h5>21-Novemb-2015</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Director, Oprations Manager</h5>
                                        </td>
                                        <td>
                                            <h5>Project Management</h5>
                                        </td>
                                        <td>
                                            <h5>Newyork City</h5>
                                        </td>
                                        <td>
                                            <h5>18-January-2016</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Accounting Counsultant /CAP</h5>
                                        </td>
                                        <td>
                                            <h5>Civil Construction</h5>
                                        </td>
                                        <td>
                                            <h5>California</h5>
                                        </td>
                                        <td>
                                            <h5>18-January-2016</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Programme Developer</h5>
                                        </td>
                                        <td>
                                            <h5>Finance / Sales</h5>
                                        </td>
                                        <td>
                                            <h5>Sanfransisco</h5>
                                        </td>
                                        <td>
                                            <h5>14-March-2016</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Development Manager</h5>
                                        </td>
                                        <td>
                                            <h5>Civil Construction</h5>
                                        </td>
                                        <td>
                                            <h5>Maryland</h5>
                                        </td>
                                        <td>
                                            <h5>25-June-2015</h5>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End career area-->
@endsection
