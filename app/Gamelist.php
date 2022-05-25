<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Gamelist extends Model
{
    static public function getAllGames()
    {
        $result = GameList::all();
        return $result;
    }
}
