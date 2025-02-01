@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white text-center">
                <h4 class="mb-0">Add Employee</h4>
            </div>
            <div class="card-body">

                <!-- Success Message -->
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                @endif

                <!-- Validation Error Message -->
                @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                @endif

                <form method="POST" action="{{ route('employees.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name:</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required value="{{ old('name') }}">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email:</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" required value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phone:</label>
                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" required value="{{ old('phone') }}">
                        @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Address:</label>
                        <textarea name="address" class="form-control @error('address') is-invalid @enderror" rows="3" required>{{ old('address') }}</textarea>
                        @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success w-100">Add Employee</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection