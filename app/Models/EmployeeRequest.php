<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeRequest extends Model
{
    use HasFactory;

    protected $filable = [];

    public function employees()
    {
        return $this->belongsToMany(User::class, 'employee_requests', 'employee_id', 'id');
    }

    public function managers()
    {
        return $this->belongsToMany(User::class, 'employee_requests', 'manager_id', 'id');
    }

}
