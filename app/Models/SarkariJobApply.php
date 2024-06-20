<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class SarkariJobApply extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function sarkariJob()
    {
        return $this->belongsTo(SarkariJob::class, 'sarkari_job_id');
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
