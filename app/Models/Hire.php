<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\HasOne;

class Hire extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function hire_plan(): HasOne
    {
        return $this->HasOne(HirePlan::class, 'id', 'hire_plan_id');
    }

}
