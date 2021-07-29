<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Likes;

class LikesController extends Controller
{
    public function get($user_id)
    {
        if ($user_id) {
            $item = DB::table('user_id', $user_id)->get();
            return response()->json([
                "message" => 'like got successfully',
                'items' => $item
            ]);
        } else {
            return response()->json([
                'status' => 'not found'
            ], 400);
        }
    }
    // public function get(Request $request)
    // {
    //     if ($request->has('user_id')) {
    //         $item = DB::table('likes')->where('user_id', $request->user_id)->get();
    //         return response()->json([
    //             'message' => 'Like got successfully',
    //             'data' => $item
    //         ], 200);
    //     } else {
    //         return response()->json(['status' => 'not found'], 404);
    //     }
    // }
    public function post(Request $request)
    {
        $now = Carbon::now();
        $param = [
            "shop_id" => $request->shop_id,
            "user_id" => $request->user_id,
            "created_at" => $now,
            "updated_at" => $now
        ];
        DB::table('likes')->insert($param);
        return response()->json([
            'message' => 'Like created successfully',
            'data' => $param
        ], 200);
    }
    public function delete(Request $request)
    {
        DB::table('likes')->where('shop_id', $request->shop_id)->where('user_id', $request->user_id)->delete();
        return response()->json([
            'message' => 'Like deleted successfully',
        ], 200);
    }
}
