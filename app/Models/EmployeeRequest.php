<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class EmployeeRequest extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function manager()
    {
        return $this->belongsTo(User::class, 'manager_id')->select('id', 'names', 'last_names');
    }

    public function employee()
    {
        return $this->belongsTo(User::class, 'employee_id');
    }

}
