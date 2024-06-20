<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;


class HirePlan extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $guarded = [];

    public function hires(): HasMany
    {
        return $this->hasMany(Hire::class);
    }   

}
