<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class a_location extends Model
{
    
    protected $table = "a_locations"; // Nama tabel yang benar
    protected $primaryKey = "id";
    protected $fillable = ['id','location', 'unit_id']; // Perbaikan pada fillable


    public function unit()
    {
        return $this->belongsTo(a_unit::class, 'unit_id'); // Sesuaikan dengan nama kolom yang benar
    }
    public function nvr()
    {
        return $this->hasMany(a_nvr::class, 'location_id'); // Sesuaikan dengan nama kolom yang benar
    }
}

