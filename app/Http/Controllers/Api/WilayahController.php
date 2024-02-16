<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BaseResponseResource;
use App\Models\Wilayah;
use Dentro\Yalr\Attributes\Delete;
use Dentro\Yalr\Attributes\Get;
use Dentro\Yalr\Attributes\Name;
use Dentro\Yalr\Attributes\Post;
use Dentro\Yalr\Attributes\Prefix;
use Dentro\Yalr\Attributes\Put;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

#[Prefix('provinsi'), Name('provinsi')]
class WilayahController extends Controller
{
    #[Get('/', '.all')]
    public function getAll(Request $request)
    {
        if ($request->limit != null) {
            $data = Wilayah::query()->limit($request->limit)->get();
            return response()->json(new BaseResponseResource(true, 'list of wilayah', $data), 200);
        }

        $data = Wilayah::all();
        return response()->json(new BaseResponseResource(true, 'list of wilayah', $data), 200);
    }

    #[Get('/{id}', '.by-id')]
    public function getById(string $id)
    {
        $data = Wilayah::query()->where('kode', '=', $id)->get()->first();
        if ($data == null) {
            return response()->json(new BaseResponseResource(false, 'wilayah not found', null), 404);
        }
        return response()->json(new BaseResponseResource(true, "data wilayah : " . $data->nama, $data), 200);
    }

    #[Post('/', '.addNew')]
    public function addNew(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode' => 'required',
            'nama' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(new BaseResponseResource(false, $validator->errors()->first(), null), 404);
        }

        $data = new Wilayah();
        $data->kode = $request->kode;
        $data->nama = $request->nama;
        $data->save();
        return response()->json(new BaseResponseResource(true, 'data inserted successfuly', $data), 200);
    }

    #[Put('/{id}', '.update')]
    public function updateById(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(new BaseResponseResource(false, $validator->errors()->first(), null), 404);
        }

        $data = Wilayah::query()->where('kode', '=', $id)->get()->first();
        if ($data == null) {
            return response()->json(new BaseResponseResource(false, 'wilayah not found', null), 404);
        }

        $data->nama = $request->nama;
        $data->kode = $id;
        $data->save();
        return response()->json(new BaseResponseResource(true, 'data updated successfuly', $data), 200);
    }

    #[Delete('/{id}', '.delete')]
    public function deleteById(string $id)
    {
        $data = Wilayah::query()->where('kode', '=', $id)->get()->first();
        if ($data == null) {
            return response()->json(new BaseResponseResource(false, 'wilayah not found', null), 404);
        }
        $data->delete();
        return response()->json(new BaseResponseResource(true, 'data deleted successfuly', []), 200);
    }
}
