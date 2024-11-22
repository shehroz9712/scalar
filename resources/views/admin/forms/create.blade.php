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
                        <h5>Admin Managment</h5>
                        <a href="{{ route('admin.admins.create') }}" class="btn btn-primary">Add Admin</a>
                    </div>
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script></script>
@endsection
