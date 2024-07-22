<?php

namespace App\Models;
use App\Models\Artikel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategoris';
    protected $fillable = ['nama'];

    public function artikel(): HasMany {
        return $this->hasMany(Artikel::class, 'kategoris_id');
    }

}
