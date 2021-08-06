<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;


class ReservationController extends Controller
{

    public function post(Request $request)
    {
        $now = Carbon::now();
        $param = [
            "shop_id" => $request->shop_id,
            "user_id" => $request->user_id,
            "date" => $request->date,
            "time" => $request->time,
            "number" => $request->number,
            "created_at" => $now,
            "updated_at" => $now,
        ];
        DB::table('reservations')->insert($param);
        return response()->json([
            'message' => 'Status created successfully',
            'data' => $param
        ], 200);
    }


    public function get($user_id)
    {
        if ($user_id) {
            $item = Reservation::where('user_id', $user_id)->get();
            return response()->json([
                'message' => 'User got successfully',
                'item' => $item
            ], 200);
        } else {
            return response()->json(['status' => 'not found'], 404);
        }
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
