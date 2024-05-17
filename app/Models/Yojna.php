<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\HasOne;

class Yojna extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function yojna_category(): HasOne
    {
        return $this->HasOne(YojnaCategory::class, 'id', 'yojna_category_id');
    }
}
