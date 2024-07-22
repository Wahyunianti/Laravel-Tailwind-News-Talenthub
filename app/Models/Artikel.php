<?php

namespace App\Models;
use App\Models\Kategori;
use App\Models\Komentar;
use App\Models\Balasan;
use App\Models\Tag;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikels';
    protected $fillable = ['id', 'judul', 'konten', 'foto', 'kategoris_id'];

    public function kategori(): BelongsTo {
        return $this->belongsTo(Kategori::class, 'kategoris_id');
    }

    public function komentar(): HasMany {
        return $this->hasMany(Komentar::class, 'artikels_id');
    }

    public function balasan(): HasMany {
        return $this->hasMany(Balasan::class, 'artikels_id');
    }

    public function tag(): HasMany {
        return $this->hasMany(Tag::class, 'artikels_id');
    }

}
