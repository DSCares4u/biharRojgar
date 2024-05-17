<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class YojnaCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function yojnas(): HasMany
    {
        return $this->hasMany(Yojna::class);
    }  
}
