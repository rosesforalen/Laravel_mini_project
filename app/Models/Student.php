<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = "attendance";
    protected $fillable = [
        "name",
        "year",
        "course",
        "section",
        "username",
        "password",
        "time_in",
        "time_out",
    ];
}
