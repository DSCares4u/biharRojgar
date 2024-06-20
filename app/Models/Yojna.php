<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\HasOne;
use illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;


class Yojna extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function yojna_category(): HasOne
    {
        return $this->HasOne(YojnaCategory::class, 'id', 'yojna_category_id');
    }

    public function yojna_form(): HasMany
    {
        return $this->hasMany(YojnaForm::class);
    }  
}
