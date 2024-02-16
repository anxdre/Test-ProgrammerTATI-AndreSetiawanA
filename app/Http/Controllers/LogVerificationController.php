<?php

namespace App\Http\Controllers;

use App\Models\LogVerification;
use App\Models\StaffRelation;
use Dentro\Yalr\Attributes\Get;
use Dentro\Yalr\Attributes\Middleware;
use Dentro\Yalr\Attributes\Name;
use Dentro\Yalr\Attributes\Post;
use Dentro\Yalr\Attributes\Prefix;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

#[Prefix('verification'), Name('verification'), Middleware('auth')]
class LogVerificationController extends Controller
{
    #[Get('/', '.all')]
    public function viewVerification()
    {
        $user = Auth::user();
        $listOfRelation = StaffRelation::query()->where('user_id', '=', $user->id)->get()->loadMissing('userRelation');
        $dataset = Collection::empty();

        foreach ($listOfRelation as $userStaff) {
            $data = $userStaff->userRelation->verification;
            if ($data->isNotEmpty()) {
                $dataset = $dataset->mergeRecursive($data);
            }
        }

        return view('dailylog.log-verification')->with(['dataset' => $dataset->reverse()]);
    }

    #[Post('attemp','.attemp')]
    public function verificationAttempt(Request $request)
    {
        $request->validate([
            'data_id' => 'required',
            'status' => 'required'
        ]);

        $user = Auth::user();
        $data = LogVerification::query()->find($request->data_id);

        if ($data == null) {
            return back()->withErrors(['error' => 'Data not found']);
        }

        $data->status = $request->status;
        $data->user_id = $user->id;
        $data->save();
        return redirect()->route('verification.all');
    }
}
