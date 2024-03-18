<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Models\User;

class Client extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
