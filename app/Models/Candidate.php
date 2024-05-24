<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function users(): HasOne
    {
        return $this->HasOne(User::class, 'id', 'user_id');
    }

}