@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Employee List</h2>
            <a href="{{ route('employees.create') }}" class="btn btn-primary">Add Employee</a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Salary</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $employee)
                            <tr>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->details->email ?? '-' }}</td>
                                <td>{{ $employee->details->phone ?? '-' }}</td>
                                <td>{{ $employee->details->address ?? '-' }}</td>
                                <td>{{ $employee->salary->salary ?? 'Not Assigned' }}</td>
                                <td>
                                    <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-info btn-sm">View</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                @if($employees->isEmpty())
                <div class="alert alert-warning text-center mt-3">No employees found.</div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection