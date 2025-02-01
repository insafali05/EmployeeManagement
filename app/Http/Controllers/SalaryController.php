<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\EmployeeSalary;

class SalaryController extends Controller
{
    public function create()
    {
        $employees = Employee::with('salary')->get();
        return view('salaries.create', compact('employees'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'salaries' => 'required|array',
            'salaries.*.employee_id' => 'required|exists:employees,id',
            'salaries.*.salary' => 'required|numeric|min:0',
        ]);

        foreach ($request->salaries as $salaryData) {
            EmployeeSalary::updateOrCreate(
                ['employee_id' => $salaryData['employee_id']],
                ['salary' => $salaryData['salary']]
            );
        }

        return redirect()->route('salaries.create')->with('success', 'Salaries updated successfully.');
    }
}
