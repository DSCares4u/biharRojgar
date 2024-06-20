<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;


class Job extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $guarded = [];

    public function users(): HasOne
    {
        return $this->HasOne(User::class, 'id', 'user_id');
    }

    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'user_id');
    }

    public function address()
    {
        return $this->belongsTo(Address::class, 'user_id');
    }

    public function document()
    {
        return $this->belongsTo(Document::class, 'user_id');
    }

}
