<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = 'clients';

    protected $fillable = [
        'name',
        'last_name', 
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
