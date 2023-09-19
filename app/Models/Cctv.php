<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cctv extends Model
{
    use HasFactory;
    protected $fillable = [
        'unit_id',
        'location_id',
        'vr_id',
        'ip',
        'merk',
        'type',
        'view_area',
        'ponumber',
        'condition',
        'foto',
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
