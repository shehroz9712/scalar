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
                        <h5>Edit Admin</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.admins.update', $admin->id) }}" method="POST" class="needs-validation" novalidate>
                            @csrf
                            @method('PUT')
                            <div class="row g-3">
                                <!-- Name Field -->
                                <div class="col-md-6">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Enter full name" value="{{ old('name', $admin->name) }}" required>
                                </div>

                                <!-- Email Field -->
                                <div class="col-md-6">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Enter email address" value="{{ old('email', $admin->email) }}" required>
                                </div>

                                <!-- Phone Field -->
                                <div class="col-md-6">
                                    <label class="form-label" for="phone">Phone</label>
                                    <input type="text" name="phone" id="phone" class="form-control"
                                        placeholder="Enter phone number (optional)"
                                        value="{{ old('phone', $admin->phone) }}">
                                </div>

                                <!-- Password Field -->
                                <div class="col-md-6">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="Enter a new password (leave blank to keep current password)">
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Update Admin</button>
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
