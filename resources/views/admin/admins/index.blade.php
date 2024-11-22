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
                        <a href="{{ route('admin.admins.create') }}" class="btn btn-primary">Add
                            Admin</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive product-table">
                            <table class="display" id="basic-1">
                                <thead>

                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($admins as $admin)
                                        <tr>
                                            <td>{{ $admin->name }}</td>
                                            <td>{{ $admin->email }}</td>
                                            <td>
                                                <a href="{{ route('admin.admins.edit', $admin) }}"
                                                    class="btn btn-primary btn-xs"
                                                    data-original-title="btn btn-primary btn-xs" title="">Edit</a>
                                                <a href="{{ route('admin.admins.show', $admin) }}"
                                                    class="btn btn-success btn-xs"
                                                    data-original-title="btn btn-success btn-xs" title="">Show</a>

                                                <form action="{{ route('admin.admins.destroy', $admin) }}" method="POST"
                                                    style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-xs"
                                                        style="font-size: smaller;"
                                                        onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>
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
        $('#basic-1').DataTable();
    </script>
@endsection
