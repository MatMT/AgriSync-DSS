<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function Type()
    {
        return $this->hasOne(TypeTransaction::class, 'id', 'type_transaction_id');
    }

    public function State()
    {
        return $this->hasOne(Status::class, 'id', 'status_transaction_id');
    }

    public function Approved()
    {
        return $this->hasOne(User::class, 'id', 'admin_id');
    }
}
