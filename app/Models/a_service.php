<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class a_service extends Model
{
    use HasFactory;
    protected $fillable = [
        'startdate',
        'estdate',
        'finishdate',
        'trouble',
        'pic',
        'unit_id',
        'location_id',
        'merk',
        'ipcamera'
    ];
    public function unit()
    {
        return $this->belongsTo(a_unit::class, 'unit_id'); // Sesuaikan dengan nama kolom yang benar
    }
    public function location()
    {
        return $this->belongsTo(a_location::class, 'location_id'); // Sesuaikan dengan nama kolom yang benar
    }
    public function vr()
    {
        return $this->belongsTo(a_vr::class, 'vr_id');
    }
}
