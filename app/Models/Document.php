<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\HasOne;

class Document extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function users(): HasOne
    {
        return $this->HasOne(User::class, 'id', 'user_id');
    }
}
