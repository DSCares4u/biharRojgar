<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\HasOne;
use illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;


class Hire extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function hire_plan(): HasOne
    {
        return $this->HasOne(HirePlan::class, 'id', 'hire_plan_id');
    }

    // public function roles(): HasMany
    // {
    //     return $this->hasMany(Role::class);
    // }

    public function roles()
    {
        return $this->hasMany(Role::class, 'hire_id');
    }

}
