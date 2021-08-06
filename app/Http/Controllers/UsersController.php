<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    //     public function get(Request $request)
    //     {
    //         if ($request->has('user_id')) {
    //             $items = DB::table('users')->where('id', $request->user_id)->get();
    //             return response()->json([
    //                 'message' => 'User got successfully',
    //                 'data' => $items
    //             ], 200);
    //         } else {
    //             return response()->json(['status' => 'not found'], 404);
    //         }
    // }

    // public function get(Request $user_id)
    // {
    //     if ($user_id) {
    //         $items = DB::table('users')->where('user_id', $user_id)->first();
    //         return response()->json([
    //             'message' => 'User got successfully',
    //             'data' => $items
    //         ], 200);
    //     } else {
    //         return response()->json(['status' => 'not found'], 404);
    //     }
    // }

    public function get($user_id){
        $user = DB::table('users')->where('user_id', $user_id)->first();
        return response()->json([
            'message' => 'Shop got successfully',
            'data' => $user
        ], 200);
    }
}

// public function get($user_id)
// {
//     if ($user_id) {
//         $items = DB::table('users')->where('id', $user_id)->first();
//         return response()->json([
//             'message' => 'User got successfully',
//             'data' => $items
//         ], 200);
//     } else {
//         return response()->json(['status' => 'not found'], 404);
//     }
// }