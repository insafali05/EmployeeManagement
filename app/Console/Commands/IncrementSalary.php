<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\EmployeeSalary;
use Illuminate\Support\Facades\DB;

class IncrementSalary extends Command
{
    protected $signature = 'salary:increment';
    protected $description = 'Increment salary by 10% for each employee';

    public function handle()
    {

        if (EmployeeSalary::count() == 0) {
            $this->info('No salaries found in the database.');
            return;
        }


        EmployeeSalary::query()->update(['salary' => DB::raw('salary * 1.10')]);

        $this->info('All employee salaries have been increased by 10%.');
    }
}
