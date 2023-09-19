<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class a_nvr extends Model
{
    protected $table = "a_nvrs"; // Nama tabel yang benar
    protected $primaryKey = "id";
    protected $fillable = [
        'unit_id',
        'location_id',
        'merk',
        'type',
        'firmware',
        'channel',
        'hdd',
        'localip',
        'ponumber'
    ];
    public function unit()
    {
        return $this->belongsTo(a_unit::class, 'unit_id'); // Sesuaikan dengan nama kolom yang benar
    }
    public function location()
    {
        return $this->belongsTo(a_location::class, 'location_id'); // Sesuaikan dengan nama kolom yang benar
    }

}
