<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];


    public function hire(): HasOne
    {
        return $this->HasOne(Hire::class, 'id', 'hire_id');
    }

    public function jobs()
    {
        return $this->hasMany(Job::class, 'role_id');
    }


}
