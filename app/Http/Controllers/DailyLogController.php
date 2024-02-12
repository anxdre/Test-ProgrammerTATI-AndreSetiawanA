<?php

namespace App\Http\Controllers;

use Dentro\Yalr\Attributes\Get;
use Dentro\Yalr\Attributes\Prefix;
use Illuminate\Http\Request;

#[Prefix('log')]
class DailyLogController extends Controller
{
    #[Get('daily','daily-log')]
    public function viewDailyLog()
    {
        return view('dailylog.daily-log');
    }
}
