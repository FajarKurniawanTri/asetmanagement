<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class a_group extends Model
{
    protected $table = "a_groups"; // Nama tabel yang benar
    protected $primaryKey = "id";
    protected $fillable = ['group']; // Perbaikan pada fillable

    public function unit()
    {
        return $this->hasMany(a_unit::class, 'group_id'); // Sesuaikan dengan nama kolom yang benar
    }
}
