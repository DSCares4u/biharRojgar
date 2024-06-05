<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\HasOne;

class Role extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function hire(): HasOne
    {
        return $this->HasOne(Hire::class, 'id', 'hire_id');
    }
}
