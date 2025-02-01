<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\EmployeeDetail;


class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }


    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employee_details,email',
            'phone' => 'required|string|max:10',
            'address' => 'required|string',
        ]);

        $employee = Employee::create(['name' => $request->name]);
        EmployeeDetail::create([
            'employee_id' => $employee->id,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address
        ]);

        return redirect()->route('employees.create')->with('success', 'Employee added successfully.');
    }

    public function show(Employee $employee)
    {
        $employee->load('details', 'salary');
        return view('employees.show', compact('employee'));
    }
}
