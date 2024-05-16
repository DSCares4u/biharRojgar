<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HirePlan extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function hires(): HasMany
    {
        return $this->hasMany(Hire::class);
    }   

}
