<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $timestamps = false;
    public function pasien(){
        return $this->hasMany(Pasien::class);
    }
    public function obat_pasien(){
        return $this->hasMany(Obat_pasien::class);
    }
}
