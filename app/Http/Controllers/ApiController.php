<?php

namespace App\Http\Controllers;

use App\Models\Clubs;
use App\Models\Managers;
use App\Models\Players;
use App\Models\Stadiums;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function clubs()
    {
        $clubs = Clubs::all();
        return $clubs;
    }

    public function players()
    {
        $clubs = Players::all();
        return $clubs;
    }

    public function managers()
    {
        $managers = Managers::all();
        return $managers;
    }

    public function stadiums()
    {
        $stadiums = Stadiums::all();
        return $stadiums;
    }
}
