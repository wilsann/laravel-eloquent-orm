<?php

namespace App\Models;

use App\Models\Clubs;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matches extends Model
{
    // use HasFactory;

    public $table = 'matches';

    protected $fillable = [
        'clubs_id',
        'rivals_id',
        'schedule',
        'created_at',
        'updated_at',
    ];

    //relasi
    public function clubs()
    {
        return $this->belongsTo(Clubs::class, 'clubs_id', 'id');
    }

    public function rivals()
    {
        return $this->belongsTo(Clubs::class, 'rivals_id', 'id');
    }
}
