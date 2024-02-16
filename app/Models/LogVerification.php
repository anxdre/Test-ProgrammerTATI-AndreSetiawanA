<?php

namespace App\Models;

use Dentro\Yalr\Attributes\Middleware;
use Dentro\Yalr\Attributes\Name;
use Dentro\Yalr\Attributes\Prefix;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LogVerification extends Model
{
    use HasFactory;
    protected $table = 'verifications';
    protected$primaryKey = 'daily_log_id';

    public function dailyLog():BelongsTo
    {
        return $this->belongsTo(DailyLog::class);
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
