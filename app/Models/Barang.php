<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barang extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function lab(): BelongsTo
    {
        return $this->belongsTo(Lab::class);
    }

    public function keadaan(): BelongsTo
    {
        return $this->belongsTo(Keadaan::class);
    }

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }

    Public function stok(): HasMany
    {
        return $this->hasMany(Stok::class);
    }
}


