<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDetail extends Model
{
    use HasFactory;

    protected $fillable = ['employee_id', 'email', 'phone', 'address'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
