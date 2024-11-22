@extends('admin.layouts.app')
@section('css')
@endsection
@section('content')
    <div class="container-fluid dashboard-default-sec">
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5>Create Admin</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.admins.store') }}" method="POST" class="needs-validation" novalidate>
                            @csrf
                            <div class="row g-3">
                                <!-- Name Field -->
                                <div class="col-md-6">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Enter full name" required>
                                </div>

                                <!-- Email Field -->
                                <div class="col-md-6">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Enter email address" required>
                                </div>

                                <!-- Phone Field -->
                                <div class="col-md-6">
                                    <label class="form-label" for="phone">Phone</label>
                                    <input type="text" name="phone" id="phone" class="form-control"
                                        placeholder="Enter phone number (optional)">
                                </div>

                                <!-- Password Field -->
                                <div class="col-md-6">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="Enter a strong password" required>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Create Admin</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script></script>
@endsection
