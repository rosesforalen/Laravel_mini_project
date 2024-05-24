<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facilitator extends Model
{
    use HasFactory;

    protected $table = "facilitator";
    protected $fillable = [
        "name",
        "username",
        "password",
    ];
}
