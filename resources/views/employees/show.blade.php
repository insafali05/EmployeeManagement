@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Employee Details</h2>
            <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back to Employee List</a>
        </div>

        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5>Personal Information</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <td>{{ $employee->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $employee->details->email ?? '-' }}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{ $employee->details->phone ?? '-' }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{ $employee->details->address ?? '-' }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="card shadow-sm mt-3">
            <div class="card-header bg-success text-white">
                <h5>Salary Details</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Salary</th>
                        <td>{{ $employee->salary->salary ?? 'Not Assigned' }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection