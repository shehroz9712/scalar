@extends('admin.layouts.app')
@section('css')
@endsection
@section('content')
    <div class="container-fluid dashboard-default-sec">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5>Form Details</h5>
                        <a href="{{ route('admin.forms.index') }}" class="btn btn-primary">Back to List</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h6><strong>Full Name:</strong></h6>
                                <p>{{ $form->firstName }} {{ $form->lastName }}</p>
                            </div>

                            <div class="col-md-6">
                                <h6><strong>Email:</strong></h6>
                                <p>{{ $form->email }}</p>
                            </div>

                            <div class="col-md-6">
                                <h6><strong>Phone:</strong></h6>
                                <p>{{ $form->phone }}</p>
                            </div>

                            <div class="col-md-6">
                                <h6><strong>Age:</strong></h6>
                                <p>{{ $form->age }}</p>
                            </div>

                            <div class="col-md-6">
                                <h6><strong>Partner:</strong></h6>
                                <p>{{ $form->partner ?? 'Not Provided' }}</p>
                            </div>

                            <div class="col-md-6">
                                <h6><strong>Kids:</strong></h6>
                                <p>{{ $form->kids ?? 'Not Provided' }}</p>
                            </div>

                            <div class="col-md-6">
                                <h6><strong>Annual Income:</strong></h6>
                                <p>{{ $form->annualIncome }}</p>
                            </div>

                            <div class="col-md-6">
                                <h6><strong>Home Ownership:</strong></h6>
                                <p>{{ $form->homeOwnership }}</p>
                            </div>

                            <div class="col-md-6">
                                <h6><strong>Advisor:</strong></h6>
                                <p>{{ $form->advisor }}</p>
                            </div>

                            <div class="col-md-6">
                                <h6><strong>Local Advisor:</strong></h6>
                                <p>{{ $form->localAdvisor }}</p>
                            </div>

                            <div class="col-md-6">
                                <h6><strong>Language Preference:</strong></h6>
                                <p>{{ $form->languagePreference }}</p>
                            </div>

                            <div class="col-md-12">
                                <h6><strong>Other Considerations:</strong></h6>
                                <p>{{ $form->otherConsiderations }}</p>
                            </div>
                        </div>

                        <!-- Timestamps -->
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <h6><strong>Created At:</strong></h6>
                                <p>{{ $form->created_at?->format('d M Y, h:i A') }}</p>
                            </div>
                            <div class="col-md-6">
                                <h6><strong>Last Updated At:</strong></h6>
                                <p>{{ $form->updated_at?->format('d M Y, h:i A') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
