<?php

namespace App\Models\Akun;

use App\Models\HasilJawaban;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table ="pasien";
    protected $guarded = [''];
    public $timestamps = false;

    public $primaryKey ="kode_pasien";

    public function getPasien()
    {
        return $this->belongsTo('App\Models\User', "user_id", "id");
    }

    public function getJawaban()
    {
        return $this->belongsTo(HasilJawaban::class,"kode_pasien","kode_pasien");
    }
}
