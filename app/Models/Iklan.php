<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Iklan extends Model
{
    use HasFactory;
    protected $table = 'iklans';
    protected $fillable = ['nama', 'url', 'foto', 'posisi'];

}
