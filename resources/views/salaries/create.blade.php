@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="mb-0">Enter Salaries for Employees</h4>
                <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back to Employee List</a>
            </div>

            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Salary Entry</h5>
                </div>
                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    @endif

                    <form method="POST" action="{{ route('salaries.store') }}" id="salaryForm">
                        @csrf
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Employee Name</th>
                                        <th>Salary (₹)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($employees as $employee)
                                    <tr>
                                        <td>{{ $employee->name }}</td>
                                        <td>
                                            <input type="hidden" name="salaries[{{ $loop->index }}][employee_id]" value="{{ $employee->id }}">
                                            <input type="number" name="salaries[{{ $loop->index }}][salary]" class="form-control salary-input {{ $employee->salary->salary ? '' : 'border-warning' }}" step="0.01" min="0" placeholder="Enter salary" value="{{ $employee->salary->salary ?? '' }}">
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <button type="submit" class="btn btn-success w-100 mt-3">Save Salaries</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript to Clear Inputs After Submission -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let salaryForm = document.getElementById("salaryForm");
        salaryForm.addEventListener("submit", function() {
            document.querySelectorAll('.salary-input').forEach(input => {
                input.value = "";
            });
        });
    });
</script>
@endsection