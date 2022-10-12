<?php

namespace App\Models;

use App\Models\Clubs;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Players extends Model
{
    // use HasFactory;

    public $table = 'players';

    protected $fillable = [
        'clubs_id',
        'photo',
        'name',
        'height',
        'position',
        'created_at',
        'updated_at',
    ];

    //relasi
    public function clubs()
    {
        return $this->belongsTo(Clubs::class, 'clubs_id', 'id');
    }
}
