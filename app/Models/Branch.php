<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
}
