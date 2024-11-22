@extends('admin.layouts.app')
@section('css')
@endsection
@section('content')
    <div class="container-fluid dashboard-default-sec">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5>Forms List</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="forms-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($forms as $form)
                                        <tr>
                                            <td>{{ $form->id }}</td>
                                            <td>{{ $form->firstName }} {{ $form->lastName }}</td>
                                            <td>{{ $form->email }}</td>
                                            <td>{{ $form->phone }}</td>
                                            <td>
                                                <a href="{{ route('admin.forms.show', $form->id) }}"
                                                    class="btn btn-info btn-sm">View</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#forms-table').DataTable(); // Initialize DataTable
        });
    </script>
@endsection
