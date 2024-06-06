<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Keadaan extends Model
{
    use HasFactory;
    protected $guarded = [];

    Public function barangs(): HasMany
    {
        return $this->hasMany(Barang::class);
    }
}
