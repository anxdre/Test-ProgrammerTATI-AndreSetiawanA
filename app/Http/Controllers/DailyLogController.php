<?php

namespace App\Http\Controllers;

use App\Models\DailyLog;
use App\Models\LogVerification;
use Dentro\Yalr\Attributes\Get;
use Dentro\Yalr\Attributes\Middleware;
use Dentro\Yalr\Attributes\Name;
use Dentro\Yalr\Attributes\Post;
use Dentro\Yalr\Attributes\Prefix;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

#[Prefix('log'), Name('log'), Middleware('auth')]
class DailyLogController extends Controller
{
    #[Get('daily', '.daily-log')]
    public function viewDailyLog()
    {
        $user = Auth::user();
        $dataset = DailyLog::query()->where('user_id', '=', $user->id)->get()->load(['user', 'verification']);
        return view('dailylog.daily-log')->with(['dataset' => $dataset]);
    }

    #[Get('daily/create', '.daily-log-create')]
    public function viewCreateDailyLog()
    {
        $user = Auth::user();
        return view('dailylog.create-log')->with(['user' => $user]);
    }

    #[Post('daily/create', '.daily-log-create-attempt')]
    public function createDailyLog(Request $request)
    {
        $request->validate([
            'message' => 'required'
        ]);

        try {
            $user = Auth::user();

            $data = new DailyLog();
            $data->message = $request->message;
            $data->user_id = $user->id;
            $data->save();

            $verification = new LogVerification();
            $verification->daily_log_id = $data->id;
            $verification->user_id = null;
            $verification->status = 'pending';
            $verification->save();


        } catch (\Exception $e) {
            return redirect()->back()->withErrors('error', 'Saving data failed');
        }
        return redirect()->route('log.daily-log');
    }

    #[Post('daily/update', '.daily-log-update-attempt')]
    public function updateDailyLog(Request $request)
    {
        $request->validate([
            'message' => 'required'
        ]);

        $data = DailyLog::query()->find($request->data_id);
        if ($data == null){
            return redirect()->route('log.daily-log')->withErrors('error', 'Data not found');
        }
        try {
            $data->message = $request->message;
            $data->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('error', 'Saving data failed');
        }
        return redirect()->route('log.daily-log');
    }
    #[Get('daily/edit','.daily-log-update')]
    public function viewEditLog(Request $request)
    {
        $user = Auth::user();
        $data = DailyLog::query()->find($request->data_id);

        if ($data == null) {
            return redirect()->back()->withErrors('data', 'Data not found');
        }

        if ($data->user_id != $user->id) {
            return redirect()->back()->withErrors('user', 'Data not found');
        }

        if ($data->verification->status != 'pending') {
            return redirect()->back()->withErrors('verification', 'Data was confirmed & cannot be edited');
        }

        return view('dailylog.create-log')->with(['user' => $user, 'data' => $data]);
    }
}
