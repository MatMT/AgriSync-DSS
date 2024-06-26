<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\BelongsToManyRelationship;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
// Roles
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'names',
        'last_names',
        'gender',
        'DUI',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    // Un usuario (Gerente) tiene una Sucursal
    public function administraSucursal(): HasOne
    {
        return $this->hasOne(Branch::class, 'local_manager_id');
    }

    public function managedRequests(): HasMany
    {
        return $this->hasMany(EmployeeRequest::class, 'manager_id');
    }

    public function requestedEmployees(): HasMany
    {
        return $this->hasMany(EmployeeRequest::class, 'employee_id');
    }

    // Un usuario (Cliente) tiene muchas Cuentas
    public function accounts(): HasMany
    {
        return $this->hasMany(Account::class, 'client_id');
    }

    // Un usuario tiene un Estado
    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    // Un usuario tiene es parte de una sucursal
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }
}
