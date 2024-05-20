<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\HasOne;

class YojnaForm extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function yojna(): HasOne
    {
        return $this->HasOne(Yojna::class, 'id', 'yojna_id');
    }
}
