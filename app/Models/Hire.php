<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\HasOne;
use illuminate\Database\Eloquent\Relations\HasMany;

class Hire extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function hire_plan(): HasOne
    {
        return $this->HasOne(HirePlan::class, 'id', 'hire_plan_id');
    }

    public function roles(): HasMany
    {
        return $this->hasMany(Role::class);
    }  

}
