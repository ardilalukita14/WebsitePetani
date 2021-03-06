<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanan';
    // public function dataPetani()
    // {
    //     return $this->belongsTo('App\Models\DataPetani','id_datapetani', 'id');
    // }
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user', 'id');
    }
    public function pesananDetail()
    {
        return $this->hasMany(PesananDetail::class);
    }
}
