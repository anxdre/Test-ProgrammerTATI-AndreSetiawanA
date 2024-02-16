<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class DailyLog extends Model
{
    use HasFactory;
    protected $table = 'daily_logs';

    public function user():BelongsTo
    {
       return $this->belongsTo(User::class);
    }

    public function verification():HasOne
    {
        return $this->hasOne(LogVerification::class);
    }
}
