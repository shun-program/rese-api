<?php

namespace App\Http\Controllers;

use App\Models\shops;
use Illuminate\Support\Facades\DB;


class ShopsController extends Controller

{
    public function get()
    {
        $items = DB::table('shops')->get();
        return response()->json([
            'message' => 'Shops got successfully',
            'data' => $items
        ], 200);
    }

    public function getDetail($shop_id)
    {
        $items = Shops::where('shop_id', $shop_id)->first();
        return response()->json([
            'message' => 'Shop got successfully',
            'data' => $items
        ], 200);
    }

}


// {
//     public function get()
//     {
//         $items = Shops::where('like', 'area', 'genre')->get();
//         return response()->json([
//             'message' => 'OK',
//             'data' => $items
//         ], 200);
//     }

//     public function show($shop_id)
//     {
//         if($shop_id){
//             $items = Shops::where('like', 'area', 'genre')->where('id', $shop_id)->first();
//         return response()->json([
//             'message' => 'OK',
//             'data' => $items
//         ], 200);
//     } else {
//         return response()->json(
//             ['status' => 'Not Found'],
//             404
//         );
//     }
//    }
// }

