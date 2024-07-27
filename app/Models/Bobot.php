<?php

namespace App\Models;
use App\Models\Artikel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bobot extends Model
{
    use HasFactory;
    protected $table = 'balasans';
    protected $fillable = ['nilai', 'artikels_id'];

    public function artikel(): BelongsTo {
        return $this->belongsTo(Artikel::class, 'artikels_id');
    }

}
