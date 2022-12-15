<?php

namespace App\Models\Perawatan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    use HasFactory;
    protected  $table = "keluhan";

    protected $guarded = [""];

    public $timestamps = false;
}
