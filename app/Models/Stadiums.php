<?php

namespace App\Models;

use App\Models\Clubs;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stadiums extends Model
{
    // use HasFactory;

    public $table = 'stadiums';

    protected $fillable = [
        'name',
        'capacity',
        'address',
        'created_at',
        'updated_at',
    ];

    public function clubs()
    {
        //Memiliki data stadium_id dari model Stadium
        return $this->hasOne(Clubs::class, 'stadiums_id');
    }
}
