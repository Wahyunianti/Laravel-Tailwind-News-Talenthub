<?php

namespace App\Models;
use App\Models\Komentar;
use App\Models\Artikel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Balasan extends Model
{
    use HasFactory;

    protected $table = 'balasans';
    protected $fillable = ['nama', 'balasan', 'komentars_id', 'artikels_id'];

    public function komentar(): BelongsTo {
        return $this->belongsTo(Komentar::class, 'komentars_id');
    }

    public function artikel(): BelongsTo {
        return $this->belongsTo(Artikel::class, 'artikels_id');
    }


}
