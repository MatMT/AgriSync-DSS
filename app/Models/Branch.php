<?php

namespace App\Models;

use App\Models\UsersMapping;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Branch extends Model
{
    use HasFactory;
    protected $table = 'branches';

    protected $fillable = [
        'name',
        'region',
        'local_manager_id',
    ];

    public function gerente(): BelongsTo
    {
        return $this->belongsTo(User::class, 'local_manager_id');
    }

    // Cantidad de Usuarios en total de la Sucursal
    public function users()
    {
        return $this->hasMany(UsersMapping::class, 'branch_id');
    }

    // Dependientes de la Sucursal
    public function usersMappings()
    {
        return $this->hasMany(UsersMapping::class, 'branch_id', 'id');
    }
}
