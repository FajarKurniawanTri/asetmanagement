<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class a_unit extends Model
{
    protected $table = "a_units"; // Nama tabel yang benar
    protected $primaryKey = "id";
    protected $fillable = ['id','unit', 'group_id']; // Perbaikan pada fillable

    public function group()
    {
        return $this->belongsTo(a_group::class, 'group_id'); // Sesuaikan dengan nama kolom yang benar
    }
    public function nvr()
    {
        return $this->hasMany(a_nvr::class, 'unit_id'); // Sesuaikan dengan nama kolom yang benar
    }
}
