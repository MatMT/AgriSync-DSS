<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
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
    public function Sucursal(): HasOne
    {
        return $this->hasOne(Branch::class, 'local_manager_id');
    }

    // Un usuario (Gerente) solicitda uno o varios usuarios (Empleados)
    public function gerentes(): HasOne
    {
        return $this->belongsToMany(EmployeeRequest::class, 'manager_id', 'id');
    }

    // Un usuario (Empleado) es solicitado por un Gerente
    public function empleados(): HasOne
    {
        return $this->belongsToMany(EmployeeRequest::class, 'employee_id');
    }
}
