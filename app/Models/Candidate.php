<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Candidate extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function users(): HasOne
    {
        return $this->HasOne(User::class, 'id', 'user_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
