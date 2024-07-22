<?php

namespace App\Models;
use App\Models\Artikel;
use App\Models\Balasan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Komentar extends Model
{
    use HasFactory;

    protected $table = 'komentars';
    protected $fillable = ['nama', 'komentar', 'artikels_id'];

    public function artikel(): BelongsTo {
        return $this->belongsTo(Artikel::class, 'artikels_id');
    }

    public function balasan(): HasMany {
        return $this->hasMany(Balasan::class, 'komentars_id');
    }

}
