<?php

namespace App\Models\Perawatan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;
    protected $table ="table_pertanyaan";
    protected $guarded =[''];
    public $timestamp =false;

    public $primaryKey ="id";


    
}
