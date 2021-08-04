<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
            "shop_id",
            "user_id",
            "date",
            "time",
            "number",
            "created_at",
            "updated_at",
    ];
}
