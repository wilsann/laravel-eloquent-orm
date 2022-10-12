<?php

namespace App\Models;

use App\Models\Matches;
use App\Models\Players;
use App\Models\Managers;
use App\Models\Stadiums;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Clubs extends Model
{
    // use HasFactory;

    public $table = 'clubs';

    protected $fillable = [
        'stadiums_id',
        'name',
        'logo',
        'url',
        'thropy',
        'created_at',
        'updated_at'
    ];

    //relasi
    public function stadiums()
    {
        //Path dari model stadium menggunakan stadium_id
        return $this->belongsTo(Stadiums::class, 'stadiums_id', 'id');
    }

    public function managers()
    {
        //satu club punya banyak manager
        return $this->hasMany(Managers::class, 'clubs_id');
    }

    public function players()
    {
        //satu club punya banyak player
        return $this->hasMany(Players::class, 'clubs_id');
    }

    public function match_clubs()
    {
        //satu match punya satu Home Club
        return $this->hasOne(Matches::class, 'clubs_id');
    }

    public function match_rivals()
    {
        //satu match punya satu Away Club
        return $this->hasOne(Matches::class, 'clubs_id');
    }
}
