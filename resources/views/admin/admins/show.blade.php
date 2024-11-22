@extends('admin.layouts.app')
@section('css')
@endsection
@section('content')
    <div class="container-fluid dashboard-default-sec">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5>Admin Details</h5>
                        <a href="{{ route('admin.admins.index') }}" class="btn btn-primary">Back to List</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Admin Name -->
                            <div class="col-md-6">
                                <h6><strong>Name:</strong></h6>
                                <p>{{ $admin->name }}</p>
                            </div>

                            <!-- Admin Email -->
                            <div class="col-md-6">
                                <h6><strong>Email:</strong></h6>
                                <p>{{ $admin->email }}</p>
                            </div>

                            <!-- Admin Phone -->
                            <div class="col-md-6">
                                <h6><strong>Phone:</strong></h6>
                                <p>{{ $admin->phone ?? 'Not Provided' }}</p>
                            </div>

                            <!-- Admin Created At -->
                            <div class="col-md-6">
                                <h6><strong>Created At:</strong></h6>
                                <p>{{ $admin->created_at?->format('d M Y, h:i A') }}</p>
                            </div>

                            <!-- Admin Updated At -->
                            <div class="col-md-6">
                                <h6><strong>Last Updated At:</strong></h6>
                                <p>{{ $admin->updated_at?->format('d M Y, h:i A') }}</p>
                            </div>
                        </div>

                        <!-- Edit & Delete Actions -->
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <a href="{{ route('admin.admins.edit', $admin->id) }}" class="btn btn-warning">Edit Admin</a>
                                <form action="{{ route('admin.admins.destroy', $admin->id) }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this admin?')">Delete Admin</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script></script>
@endsection
