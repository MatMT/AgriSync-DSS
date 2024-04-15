<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersMapping extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'branch_id'
    ];

    // Relación uno a muchos inversa
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
