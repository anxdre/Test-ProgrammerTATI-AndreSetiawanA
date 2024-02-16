<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StaffRelation extends Model
{
    use HasFactory;
    protected $table = 'staff_relations';

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function userRelation():BelongsTo
    {
        return $this->belongsTo(User::class,'user_staff','id');
    }
}
