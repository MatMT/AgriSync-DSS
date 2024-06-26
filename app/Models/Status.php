<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    public function employeeRequests()
    {
        return $this->hasMany(EmployeeRequest::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
