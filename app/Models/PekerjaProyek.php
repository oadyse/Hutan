<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PekerjaProyek extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'pekerjaproyek';
    //protected $guarded = ['id'];

    public function proyek()
    {
        // $this->relationsType("Model","Foreign_key","Local_key");
        return $this->belongsTo('App\Models\Proyek', 'id_proyek', 'id');
    }

    public function pegawai()
    {
        // $this->relationsType("Model","Foreign_key","Local_key");
        return $this->belongsTo('App\Models\Pegawai', 'nip', 'nip');
    }
}
