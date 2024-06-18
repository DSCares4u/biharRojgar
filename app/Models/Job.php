<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\HasOne;


class Job extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function users(): HasOne
    {
        return $this->HasOne(User::class, 'id', 'user_id');
    }

    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

}
